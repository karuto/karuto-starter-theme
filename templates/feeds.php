<?php use Roots\Sage\Titles; ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: /* If there are posts */ ?>

  <section class="feeds">
    <div class="feeds__header">
      <?= Titles\title(); ?><!-- - All articles / Only the best -->
    </div>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('templates/feed',
      get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>

    <?php the_posts_navigation(array(
                'prev_text'          => __( 'Previous' ),
                'next_text'          => __( 'Next' ),
                'screen_reader_text' => __( 'Posts navigation' ),
    )); ?>
  </section>

<?php endif; ?>
