<?php
/**
 * The template that displays the top header content inside the <body>.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

<header id="masthead" class="site-header">

	<div class="site-branding-container">
		<?php get_template_part( 'templates/partials/header-site-branding' ); ?>
	</div><!-- .layout-wrap -->

</header><!-- #masthead -->

