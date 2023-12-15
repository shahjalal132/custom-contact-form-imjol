<?php 
/**
 * All Databases related functions here
 */

 // Database Design and Table Create
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


/**
 * Insert form data to database.
 * form data came from jmjol-main.js file by ajax
 */
$all_data = $_POST;

$software       = isset( $all_data['software'] ) ? $all_data['software'] : null;
$software_value = isset( $software ) ? 1 : 0;

$website       = isset( $all_data['website'] ) ? $all_data['website'] : null;
$website_value = isset( $website ) ? 1 : 0;

$mobile_app       = isset( $all_data['mobileApp'] ) ? $all_data['mobileApp'] : null;
$mobile_app_value = isset( $mobile_app ) ? 1 : 0;

$select_budget   = isset( $all_data['budget'] ) ? $all_data['budget'] : null;
$select_deadline = isset( $all_data['deadline'] ) ? $all_data['deadline'] : null;

$requirement   = isset( $all_data['requirement'] ) ? $all_data['requirement'] : null;
$first_name    = isset( $all_data['firstName'] ) ? $all_data['firstName'] : null;
$address       = isset( $all_data['address'] ) ? $all_data['address'] : null;
$email         = isset( $all_data['email'] ) ? $all_data['email'] : null;
$number        = isset( $all_data['number'] ) ? $all_data['number'] : null;
$watsAppNumber = isset( $all_data['watsAppNumber'] ) ? $all_data['watsAppNumber'] : null;

// Form data to send database
$data = [
    'first_name'  => $first_name,
    'address'     => $address,
    'email'       => $email,
    'phone'       => $number,
    'whatsapp'    => $watsAppNumber,
    'mobile_app'  => $mobile_app_value,
    'website'     => $website_value,
    'software'    => $software_value,
    'requirement' => $requirement,
    'budget'      => $select_budget,
    'deadline'    => $select_deadline,
];

// Table name
$table_name = $wpdb->prefix . 'imjol_forms';

// Insert data to database
if( !empty( $first_name )){
    $wpdb->Insert( $table_name, $data );
}