<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'bridge-default-style','bridge-default-style','bridge-qode-font_awesome','bridge-qode-font_elegant','bridge-qode-linea_icons','bridge-qode-dripicons','bridge-qode-kiko','bridge-qode-font_awesome_5','bridge-stylesheet','bridge-woocommerce','bridge-woocommerce-responsive','bridge-print','bridge-style-dynamic','bridge-responsive','bridge-style-dynamic-responsive' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION






// Utility function that increase conditionally the variation price with a multiplier (int)
function get_variation_calculated_price( $variation_id, $price ) {
    switch( $variation_id ) {
        case 1541: // Semi-annual
            $rate = 6;
            break;

        case 1540: // 3-Month
            $rate = 3;
            break;

        default: // Month (and others)
            $rate = 1;
            break;
    }
    // Return calculated price (or false when multiplier is 1, as calculation is not needed)
    return $rate !== 1 ? $price / $rate : false;
}


// Change variations calculated prices
add_filter('woocommerce_product_variation_get_price', 'custom_price', 99, 2 );
function custom_price( $price, $variation ) {
    
    // Not in cart, checkout and admin
    if( is_cart() || is_checkout() || is_admin() ) 
        return $price;

    if( $new_price = get_variation_calculated_price( $variation->get_id(), $price ) )
        return $new_price;

    return $price;
}




/**
 * Display price in variation options dropdown for products that have only one attribute.
 *
 * @param  string $term Existing option term value.
 * @return string $term Existing option term value or updated term value with price.
 */
function display_price_in_variation_options( $term ) {
    $product = wc_get_product();
    $id      = $product->get_id();
    if ( empty( $term ) || empty( $id ) ) {
        return $term;
    }
    if ( $product->is_type( 'variable' ) ) {
        $product_variations = $product->get_available_variations();
    } else {
        return $term;
    }
    foreach ( $product_variations as $variation ) {
        if ( count( $variation['attributes'] ) > 1 ) {
            return $term;
        }
        $attribute = array_values( $variation['attributes'] )[0];
        if ( $attribute === $term ) {
            $term .= ' ' . wp_strip_all_tags( wc_price( $variation['display_price'] ) ) . ' ';
        }
    }
    return $term;
}
add_filter( 'woocommerce_variation_option_name', 'display_price_in_variation_options' );

