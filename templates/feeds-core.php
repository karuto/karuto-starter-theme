<?php use Roots\Sage\Titles;
/*
This is the core section of the feeds template.
I isolated this so that it can be used for other type of feeds, such as search.
*/
?>

<section class="feeds">
  <?php get_template_part('templates/feeds-header'); ?>

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
