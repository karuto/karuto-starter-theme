<?php use Roots\Sage\Titles; ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: /* If there exists posts */ ?>



  <?php if( is_front_page() && is_home() ): /* HOMEPAGE FEED */ ?>

    <div class="primary-feed-container row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <article class="feed-item--singlehero hentry">
          <header class="feed-item__header">
            <h3 class="feed-item__title">
              <a href="<?php the_permalink(); ?>">失败的追逐者</a>
            </h3>
            <summary class="feed-item__excerpt">时间不曾磨灭森薰笔下那个细腻优雅的维多利亚伦敦魅力，一如这篇 2008 年她进行的专访，至今灼灼其华。</summary>
            <time class="feed-item__time updated">March 23, 2014</time>
          </header>
          <div class="feed-item--singlehero__bg" style="background-image: url(https://raw.githubusercontent.com/karuto/mangatalk-modern/jsbackup/assets/img/thumb_default_lg.jpg);"></div>
        </article>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12">
        <section class="feed feed--featured">
          <div class="feed__header">
            <div class="feed__header__text">过往文章</div>
            <div class="feed__header__meta">Sorted by date</div>
          </div>
          <?php global $post;
           $myposts = get_posts('numberposts=6');
           foreach($myposts as $post) : ?>
            <?php get_template_part('templates/content', 
            get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
          <?php endforeach; ?>
        </section>
      </div>
    </div><!-- .primary-feed-container -->

  <?php else: /* NORMAL ARCHIVE FEED*/ ?>

    <section class="feed feed--archive">
      <div class="feed__header">
        <div class="feed__header__text"><?= Titles\title(); ?></div>
        <div class="feed__header__meta">Sorted by date</div>
      </div>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 
        get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      <?php endwhile; ?>
    </section>

  <?php endif; ?>



<?php endif; ?>


