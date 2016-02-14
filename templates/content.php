<article <?php post_class('feed-item'); ?>>
  <header class="feed-item__header clearfix">
    <h3 class="feed-item__title" data-postid="<?php $pid = get_the_ID(); echo $pid; ?>">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <summary class="feed-item__excerpt"><?php the_excerpt(); ?></summary>
    <time class="feed-item__time updated" datetime="<?= get_post_time('c', true); ?>"><?php the_time('M d, Y'); ?></time>
  </header>
</article>
