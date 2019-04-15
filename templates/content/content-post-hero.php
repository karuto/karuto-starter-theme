<?php
/**
 * Template part for displaying the hero section of posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since 1.0.0
 */

?>

<div class="hero hero--entry">
  <aside class="entry__meta">
    <?php the_category(' &bull; '); ?> &bull; Written On <?php the_time('M d, Y'); ?>
  </aside>
  <h1 class="hero__title"><?php single_post_title(); ?></h1>
  <aside class="entry__excerpt"><?php echo get_the_excerpt(); ?></aside>
</div>