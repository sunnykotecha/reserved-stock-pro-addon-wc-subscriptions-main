<?php
/**
 * Plugin Name:       Reserved Stock Pro | Add-on - WooCommerce Subscription
 * Description:       Add-on enables simple subcription & variable subcription product types with Reserved Stock Pro.
 * Version:           1.0.0
 * Author:            sunny
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add or remove specific product types from stock reservations.
 */
function puri_custom_rsp_supported_product_types( $supported_array ) {

	array_push( $supported_array, 'subscription' ); // Simple Subscription Products.
	array_push( $supported_array, 'variable-subscription' ); // Variable Subscription products.

	return $supported_array;
}
add_filter( 'reserved_stock_pro_supported_product_types', 'puri_custom_rsp_supported_product_types', 10 );
