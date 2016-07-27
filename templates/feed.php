<article <?php post_class('feed clearfix'); ?>>

  <div class="float-left">
    <h1 class="feed__title">
       <a href="<?php the_permalink(); ?>" class="feed__title__link"><?php the_title(); ?></a>
    </h1>
    <div class="feed__meta feed__meta--summary">
      <?php the_excerpt(); ?>
    </div>
  </div>

  <div class="feed__metas float-right">
    <div class="feed__meta">
      <div class="feed__meta__title">Written On</div>
      <p><?php the_time('M d, Y'); ?></p>
    </div>
    <div class="feed__meta">
      <div class="feed__meta__title">Category</div>
      <p>Journal</p>
    </div>
  </div>



</article>