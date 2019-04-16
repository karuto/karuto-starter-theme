<?php
/**
 * Template for vincentzh.com's "home page", which is actually a "page" page.
 * I deliberately not name this page "home.php" to avoid template fallbacks.
 * 
 * This is the static home page. To make it visible, please remember to:
 * 1. Create an empty page with the slug "home".
 * 2. In Settings->Reading, set "Your homepage displays" to "a static page";
 * 3. In the "Homepage" dropdown menu, select page "home" and save changes.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since 1.0.0
 */
?>

<?php
get_template_part( 'templates/partials/html-starting-tags' );
get_template_part( 'templates/page-home' );
get_template_part( 'templates/partials/html-closing-tags' );
?>