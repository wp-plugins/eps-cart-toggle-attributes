<?php
/**
 * 
 * eps-cart-toggle-attributes
 * 
 * 
 * Creates a toggle to hide/show attributes on the WooCommerce cart page.
 * 
 * PHP version 5
 *
 *
 * @package    eps-cart-toggle-attributes
 * @author     Shawn Wernig ( shawn@eggplantstudios.ca )
 * @version    1.0.1
 */

defined( 'ABSPATH' ) or die();
define( 'EPS_CTA_URL', plugin_dir_url( __FILE__ ) );
/*
Plugin Name: EPS Cart Toggle Attributes
Plugin URI: http://www.eggplantstudios.ca
Description: Creates a toggle to hide/show attributes on the WooCommerce cart page.
Version: 1.0.1
Author: Shawn Wernig http://www.eggplantstudios.ca
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


add_action('woocommerce_before_cart', 'eps_cta_before_cart');
function eps_cta_before_cart()
{
    wp_enqueue_script( 'eps_cta_scripts', EPS_CTA_URL .'scripts.js', array('jquery') );
}

add_action('wp_enqueue_scripts', 'eps_cta_before_cart_css');
function eps_cta_before_cart_css()
{
    wp_enqueue_style( 'eps_cta_styles', EPS_CTA_URL .'styles.css' );
}


?>