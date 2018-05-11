<?php 
/*
|--------------------------------------------------------------------------
| Initialise
|--------------------------------------------------------------------------
|
| Initialise theme defaults
|
*/
require get_template_directory() . '/lib/init.php';


/*
|--------------------------------------------------------------------------
| Menus
|--------------------------------------------------------------------------
|
| Registers menus that can be used within the theme
|
*/
require get_template_directory() . '/lib/menus.php';


/*
|--------------------------------------------------------------------------
| BEM Menu
|--------------------------------------------------------------------------
|
| Inserts some BEM naming sensibility into Wordpress menus
| More info: https://github.com/roikles/Wordpress-Bem-Menu
|
*/
require get_template_directory() . '/lib/bem-menu.php';


/*
|--------------------------------------------------------------------------
| Custom Post Types
|--------------------------------------------------------------------------
|
| Register Custom Post Types/Custom Taxonomies
| 
|
*/
require get_template_directory() . '/lib/custom-types.php';


/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
|
| Helper Functions
| 
|
*/
require get_template_directory() . '/lib/helper-functions.php';


/*
|--------------------------------------------------------------------------
| Advanced custom fields
|--------------------------------------------------------------------------
|
| Load in settings for ACF
|
*/
require get_template_directory() . '/lib/acf.php';

/*
|--------------------------------------------------------------------------
| Shortcodes
|--------------------------------------------------------------------------
|
| Utilise this file to create all the shortcodes that you wish to
| use on this web build.
|
*/
require get_template_directory() . '/lib/shortcodes.php';
