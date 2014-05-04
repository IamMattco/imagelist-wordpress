<?php

if(!defined('IMAGELIST_THEME_DIR')) {
	define('IMAGELIST_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('IMAGELIST_THEME_URL')) {
	define('IMAGELIST_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

//require_once IMAGELIST_THEME_DIR.'libs/utils.php';

// THUMBNAILS

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(700,9999);
}

// MENU

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'category-menu' => __( 'Category menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>