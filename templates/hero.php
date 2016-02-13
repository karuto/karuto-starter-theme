<!-- ### HOMEPAGE INTRO -->
<?php if ( is_front_page() && is_home() ): ?>
<section class="hero">
  <div class="hero__wrapper container">
    <h1 class="hero__text">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
      Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> 
      Ut enim ad minim veniam, quis nostrud exercitation.<br/>
    </h1>
  </div>
  <div class="hero__bg" style="background-image: url(http://i.imgur.com/vC23f1f.jpg);"></div>
</section>
<?php endif; ?>


<!-- ### SINGLE POST PAGE HEADER -->
<?php if ( is_singular() ): 
  global $post;
  if (has_post_thumbnail( $post->ID ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  }
?>
<section class="hero">
  <div class="hero__wrapper container">
    <h1 class="hero__text">
      <?php single_post_title(); ?>
    </h1>
  </div>
  <div class="hero__bg" style="background-image: url(<?php echo $image[0]; ?>);"></div>
</section>
<?php endif; ?>
