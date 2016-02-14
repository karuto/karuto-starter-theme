<div class="entry entry__wrapper">
  <div class="entry__meta">
    写到这里，我已渐渐忘记了自己初衷是想要纪念一座城市，还是纪念一个人。或许一切并没有那么奇怪。
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