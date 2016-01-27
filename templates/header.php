<header class="banner">
  <div class="row">
    <div class="col-xs-12">
      <a class="brand karu-logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <nav class="karu-global-navi nav-primary">
        <div class="menu-all-pages-container">
          <ul id="menu-all-pages" class="nav">
            <li class="menu-item"><a href="#">About</a></li>
            <li class="menu-item"><a href="#">Writings</a></li>
            <li class="menu-item"><a href="#">Projects</a></li>
          </ul>
        </div>
        <!-- Note: I will support WordPress menu in future.
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?> -->
      </nav>
    </div>
  </div>
</header>

<!-- ### HOMEPAGE INTRO -->
<?php if ( is_front_page() && is_home() ): ?>
<section class="homeintro">
  <div class="homeintro__wrapper">
    <h3 class="homeintro__text">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
      Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> 
      Ut enim ad minim veniam, quis nostrud exercitation.<br/>
    </h3>
  </div>
</section>
<?php endif; ?>


<!-- ### SINGLE POST PAGE HEADER -->
<?php if ( is_singular() ): 
  global $post;
  if (has_post_thumbnail( $post->ID ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  }
?>
<section class="entryintro" data-imagesrc="<?php echo $image[0]; ?>">
  <header class="entryintro__wrapper">
    <h1 class="entryintro__title"><?php single_post_title(); ?></h1>
  </header>
</section>
<?php endif; ?>