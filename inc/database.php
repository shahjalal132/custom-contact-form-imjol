<?php

/**
 * Databases Functionality
 */

$data = $_POST;

$website     = isset( $data['website'] ) ? $data['website'] : null;
$software    = isset( $data['software'] ) ? $data['software'] : null;
$mobileApp   = isset( $data['mobile-app'] ) ? $data['mobile-app'] : null;
$requirement = isset( $data['requirement'] ) ? $data['requirement'] : null;

$firstName     = isset( $data['first-name'] ) ? $data['first-name'] : null;
$address       = isset( $data['address'] ) ? $data['address'] : null;
$email         = isset( $data['email'] ) ? $data['email'] : null;
$number        = isset( $data['number'] ) ? $data['number'] : null;
$watsAppNumber = isset( $data['whats-app-number'] ) ? $data['whats-app-number'] : null;

// echo '<pre>';
// print_r( $data );
?>