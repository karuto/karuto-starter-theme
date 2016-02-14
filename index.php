<!-- ### PAGE TITLE -->
<?php /*get_template_part('templates/page', 'header');*/ ?>

<!-- ### CONTENT FEED -->
<?php get_template_part('templates/feed'); ?>

<?php the_posts_navigation(array(
            'prev_text'          => __( '>' ),
            'next_text'          => __( '<' ),
            'screen_reader_text' => __( 'Posts navigation' ),
)); ?>