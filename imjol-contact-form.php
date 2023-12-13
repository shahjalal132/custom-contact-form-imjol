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
    define( 'IMJOL_PLUGIN_PATH', plugin_dir_url( __FILE__ ) );
}

// Enqueue scripts and styles
if ( !function_exists( 'imjol_enqueue_assets' ) ) {
    function imjol_enqueue_assets() {
        // Enqueue CSS
        wp_enqueue_style( 'imjol-bootstrap', IMJOL_PLUGIN_PATH . 'assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'imjol-all', IMJOL_PLUGIN_PATH . 'assets/css/all.min.css' );
        wp_enqueue_style( 'imjol-fontawesome', IMJOL_PLUGIN_PATH . 'assets/css/fontawesome.min.css' );
        wp_enqueue_style( 'imjol-jquery-classycountdown', IMJOL_PLUGIN_PATH . 'assets/css/jquery.classycountdown.min.css' );
        wp_enqueue_style( 'imjol-nice-select', IMJOL_PLUGIN_PATH . 'assets/css/nice-select.min.css' );
        wp_enqueue_style( 'imjol-reset', IMJOL_PLUGIN_PATH . 'assets/css/imjol-reset.css' );
        wp_enqueue_style( 'imjol-style', IMJOL_PLUGIN_PATH . 'assets/css/imjol-style.css' );

        // Enqueue JS
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'imjol-bootstrap', IMJOL_PLUGIN_PATH . 'assets/js/bootstrap.min.js', [], null, true );
        wp_enqueue_script( 'final-countdown', IMJOL_PLUGIN_PATH . 'assets/js/final-countdown.min.js', ['jquery'], null, true );
        wp_enqueue_script( 'nice-select', IMJOL_PLUGIN_PATH . 'assets/js/nice-select.min.js', ['jquery'], null, true );
        wp_enqueue_script( 'imjol-main', IMJOL_PLUGIN_PATH . 'assets/js/main.js', [], null, true );
        wp_enqueue_script( 'imjol-api', 'https://www.google.com/recaptcha/api.js' );

    }

    add_action( 'wp_enqueue_scripts', 'imjol_enqueue_assets' );
}

?>