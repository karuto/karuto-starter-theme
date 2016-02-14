<div class="entry entry__wrapper">

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