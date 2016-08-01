<?php use Roots\Sage\Titles; ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: /* If there exists posts */ ?>

  <div class="feeds__header">
    <?= Titles\title(); ?> - All articles / Only the best
  </div>

  <div class="module feeds">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('templates/feed', 
      get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
  </div>

<?php endif; ?>


