<?php
/**
 * All Databases related functions here
 */

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

// Form Validation
/* function is_required( $field ) {
    return empty( trim( $field ) );
}

function is_valid_email( $email ) {
    return filter_var( $email, FILTER_VALIDATE_EMAIL );
}

function is_valid_number( $number ) {
    return is_numeric( $number );
}

$errors = []; // Store any validation errors

// Required fields
if ( is_required( $software ) ) {
    $errors['software'] = 'Software field is required.';
}
if ( is_required( $website ) ) {
    $errors['website'] = 'Website field is required.';
}
if ( is_required( $requirement ) ) {
    $errors['requirement'] = 'Requirement field is required.';
}
if ( is_required( $first_name ) ) {
    $errors['first_name'] = 'First name field is required.';
}
if ( is_required( $address ) ) {
    $errors['address'] = 'Address field is required.';
}
if ( is_required( $email ) ) {
    $errors['email'] = 'Email field is required.';
}
if ( is_required( $number ) ) {
    $errors['phone'] = 'Phone number field is required.';
}

// Additional validations
if ( !is_valid_email( $email ) ) {
    $errors['email_address'] = 'Please enter a valid email address.';
}
if ( !is_valid_number( $number ) ) {
    $errors['phone_number'] = 'Please enter a valid phone number.';
}
if ( !is_valid_number( $watsAppNumber ) ) {
    $errors['watsApp_number'] = 'Please enter a valid phone number.';
}

// Additional validations as needed for mobile app, budget, deadline, etc.

// Check for errors
if ( !empty( $errors ) ) {
    // Show error message(s) to the user
    // You can use `wp_die` or return the errors array for later display
    wp_die( 'Please fix the following errors: ' . implode( '<br>', $errors ) );
} else {
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
    if ( !empty( $first_name ) ) {
        $wpdb->Insert( $table_name, $data );
    }
} */
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
    if ( !empty( $first_name ) ) {
        $wpdb->Insert( $table_name, $data );
    }
