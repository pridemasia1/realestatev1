<?php
/*
Plugin Name: Property Listing
Plugin URI: https://app.pridemasia.co.za/myplugins/property-listing.zip
Description: A simple plugin to add and display property listings.
Version: 1.0
Author: Pride Masia
Author URI: https://pridemasia.co.za/
License: GPL2
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include necessary files
include_once( plugin_dir_path( __FILE__ ) . 'includes/custom-post-type.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/search-form.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/search-query.php' );  // This line includes your search-query.php file
