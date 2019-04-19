<?php
/**
 * Template part for displaying the comment section's "add new comment" form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since added by Vincent Zhang
 */
?>

<?php 
$default_avatar = 'https://c.disquscdn.com/uploads/forums/128/5454/avatar92.jpg?1330293846';

$comment_content = '<div class="comment__body">';
$comment_content .= '<div class="comment__author">';
$comment_content .= '<img class="avatar" src="' . $default_avatar . '">';
$comment_content .= '</div>';
$comment_content .= '<div class="comment__content">';
$comment_content .= '<textarea id="comment" name="comment" aria-required="true"></textarea>';
$comment_content .= '</div>';
$comment_content .= '</div>';

/* https://codex.wordpress.org/Function_Reference/comment_form */
$comments_args = array(
  'label_submit'=>'Submit',
  'class_submit'=> 'comment__submit',
  'title_reply'=>'',
  'comment_notes_after' => '',
  'comment_field' => $comment_content,
);
comment_form( $comments_args ); 
?>