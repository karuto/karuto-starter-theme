<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="entry entry__wrapper">

    <div class="hero__content">
      <h1 class="hero__content__header"><?php single_post_title(); ?></h1>
      <div class="hero__content__meta">
        <h2 class="hero__content__meta__excerpt">
          <?php the_excerpt(); ?>
        </h2>
      </div>
    </div>

    <div class="entry__meta">
      <div class="entry__meta__date"><?php the_time('M d, Y'); ?></div>
      <div class="entry__meta__share"></div>
    </div>

    <div class="entry__content">
      <?php the_content(); ?>
    </div>
<!--       <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer> -->
    <?php comments_template('/templates/comments.php'); ?>

  </div>
  </article>
<?php endwhile; ?>
