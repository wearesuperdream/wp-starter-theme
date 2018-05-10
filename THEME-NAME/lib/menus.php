<?php

/*
|--------------------------------------------------------------------------
| Menus
|--------------------------------------------------------------------------
|
| Registers menus that can be used within the theme
|
*/

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main menu' ));
  register_nav_menu('footer-menu',__( 'Footer menu' ));
}
add_action( 'init', 'register_my_menu' );