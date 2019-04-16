<?php
/**
 * Displays header menus. The menu in dashboard must be enabled.
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since 1.0.0
 */
?>

<?php if ( has_nav_menu( 'header' ) ) : ?>
  <!-- TODO: the main-navigation class is wrangled with a lot of assumptions. Clean it up later. -->
  <nav id="site-navigation" class="main-navigation header__nav" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'header',
        'menu_class'     => 'main-menu',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      )
    );
    ?>
  </nav><!-- #site-navigation -->
<?php endif; ?>

<?php if ( has_nav_menu( 'social' ) ) : ?>
  <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'social',
        'menu_class'     => 'social-links-menu',
        'link_before'    => '<span class="screen-reader-text">',
        'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
        'depth'          => 1,
      )
    );
    ?>
  </nav><!-- .social-navigation -->
<?php endif; ?>