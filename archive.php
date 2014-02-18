<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 * @subpackage 
 * @since 
 */

get_header(); ?>


<div class="archive-list">

    <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ 
	  while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title">
              <a class="entry-title-link" href="<?php the_permalink(); ?>" 
                title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                <?php the_title(); ?>
              </a>
            </h1>
            <span class="entry-date">
              <a href="<?php the_permalink(); ?>">
                <?php the_date(); ?>
              </a>
              &nbsp;
              <?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
              </span>
          </header><!-- .entry-header -->       
          <div class="entry-summary semi-focus"><?php the_excerpt(); ?></div>
        </article><!-- #post -->

      <?php endwhile; ?>

    <?php else : echo "Nothing here."; ?>
    <?php endif; // end have_posts() check ?>

</div><!-- .layout-content-list -->


<?php get_footer(); ?>