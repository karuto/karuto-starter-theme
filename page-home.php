<?php
  /* 
  I deliberately not name this page "home.php" to avoid template fallbacks.
  This is the static home page. To make it visible, please remember to:
  1. Create an empty page with the slug "home".
  2. In Settings->Reading, set "Your homepage displays" to "a static page";
  3. In the "Homepage" dropdown menu, select page "home" and save changes.
  */
?>
<section class="hero hero--home">
  <h2 class="hero__title">
    Vincent Zhang
  </h2>
  <p class="hero__content">
    <a class="hero__link" href="/about">Software engineer</a> working at <s class="hero__s" href="#">MIT</s> <s class="hero__s" href="#">my startup</s> <a class="hero__link" target="_blank" href="https://github.com/karuto">OpenTable</a> in San Francisco.
    <br/>
    I read <a class="hero__link" href="/category/books">books</a>, write about <a class="hero__link" href="/category/software">software</a> and what I'm doing <a class="hero__link" href="/now">now</a>. You should <a class="hero__link" target="_blank" href="//eepurl.com/c8ysuj">subscribe for updates.</a>
  </p>
</section>

<section class="feeds feeds--home">
  <?php
    /*
    The following code requires this specific set up to work:
    1. Create categories "things-that-matter" and "software", to be the parent of other categories.
    2. Tag posts only with child categories, never directly with the 2 parent categories.
    3. The following code should generate feeds header links to "/category/{slug}".
    */

    $lifeCategoryId = getCategoryIdBySlug('things-that-matter');
    $lifeCategoryUrl = esc_url(get_category_link($lifeCategoryId));
    $lifePosts = getQueryIncludeCategory($lifeCategoryId, $postsPerPage);

    echo '<section class="feed--home">';
    echo '<div class="feed__header feed__header--home"><a class="feed__header__link" href="' . $lifeCategoryUrl . '">Writings on things that matter</a></div>';
    generateFeed($lifePosts);
    echo '</section>';

    $devCategoryId = getCategoryIdBySlug('software');
    $devCategoryUrl = esc_url(get_category_link($devCategoryId));
    $devPosts = getQueryIncludeCategory($devCategoryId, $postsPerPage);

    echo '<section class="feed--home">';
    echo '<div class="feed__header feed__header--home"><a class="feed__header__link" href="' . $devCategoryUrl . '">Writings on software development</a></div>';
    generateFeed($devPosts);
    echo '</section>';
  ?>
</section>



<!-- ### CONTENT FEED -->
<!-- <?php
if (is_paged()) {
  // only show the normal feeds if we are in a paginated page (not homepage)
  get_template_part('templates/feeds');
} 
?> -->
