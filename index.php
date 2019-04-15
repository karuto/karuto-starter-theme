<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
	<?php get_template_part( 'templates/partials/head' ); ?>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<?php get_template_part( 'templates/partials/header' ); ?>
			<div id="content" class="site-content">
				<section id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					if ( is_home() ) {
						// only for "recent posts", not for static page as home page
						get_template_part( 'templates/home' );
					} else if ( is_single() ) {
						// any posts; excludes pages and attachments
						get_template_part( 'templates/post' );
					} else if ( is_page() ) {
						// any pages; excludes posts and attachments
						get_template_part( 'templates/page' );
					} else if ( is_archive() ) {
						get_template_part( 'templates/archive' );
					} else if ( is_search() ) {
						get_template_part( 'templates/search' );
					} else if ( is_404() ) {
						get_template_part( 'templates/404' );
					} else {
						get_template_part( 'templates/home' );
					}
					?>

					</main><!-- .site-main -->
				</section><!-- .content-area -->

			</div><!-- #content -->
			<?php get_template_part( 'templates/partials/footer' ); ?>
		</div><!-- #page -->
	</body>
</html>
