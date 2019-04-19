<?php
$fields =  array(

'author' =>
  '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) .
  ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
  '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
  '" size="30"' . $aria_req . ' /></p>',

'email' =>
  '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) .
  ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
  '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
  '" size="30"' . $aria_req . ' /></p>',

'url' =>
  '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
  '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
  '" size="30" /></p>',
);

apply_filters( 'comment_form_default_fields', $fields );
?>