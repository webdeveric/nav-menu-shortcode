<?php
/*
Plugin Name: Nav Menu Shortcode
Version: 0.2.1
Description: Show a menu with a shortcode.
Author: Eric King
Author URI: http://webdeveric.com
*/

function nav_menu_shortcode( $atts, $content = null, $code = '' ){

	$defaults = array(
		'theme_location'  => null,
		'menu'            => null,
		'container'       => false,
		'container_id'    => null,
		'menu_class'      => 'menu',
		'menu_id'         => null,
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
		'depth'           => 0,
		'walker'          => null
	);

	$atts = shortcode_atts( $defaults, $atts );
	$atts['echo'] = false;
	$menu = wp_nav_menu( $atts );
	return $menu;
}


add_shortcode('navmenu', 'nav_menu_shortcode');