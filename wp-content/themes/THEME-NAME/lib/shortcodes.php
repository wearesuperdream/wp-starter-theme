<?php 

/*
|--------------------------------------------------------------------------
| Shortcodes
|--------------------------------------------------------------------------
|
| Utilise this file to create all the shortcodes that you wish to
| use on this web build.
|
*/

// function test_func( $atts ){
//   return "Hello Test here";
// }
// add_shortcode( 'test_shortcode', 'test_func' );

function sitemap() {
  global $post;

  $args = array(
    'posts_per_page'  => -1,
    'title_li'  => '',
    'orderby' => 'menu_order, post_title',
    'order' => 'ASC',
    'post_type' => array('page'),
    'post_status' => 'publish',
    'exclude'          => array(115),
  );

  $allPages = get_posts( $args );

  $html = "<div class='sitemap'><ul>";
  foreach ($allPages as $page): 

    $html .= "<li><a href='" . get_permalink($page->ID) . "'>" . get_the_title($page->ID) . "</a></li>";

  endforeach;
  $html .= "</ul></div>";
  
  return $html;

}

add_shortcode('sitemap', 'sitemap');