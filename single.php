<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div id="content" class="layout-content-wrap layout-single-post" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; // end of the loop. ?>
	  
    </div><!-- .layout-content-wrap -->

<?php get_footer(); ?>