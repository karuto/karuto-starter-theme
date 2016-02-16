<?php use Roots\Sage\Titles; ?>

<?php if ( is_front_page() || is_home() || is_singular() ): 
  if ( is_singular() ):
    global $post;
    if (has_post_thumbnail( $post->ID ) ):
?>
<section class="hero">
  <div class="hero__wrapper container">
    <div class="hero__content">

    <?php if ( is_singular() ):
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    ?>

      <h1 class="hero__content__header"><?php single_post_title(); ?></h1>
      <div class="hero__content__meta">
        <h2 class="hero__content__meta__excerpt">
          <?php the_excerpt(); ?>
        </h2>
      </div>

    <?php elseif ( is_front_page() && is_home() ): ?>
      <h1 class="hero__content__header">
        Karuto is a human that make things.<br/>
        Previously at Boston, he now lives in San Francisco Bay Area.<br/>
      </h1>
    <?php else: ?>
      <h1 class="hero__content__header">
        <?= Titles\title(); ?>
      </h1>
    <?php endif; ?>

    </div>
  </div>

  <?php if ( is_singular() ): ?>
    <div class="hero__bg" style="background-image: url(<?php echo $image[0]; ?>);"></div>
  <?php elseif ( is_front_page() && is_home() ): ?>
    <div class="hero__bg" style="background-image: url(https://raw.githubusercontent.com/karuto/mangatalk-modern/jsbackup/assets/img/thumb_default_lg.jpg);"></div>
  <?php else: ?>
    <div class="hero__bg" style="background-image: url(https://raw.githubusercontent.com/karuto/mangatalk-modern/jsbackup/assets/img/thumb_default_lg.jpg);"></div>
  <?php endif; ?>

</section>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
