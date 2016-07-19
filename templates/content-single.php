<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="entry entry__wrapper">

    <div class="hero">
      <h1 class="hero__header"><?php single_post_title(); ?></h1>
      <div class="hero__meta">
        <div class=""><?php the_time('M d, Y'); ?></div>
      </div>
    </div>

    <div class="entry__content">
      <?php the_content(); ?>
    </div>
<!--
    <?php comments_template('/templates/comments.php'); ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
-->

  </div>
  </article>
<?php endwhile; ?>
