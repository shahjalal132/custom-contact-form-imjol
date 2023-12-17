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
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>User Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>What's App</th>
                                        <th>Website</th>
                                        <th>Software</th>
                                        <th>Requirements</th>
                                        <th>Budget</th>
                                        <th>Deadline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php 
                                            while($imjol_user_data->have_posts()) : $imjol_user_data->the_post();

                                            // get table field data
                                            $user_id = $imjol_user_data->user_id;
                                            $first_name = $imjol_user_data->first_name;
                                            $address = $imjol_user_data->address;
                                            $email = $imjol_user_data->email;
                                            $phone = $imjol_user_data->phone;
                                            $whatsapp = $imjol_user_data->whatsapp;
                                            $mobile_app = $imjol_user_data->mobile_app;
                                            $website = $imjol_user_data->website;
                                            $software = $imjol_user_data->software;
                                            $requirement = $imjol_user_data->requirement;
                                            $budget = $imjol_user_data->budget;
                                            $deadline = $imjol_user_data->deadline;
                                        ?>
                                                <td> <?php echo $user_id; ?> </td>
                                                <td> <?php echo $first_name; ?> </td>
                                                <td> <?php echo $address; ?> </td>
                                                <td> <?php echo $email; ?> </td>
                                                <td> <?php echo $phone; ?> </td>
                                                <td> <?php echo $whatsapp; ?> </td>
                                                <td> <?php echo $mobile_app; ?> </td>
                                                <td> <?php echo $website; ?> </td>
                                                <td> <?php echo $software; ?> </td>
                                                <td> <?php echo $requirement; ?> </td>
                                                <td> <?php echo $budget; ?> </td>
                                                <td> <?php echo $deadline; ?> </td>
                                            <?php
                                            endwhile;
                                        ?>
                                    </tr>
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
