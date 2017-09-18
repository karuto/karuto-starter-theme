<!-- ### CONTENT FEED -->
<?php get_template_part('templates/feed'); ?>

<?php the_posts_navigation(array(
            'prev_text'          => __( 'Previous' ),
            'next_text'          => __( 'Next' ),
            'screen_reader_text' => __( 'Posts navigation' ),
)); ?>
