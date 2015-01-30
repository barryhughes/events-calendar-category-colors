<?php
/*
Plugin Name:       The Events Calendar Category Colors
Plugin URI:        https://github.com/afragen/events-calendar-category-colors
Description:       This plugin adds event category background coloring to <a href="http://wordpress.org/plugins/the-events-calendar/">The Events Calendar</a> plugin.
Version:           3.9.7.4
Text Domain:       events-calendar-category-colors
Author:            Andy Fragen, Barry Hughes
Author URI:        http://thefragens.com
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/afragen/the-events-calendar-category-colors
GitHub Branch:     namespace-autoload
Requires PHP:      5.3
Requires WP:       3.8
*/


// We'll use PHP 5.3 syntax to get the plugin directory
define( 'TECCC_DIR', __DIR__ );
define( 'TECCC_CLASSES', TECCC_DIR . '/classes' );
define( 'TECCC_INCLUDES', TECCC_DIR . '/includes' );
define( 'TECCC_VIEWS', TECCC_DIR . '/views' );
define( 'TECCC_RESOURCES', plugin_dir_url( __FILE__ ) . 'resources' );
define( 'TECCC_LANG', basename( dirname( __FILE__ ) ) . '/languages' );

//Load autoloader class
require_once( TECCC_CLASSES . '/Autoloader.php' );

// Set-up Action and Filter Hooks
register_activation_hook( __FILE__, array( 'Tribe_Events_Category_Colors', 'add_defaults' ) );

// Launch
$teccc = Tribe_Events_Category_Colors::instance();

// Get plugin version number from file
Tribe_Events_Category_Colors::$version = $teccc->plugin_get_version( __FILE__ );
