

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: ?>

<div class="primary-feed-container">
  <div class="flex-stretch col-lg-6">
    <section class="feed feed--singlehero">
      <article class="feed-item">
      </article>
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


