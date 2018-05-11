<?php

/*
|--------------------------------------------------------------------------
| Advanced custom fields
|--------------------------------------------------------------------------
|
| Load in ACF settings
|
*/

/*
|--------------------------------------------------------------------------
| Adding ACF Options page
|--------------------------------------------------------------------------
*/

// Main Options Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

// Options Sub Pages
if( function_exists('acf_add_options_sub_page') ) {
  acf_add_options_sub_page('Brand');
	acf_add_options_sub_page('Social');
	acf_add_options_sub_page('Archives');
}

