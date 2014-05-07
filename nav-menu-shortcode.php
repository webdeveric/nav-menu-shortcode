<?php
/*
Plugin Name: Nav Menu Shortcode
Plugin Group: Shortcodes
Plugin URI: http://phplug.in/
Description: Show a menu with a shortcode. Example: <code>[navmenu menu="Your Menu Name"]</code>
Version: 0.2.1
Author: Eric King
Author URI: http://webdeveric.com/
*/

function wde_nav_menu_shortcode($atts, $content = null, $code = '')
{
    $defaults = array(
        'theme_location' => null,
        'menu'           => null,
        'container'      => false,
        'container_id'   => null,
        'menu_class'     => 'menu',
        'menu_id'        => null,
        'before'         => '',
        'after'          => '',
        'link_before'    => '',
        'link_after'     => '',
        'items_wrap'     => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
        'depth'          => 0,
        'walker'         => null
    );

    $atts = shortcode_atts($defaults, $atts);
    $atts['echo'] = false;

    return wp_nav_menu($atts);
}
add_shortcode('navmenu', 'wde_nav_menu_shortcode');
