<?php
/*
Theme Name: Summer 2017 WordPress Demo
Author: James Carroll
Author URI: http://james31.com/
Description: This is a Demo WordPress Theme for WEB170
Version: 1.0
*/

// Register Sidebars
register_sidebar(array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after-widget' => '</div>'));
//


// Register Menus
register_nav_menus(array('main-menu' => 'Main Menu'));
//

// Add support for Post Thumbnails and Featured Images
add_theme_support('post-thumbnails')
//
	

?>