<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="entry">

    <div class="hero">
      <h1 class="hero__title"><?php single_post_title(); ?></h1>
    </div>

    <aside class="entry__metas">
      <div class="entry__meta entry__meta--summary">
        <div class="entry__meta__title">Summary</div>
        <?php the_excerpt(); ?>
      </div>
      <div class="entry__meta">
        <div class="entry__meta__title">Written On</div>
        <p><?php the_time('M d, Y'); ?></p>
      </div>
      <div class="entry__meta">
        <div class="entry__meta__title">Category</div>
        <p>Journal</p>
      </div>
    </aside>

    <div class="entry__content">
      <?php the_content(); ?>
    </div>

    <?php comments_template('/templates/comments.php'); ?>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </div>
  </article>
<?php endwhile; ?>
