<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?>>
	<div class="entry">

		<div class="hero hero--entry">
			<h1 class="hero__title"><?php single_post_title(); ?></h1>
		</div>

		<div class="entry__content">
			<?php the_content(); ?>
		</div>

	</div>
</article>

