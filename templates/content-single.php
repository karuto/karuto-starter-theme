<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="entry">

    <div class="hero hero--entry">
      <?php if (is_single()): ?>
      <aside class="entry__meta">
        <?php the_category(' &bull; '); ?> &bull; Written On <?php the_time('M d, Y'); ?>
      </aside>
      <h1 class="hero__title"><?php single_post_title(); ?></h1>
      <aside class="entry__excerpt"><?php echo get_the_excerpt(); ?></aside>
      <?php else: ?>
      <h1 class="hero__title"><?php single_post_title(); ?></h1>
      <?php endif; ?>
    </div>

    <div class="entry__content">
      <?php the_content(); ?>
    </div>

    <!-- Disable comments for now. -->
    <?php /*comments_template('/templates/comments.php');*/ ?>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </div>
  </article>
<?php endwhile; ?>
