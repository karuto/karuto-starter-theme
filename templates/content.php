<article <?php post_class('feed-item'); ?>>
  <header class="feed-item__header clearfix">
    <h2 class="feed-item__title" data-postid="<?php $pid = get_the_ID(); echo $pid; ?>">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <time class="feed-item__time updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
  </header>
  <div class="feed-item__summary">
    <!-- <?php the_excerpt(); ?> -->
  </div>
</article>
