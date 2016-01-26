<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Ajax interactions
 */

function k_ajax_fetch_content($args) {
  $args = array(
    'p' => intval($_POST['post_id']),
    'post_type' => $_POST['post_type']
  );

  // $content_query = new WP_Query($args);
  // $content_data = 'Lorem Ipsum';

  // if ($content_query -> have_posts()) {
  //   while ( $content_query -> have_posts() ) {
  //     $content_query -> the_post();

  //     $content_data = '
  //     <div class="post-container">
  //       <div id="project-content">
  //         <h1 class="entry-title">'.get_the_title().'</h1>
  //         <div class="entry-content">'.get_the_content().'</div>
  //       </div>
  //     </div>  
  //     ';

  //   }
  // } else {
  //     echo '<div id="postdata"></div>';
  // }
  // wp_reset_postdata();

  // echo '<div id="postdata">'.$content_data.'</div>';
  echo 'yo';
  die();
}
add_action( 'wp_ajax_nopriv_ajax_fetch_content', __NAMESPACE__ . '\\k_ajax_fetch_content' );
add_action( 'wp_ajax_ajax_fetch_content', __NAMESPACE__ . '\\k_ajax_fetch_content' );
