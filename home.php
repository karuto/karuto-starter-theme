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

<a href="#" class="featuredstage__button--open"><h3>Click me</h3></a>

<!-- ### PAGE TITLE -->
<?php get_template_part('templates/page', 'header'); ?>

<!-- ### CONTENT FEED -->
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 
  get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<!-- content-single.php includes both mask and content featurestage -->
<?php get_template_part('templates/content', 'single'); ?>

<?php the_posts_navigation(); ?>
