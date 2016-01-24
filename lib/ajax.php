<?php

namespace Roots\Sage\Ajax;

/**
 * Ajax interactions
 */
function my_enqueue_assets() {
  // wp_enqueue_script('ajax', get_stylesheet_directory_uri() . '../assets/scripts/k_ajax.js'), ['jquery'], null, true);
}

// function my_load_ajax_content () {
//   $pid        = intval($_POST['post_id']);
//   $the_query  = new WP_Query(array('p' => $pid));

//   if ($the_query->have_posts()) {
//     while ( $the_query->have_posts() ) {
//       $the_query->the_post();

//       $data = '
//       <div class="post-container">
//         <div id="project-content">
//           <h1 class="entry-title">'.get_the_title().'</h1>
//           <div class="entry-content">'.get_the_content().'</div>
//         </div>
//       </div>  
//       ';

//     }
//   } 
//   else {
//     echo '<div id="postdata">'.__('Didnt find anything', THEME_NAME).'</div>';
//   }
//   wp_reset_postdata();

//   echo '<div id="postdata">'.$data.'</div>';
// }

// add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
// add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );