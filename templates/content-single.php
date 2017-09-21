<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="entry">

    <div class="hero">
      <h1 class="hero__title"><?php single_post_title(); ?></h1>
    </div>

    <aside class="entry__metas">
      <dl class="entry__meta entry__meta--summary">
        <dt class="entry__meta__title">Summary</dt>
        <dd><?php echo get_the_excerpt(); ?></dd>
      </dl>
      <dl class="entry__meta">
        <dt class="entry__meta__title">Written On</dt>
        <dd><?php the_time('M d, Y'); ?></dd>
      </dl>
      <dl class="entry__meta">
        <dt class="entry__meta__title">Category</dt>
        <dd><?php the_category(' &bull; '); ?></dd>
      </dl>
    </aside>

    <div class="entry__content">
      <?php the_content(); ?>
    </div>

    <?php comments_template('/templates/comments.php'); ?>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </div>
  </article>
<?php endwhile; ?>
