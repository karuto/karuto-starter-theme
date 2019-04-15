<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?>>
	<div class="entry">

		<div class="hero hero--entry">
			<aside class="entry__meta">
				<?php the_category(' &bull; '); ?> &bull; Written On <?php the_time('M d, Y'); ?>
			</aside>
			<h1 class="hero__title"><?php single_post_title(); ?></h1>
			<aside class="entry__excerpt"><?php echo get_the_excerpt(); ?></aside>
		</div>

		<div class="entry__content">
			<?php the_content(); ?>
			<?php if(is_single()): ?>
				<aside class="entry__copyright">
					<a class="entry__copyright__link" href="<?php the_permalink(); ?>"><?php single_post_title(); ?></a> appeared first on <a class="entry__copyright__link" href="<?= esc_url(home_url('/')); ?>">Vincent Zhang's website.</a>
					I only publish the highest quality, 100% original articles.
					<a class="entry__copyright__link" target="_blank" href="//eepurl.com/c8ysuj">Subscribe to my email list</a> to get exclusive content and personal updates that I don't share anywhere else, ever.
				</aside>
			<?php endif; ?>
		</div>

	</div>
</article>

