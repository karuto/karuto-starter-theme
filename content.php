<?php
/**
 * The default template for displaying content. 
 * Used for regular single post only, not for index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

    <article id="post-<?php the_ID(); ?>">

      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php if ( 'post' == get_post_type() ) : ?>
        <h3 class="entry-meta roboto-font">Written By 
          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author() ?></a>
          on <?php echo get_the_date(); ?>&emsp;
          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php comments_number( '<span class="red">0 notes</span>', '<span class="red">1 note</span>', '<span class="red">% notes</span>' ); ?></a>
        </h3>
        <?php endif; ?>
      </header><!-- .entry-header -->   

      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->

	  <footer class="entry-footer">
        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Back to <?php bloginfo( 'name' ); ?></a>
        </h1>
	  </footer>
    </article><!-- #post -->
