<?php
/**
 * Swish Design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eyorsogood_Design
 */

if ( ! defined( 'THEME_IS_DEV_MODE' ) ) {
	define( 'THEME_IS_DEV_MODE', true );
}

define( 'QED_VERSION', '1.0.0' );
define( 'PARENT_DIR', get_template_directory() );
define( 'PARENT_URL', get_template_directory_uri() );

require PARENT_DIR . '/includes/core.php';
require PARENT_DIR . '/php/class-main.php';


/**
 * 
 *  Instantiate classes
 */

$theme = new Theme();


add_action( 'admin_menu', 'isa_remove_menus', 999 ); 
function isa_remove_menus() { 
     remove_menu_page( 'branding' );
     remove_menu_page( 'wpmudev' );
 }

 function modify_menu_links($items, $args) {
    // Check if it's not the homepage
    if (!is_front_page()) {
        // Get the homepage URL
        $homepage_url = home_url('/');

        // Loop through each menu item
        foreach ($items as &$item) {
            // Check if the link contains a hash and is not #request-quote
            if (strpos($item->url, '#') !== false && $item->url !== '#request-quote') {
                // Split the link into URL and hash parts
                list($url, $hash) = explode('#', $item->url);

                // Replace the link with homepage URL + hash
                $item->url = $homepage_url . '#' . $hash;
            }
        }
    }

    return $items;
}
add_filter('wp_nav_menu_objects', 'modify_menu_links', 10, 2);