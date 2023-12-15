<?php

/*
 * Plugin Name:       imjol-contact-form
 * Plugin URI:        #
 * Description:       ImJol Contact Form sent requirements
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shah jalal
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       imjol-contact-form
 * Domain Path:       /languages
 */

// if this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
    die;
}

// Define plugin version
if ( !defined( 'IMJOL_PLUGIN_VERSION' ) ) {
    define( 'IMJOL_PLUGIN_VERSION', '1.0.0' );
}

// Define plugin path
if ( !defined( 'IMJOL_PLUGIN_PATH' ) ) {
    define( 'IMJOL_PLUGIN_PATH', untrailingslashit( dirname( __FILE__ ) ) );
}

// Define plugin url
if ( !defined( 'IMJOL_PLUGIN_URL' ) ) {
    define( 'IMJOL_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
}

// Requiring plugin files
require_once IMJOL_PLUGIN_PATH . '/inc/form_shortcode.php';
require_once IMJOL_PLUGIN_PATH . '/inc/enqueue_assets.php';
require_once IMJOL_PLUGIN_PATH . '/inc/database.php';

?>
