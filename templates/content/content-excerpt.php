<?php
/**
 * Template part for displaying post archives and search results.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('feed'); ?>>

	<a href="<?php the_permalink(); ?>">
		<h2 class="feed__title"><?php the_title(); ?></h1>
	</a>

	<div class="feed__excerpt">
		<?php echo get_the_excerpt(); ?>
	</div>

	<div class="feed__metas">
		<?php the_category( ' &bull; ' ); ?> &bull; Written On <?php the_date(); ?>
	</div>

</article>
