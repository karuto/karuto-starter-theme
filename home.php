<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<a href="#" class="featuredstage__button--open"><h3>Click me</h3></a>
<section class="card card--fullscreen featuredstage__mask"></section>
<section class="card card--fullscreen featuredstage">
  <a href="#" class="featuredstage__button--close"><h3>Click me</h3></a>
</section>

<?php the_posts_navigation(); ?>
