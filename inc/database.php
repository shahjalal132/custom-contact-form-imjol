<?php
global $wpdb;

$all_data = $_POST;

$software       = isset( $all_data['software'] ) ? $all_data['software'] : null;
$software_value = isset( $software ) ? 1 : 0;

$website       = isset( $all_data['website'] ) ? $all_data['website'] : null;
$website_value = isset( $website ) ? 1 : 0;

$mobile_app       = isset( $all_data['mobileApp'] ) ? $all_data['mobileApp'] : null;
$mobile_app_value = isset( $mobile_app ) ? 1 : 0;

$customBudget    = isset( $all_data['customBudget'] ) ? $all_data['customBudget'] : null;
$select_budget   = isset( $all_data['budget'] ) ? $all_data['budget'] : null;
$fullBudget      = $customBudget . $select_budget;
$trimFullBudget = trim($fullBudget);
$cleanFullBudget = str_replace( 'Budget Planner', '', $trimFullBudget );

$customDeadline    = isset( $all_data['customProjectDeadline'] ) ? $all_data['customProjectDeadline'] : null;
$select_deadline   = isset( $all_data['deadline'] ) ? $all_data['deadline'] : null;
$fullDeadline      = $customDeadline . $select_deadline;
$trimDeadline = trim($fullDeadline);
$cleanFullDeadline = str_replace( 'Preferred Project Duration', '', $trimDeadline );

$requirement     = isset( $all_data['requirement'] ) ? $all_data['requirement'] : null;
$newRequirement  = isset( $all_data['newRequirement'] ) ? $all_data['newRequirement'] : null;
$fullRequirement = $requirement . ', ' . $newRequirement;

$first_name    = isset( $all_data['firstName'] ) ? $all_data['firstName'] : null;
$address       = isset( $all_data['address'] ) ? $all_data['address'] : null;
$email         = isset( $all_data['email'] ) ? $all_data['email'] : null;
$number        = isset( $all_data['number'] ) ? $all_data['number'] : null;
$watsAppNumber = isset( $all_data['watsAppNumber'] ) ? $all_data['watsAppNumber'] : null;

$data = [
    'first_name'  => $first_name,
    'address'     => $address,
    'email'       => $email,
    'phone'       => $number,
    'whatsapp'    => $watsAppNumber,
    'mobile_app'  => $mobile_app_value,
    'website'     => $website_value,
    'software'    => $software_value,
    'requirement' => $fullRequirement,
    'budget'      => $cleanFullBudget,
    'deadline'    => $cleanFullDeadline,
];

// Table name
$table_name = $wpdb->prefix . 'imjol_forms';

// Insert data into the database
if ( !empty( $first_name ) ) {
    $wpdb->insert( $table_name, $data );

    // Check if the data was successfully inserted and send an email
    if ( $wpdb->insert_id ) {
        // Send email
        $to      = 'ffshahjalal@gmail.com'; // Replace with your email address
        $subject = 'New Form Submission';
        $message = "Hello, Admin. A new form submission has been received from $first_name. Here is the information:\r\n" .
            "Name: $first_name\r\n" .
            "Email: $email\r\n" .
            "Address: $address\r\n" .
            "Requirement: $fullRequirement\r\n" .
            "Budget: $cleanFullBudget\r\n" .
            "Deadline: $cleanFullDeadline";

        $headers = 'From: ' . $email; // Set the sender's email address

        // Send the email
        $mailSuccess = mail( $to, $subject, $message, $headers );

        // Check if the email was sent successfully
        if ( $mailSuccess ) {
            echo '';
        } else {
            echo '';
        }
    } else {
        echo '';
    }
} else {
    echo '';
}
?>