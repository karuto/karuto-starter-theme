<?php
/**
 * The default template for main loop logic (loading post items).
 * Used for index/archive/search only, not for single post.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="layout-content-list">

    <?php if ( have_posts() ) : ?>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title">
              <a class="entry-title-link" href="<?php the_permalink(); ?>" 
                title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), 
                the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                <?php the_title(); ?>
              </a>
            </h1>
            <span class="entry-date">
              <a href="<?php the_permalink(); ?>">
                <?php the_date(); ?>
              </a>
              &nbsp;
              <?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
              </span>&emsp;
            <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', 
            '</span>' ); ?>
          </header><!-- .entry-header -->       
          <div class="entry-summary semi-focus"><?php the_excerpt(); ?></div>
        </article><!-- #post -->

      <?php endwhile; ?>

    <?php else : echo "Nothing here."; ?>
    <?php endif; // end have_posts() check ?>

</div><!-- .layout-content-list -->