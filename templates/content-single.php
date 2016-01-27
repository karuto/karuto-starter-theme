<!-- EVENTUALLY MOVE TO content-mask.php -->
<!-- MASK DIVIDER
<?php if (is_singular()): ?>
<section class="card card--fullscreen featuredstage__mask featuredstage__mask--active">
<?php else: ?>
<section class="card card--fullscreen featuredstage__mask">
<?php endif; ?>
</section>
MASK DIVIDER -->



<div class="entry entry__wrapper">

  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
<!--       <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer> -->
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  <?php endwhile; ?>

<a href="#" class="featuredstage__button--close"><h3>Click me</h3></a>
</div>


<!-- BELOW NOT USING RIGHT NOW -->


