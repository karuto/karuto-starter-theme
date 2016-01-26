<?php if ( is_front_page() && is_home() ): ?>
  <div class="header__mask">
  </div><!-- ENDING <div class="header__mask"> -->
<?php endif; ?>

<header class="banner">
  <div class="container">
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
</header>
