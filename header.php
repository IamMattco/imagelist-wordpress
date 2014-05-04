<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title><?php echo bloginfo('name'); ?></title>
    
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo IMAGELIST_THEME_URL ?>css/screen.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <?php wp_head(); ?>
</head>
<body>

<nav>
    <a href="http://localhost/wp/" class="logo">IMAGELIST WP</a>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</nav>