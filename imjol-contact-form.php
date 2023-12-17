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

// Create Database When Plugin Activated
function imjol_database_design() {
    global $wpdb;

    $table_name      = $wpdb->prefix . 'imjol_forms';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        user_id INT AUTO_INCREMENT,
        first_name VARCHAR(255) NOT NULL,
        address TEXT NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        whatsapp VARCHAR(20),
        mobile_app TINYINT(1) NOT NULL DEFAULT 0,
        website TINYINT(1) NOT NULL DEFAULT 0,
        software TINYINT(1) NOT NULL DEFAULT 0,
        requirement TEXT,
        budget VARCHAR(255),
        deadline VARCHAR(255),

        PRIMARY KEY (user_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'imjol_database_design' );

// Requiring plugin files
require_once IMJOL_PLUGIN_PATH . '/inc/form_shortcode.php';
require_once IMJOL_PLUGIN_PATH . '/inc/enqueue_assets.php';
require_once IMJOL_PLUGIN_PATH . '/inc/database.php';

?>
