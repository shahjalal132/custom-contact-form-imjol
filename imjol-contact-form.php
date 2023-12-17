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

// Register Top Label Menu
add_action( 'admin_menu', 'show_all_user_infos' );
function show_all_user_infos() {
    add_menu_page(
        'all_users_infos',
        'All Users Infos',
        'manage_options',
        'all_users_infos',
        'show_all_users_infos_html',
        'dashicons-admin-users',
        20
    );

    // Display users information's table
    function show_all_users_infos_html() {
        ?>
            <div id="user-infos-table">
            <?php 
                            
                    // Retrieve Data From Database
                    $imjol_user_data = new WP_Query([
                        'table_name' => 'wp_imjol_forms',
                        'fields' => ['user_id', 'first_name', 'address', 'email', 'phone', 'whatsapp', 'mobile_app', 'website', 'software', 'requirement', 'budget', 'deadline'],
                        'order_by' => 'user_id',
                        'order' => 'ASC',
                    ]);

                    // Conditionally table create
                    if($imjol_user_data->have_posts()) {
                        ?>
                            <table>
                                <style>
                                    table, th, td {
                                    border: 1px solid black;
                                    border-collapse: collapse;
                                    }
                                    th, td {
                                    padding-top: 10px;
                                    padding-bottom: 10px;
                                    padding-left: 20px;
                                    padding-right: 20px;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>User Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>What's App</th>
                                        <th>Mobile App</th>
                                        <th>Website</th>
                                        <th>Software</th>
                                        <th>Requirements</th>
                                        <th>Budget</th>
                                        <th>Deadline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php 
                                            global $wpdb;
                                            $query = "SELECT * FROM `{$wpdb->prefix}imjol_forms`";
                                            $results = $wpdb->get_results($query);
                                            if($results){
                                                foreach($results as $result){
                                                    $need_app = $result->mobile_app == 1 ? 'Yes' : 'No';
                                                    $need_website = $result->website == 1 ? 'Yes' : 'No';
                                                    $need_software = $result->software == 1 ? 'Yes' : 'No';
                                                    echo '<tr>';
                                                    echo '<td>'.$result->user_id.'</td>';
                                                    echo '<td>'.$result->first_name.'</td>';
                                                    echo '<td>'.$result->address.'</td>';
                                                    echo '<td>'.$result->email.'</td>';
                                                    echo '<td>'.$result->phone.'</td>';
                                                    echo '<td>'.$result->whatsapp.'</td>';
                                                    echo '<td>'. $need_app .'</td>';
                                                    echo '<td>'.$need_website.'</td>';
                                                    echo '<td>'.$need_software.'</td>';
                                                    echo '<td>'.$result->requirement.'</td>';
                                                    echo '<td>'.$result->budget.'</td>';
                                                    echo '<td>'.$result->deadline.'</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                         ?>
                                </tbody>
                            </table>
                        <?php                    
                    }else{
                        echo 'No Data Found';
                    }

                ?>
            </div>
        <?php
    }
}


// Requiring plugin files
require_once IMJOL_PLUGIN_PATH . '/inc/form_shortcode.php';
require_once IMJOL_PLUGIN_PATH . '/inc/enqueue_assets.php';
require_once IMJOL_PLUGIN_PATH . '/inc/database.php';

?>
