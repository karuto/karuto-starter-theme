<header class="banner">
  <div class="container">
    <a class="brand karu-logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="karu-global-navi nav-primary">
      <!-- Note: I will support WordPress menu in future.
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?> -->
    </nav>
  </div>
</header>
