

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: ?>

<div class="primary-feed-container row">
  <div class="col-lg-6">
    <section class="feed--singlehero">
      <!-- <article class="feed-item">
      </article> -->
      <div class="feed--singlehero__bg" style="background-image: url(https://raw.githubusercontent.com/karuto/mangatalk-modern/jsbackup/assets/img/thumb_default_lg.jpg);"></div>
    </section>
  </div>

  <div class="col-lg-6">
    <section class="feed feed--featured">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 
        get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      <?php endwhile; ?>
    </section>
  </div>
</div><!-- .primary-feed-container -->
<?php endif; ?>


