<!-- ### INTRO -->
<section class="homeintro">
  <div class="homeintro__wrapper">
    <h3 class="homeintro__text">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
      Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> 
      Ut enim ad minim veniam, quis nostrud exercitation.<br/>
    </h3>
  </div>
</section>

<!-- ### PAGE TITLE -->
<?php get_template_part('templates/page', 'header'); ?>

<!-- ### CONTENT FEED -->
<?php get_template_part('templates/feed'); ?>

<!-- content-single.php includes both mask and content featurestage -->

<a href="#" class="featuredstage__button--open"><h3>Click me</h3></a>

<?php the_posts_navigation(); ?>
