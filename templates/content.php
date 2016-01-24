<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title" data-postid="<?php $pid = get_the_ID(); echo $pid; ?>">
      <a href="<?php the_permalink(); ?>">ID: <?php $pid = get_the_ID(); echo $pid; ?>, <?php the_title(); ?></a>
    </h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
