<div class="entry entry__wrapper">
  <h1 class="hero__content__header"><?php single_post_title(); ?></h1>
  <div class="entry__meta">
    <div class="entry__meta__date"><?php the_time('M d, Y'); ?></div>
    <div class="entry__meta__share"></div>
  </div>

  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <?php the_content(); ?>
<!--       <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer> -->
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  <?php endwhile; ?>

</div>