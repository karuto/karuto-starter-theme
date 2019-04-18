<?php
/**
 * Template for the overall comments area.
 * Currently, it only supports posts that allow comments.
 * If the post does not allow comment, it will render nothing.
 * TODO: add support for closed comments.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 * Or, if the post does not allow comments. TODO: support?
*/
if ( post_password_required() || !comments_open() ) {
	return;
}

$discussion = twentynineteen_get_discussion_data();
?>
<div id="comments" class="<?php echo comments_open() ? 'comments-area' : 'comments-area comments-closed'; ?>">
	<div class="<?php echo $discussion->responses > 0 ? 'comments-title-wrap' : 'comments-title-wrap no-responses'; ?>">
		<?php get_template_part( 'templates/content/comments-title' ); ?>
		<?php
			// Only show discussion meta information when comments are open and available.
		if ( have_comments() && comments_open() ) {
			get_template_part( 'templates/content/comments-discussion-meta' );
		}
		?>
	</div><!-- .comments-title-flex -->
	<?php
	get_template_part( 'templates/content/comments-form' );
	if ( have_comments() ) {
		echo '<ul class="comment-list">';
		wp_list_comments(
			array(
				'walker'      => new TwentyNineteen_Walker_Comment(),
				'avatar_size' => 60,
				'short_ping'  => true,
				'style'       => 'ul',
			)
		);
		echo '</ul><!-- .comment-list -->';
	}
	?>
</div><!-- #comments -->
