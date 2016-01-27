<!-- ### PAGE TITLE -->
<?php get_template_part('templates/page', 'header'); ?>

<!-- ### CONTENT FEED -->
<?php get_template_part('templates/feed'); ?>

<!-- content-single.php includes both mask and content featurestage -->

<a href="#" class="featuredstage__button--open"><h3>Click me</h3></a>

<?php the_posts_navigation(); ?>
