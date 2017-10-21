<article <?php post_class('feed'); ?>>

  <a href="<?php the_permalink(); ?>">
    <h2 class="feed__title"><?php the_title(); ?></h1>
  </a>

  <div class="feed__excerpt">
    <?php echo get_the_excerpt(); ?>
  </div>

  <div class="feed__metas">
    <?php the_category( ' &bull; ' ); ?> &bull; Written On <?php the_date(); ?>
  </div>

</article>
