<article <?php post_class('feed'); ?>>

  <a href="<?php the_permalink(); ?>">
    <h2 class="feed__title"><?php the_title(); ?></h1>
  </a>

  <div class="feed__excerpt">
    <?php the_excerpt(); ?>
  </div>

  <div class="feed__metas">
    Written On <?php the_date(); ?>
  </div>

</article>
