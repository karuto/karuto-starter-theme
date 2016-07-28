<?php use Roots\Sage\Titles; ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: /* If there exists posts */ ?>

  <?php if( is_front_page() && is_home() ): /* HOMEPAGE FEED */ ?>

    <div class="feeds__header">
      All articles / Only the best
    </div>

    <div class="module feeds">
      <?php global $post; $myposts = get_posts('numberposts=10');
       foreach($myposts as $post) : ?>
        <?php get_template_part('templates/feed', 
        get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      <?php endforeach; ?>
    </div>

  <?php else: /* NORMAL ARCHIVE FEED*/ ?>
  <?php endif; ?>



<?php endif; ?>


