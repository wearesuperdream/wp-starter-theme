<?php

/*
|--------------------------------------------------------------------------
| Load scripts
|--------------------------------------------------------------------------
|
|
*/

function enqueue_scripts() {
	
	$stylesFileMTime = filemtime(get_template_directory() . '/assets/dist/css/min/style.min.css');
	$scriptsFileMTime = filemtime(get_template_directory().'/assets/dist/scripts/min/scripts.min.js');
  

  wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700',100);
  wp_enqueue_style('fonts');


  wp_register_style('OKRA-styles', get_template_directory_uri() .'/assets/dist/css/min/style.min.css',100, $stylesFileMTime);
	wp_enqueue_style('OKRA-styles');

	wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css');
	wp_enqueue_style('font-awesome');

	wp_register_script('scripts', get_template_directory_uri() . '/assets/dist/scripts/min/scripts.min.js', '', $scriptsFileMTime, true);
	wp_enqueue_script('scripts');

  // Scripts
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', '', '', true);
  wp_enqueue_script('jquery');
  
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

/*
|--------------------------------------------------------------------------
| Clean up head
|--------------------------------------------------------------------------
|
| Remove some of the junk that WordPress adds to the header
|
*/

function head_cleanup() {
  // category feeds
  remove_action( 'wp_head', 'feed_links_extra', 3 );

  // post and comment feeds
  remove_action( 'wp_head', 'feed_links', 2 );

  // windows live writer
  remove_action( 'wp_head', 'wlwmanifest_link' );

  // xmlrpc.php
  remove_action( 'wp_head', 'rsd_link' );

  // WP version
  remove_action( 'wp_head', 'wp_generator' );

  // previous link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

  // start link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

  // links for adjacent posts
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
}

add_action( 'init', 'head_cleanup' );

/*
|--------------------------------------------------------------------------
| Featured Image Support
|--------------------------------------------------------------------------
|
| Enables featured image support on pages and posts
|
*/ 

add_theme_support( 'post-thumbnails' );
add_post_type_support('page', 'excerpt');

/* SVG Upload SVG Support */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
