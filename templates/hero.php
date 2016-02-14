<section class="hero">
  <div class="hero__wrapper container">
    <div class="hero__content">

    <?php if ( is_singular() ): global $post;
      if (has_post_thumbnail( $post->ID ) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      }
    ?>
      <h1 class="hero__content__header"><?php single_post_title(); ?></h1>
      <div class="hero__content__meta">
        <h2 class="hero__content__meta__excerpt">
          <?php the_excerpt(); ?>
        </h2>
      </div>
    <?php endif; ?>

    <?php if ( is_front_page() && is_home() ): ?>
      <h1 class="hero__content__header">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> 
        Ut enim ad minim veniam, quis nostrud exercitation.<br/>
      </h1>
    <?php endif; ?>

    </div>
  </div>

  <?php if ( is_singular() ): ?>
    <div class="hero__bg" style="background-image: url(<?php echo $image[0]; ?>);"></div>
  <?php endif; ?>

  <?php if ( is_front_page() && is_home() ): ?>
    <div class="hero__bg" style="background-image: url(http://i.imgur.com/vC23f1f.jpg);"></div>
  <?php endif; ?>

</section>
