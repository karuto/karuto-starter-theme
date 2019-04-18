<div class="comment-metadata">
  <a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
    <?php
      /* translators: 1: comment date, 2: comment time */
      $comment_timestamp = sprintf( __( '%1$s at %2$s', 'twentynineteen' ), get_comment_date( '', $comment ), get_comment_time() );
    ?>
    <time datetime="<?php comment_time( 'c' ); ?>" title="<?php echo $comment_timestamp; ?>">
      <?php echo $comment_timestamp; ?>
    </time>
  </a>
  <?php
    $edit_comment_icon = twentynineteen_get_icon_svg( 'edit', 16 );
    edit_comment_link( __( 'Edit', 'twentynineteen' ), '<span class="edit-link-sep">&mdash;</span> <span class="edit-link">' . $edit_comment_icon, '</span>' );
  ?>
</div><!-- .comment-metadata -->