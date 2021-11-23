<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );
 
 
//you can add custom functions below this line:

//For example, you can paste this into your theme functions.php file

function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}

add_action( 'wp_footer', 'meks_which_template_is_loaded' );


// Add "Add to Cart" buttons in Divi shop pages

//add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20 );



// for the quNTİTY FİELD
// add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 30, 2 );
// /**
//  * Override loop template and show quantities next to add to cart buttons
//  * @link https://gist.github.com/mikejolley/2793710
//  */
// function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
// 	if ( is_user_logged_in() && is_shop() || is_product_category() && $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
// 		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
// 		$html .= woocommerce_quantity_input( array(), $product, false );
// 		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
// 		$html .= '</form>';
// 	}
// 	return $html;
// }

// add_action( 'woocommerce_after_add_to_cart_quantity', 'bbloomer_single_category_slug' );
 
// function bbloomer_single_category_slug() {
 
// if ( has_term( 'objects', 'product_cat' ) ) {
// echo 'Something';
// } elseif ( has_term( 'aynalar', 'product_cat' ) ) {
// echo 'Something else';
// }
 
// }

// add_filter( 'woocommerce_variable_price_html', 'bbloomer_remove_variation_price', 10, 2 );
 
// function bbloomer_remove_variation_price( $price ) {
 
// global $woocommerce_loop;
 
// if ( is_product() && $woocommerce_loop['name'] == 'related' ) {
// $price = '';
// }
 
// return $price;
// }

// add_action( 'woocommerce_before_main_content', 'bbloomer_loop_shop' );
 
// function bbloomer_loop_shop() {
 
// if ( is_shop() ) {
// echo 'This will show on the Shop page';
// } else {
// echo 'This will show on all other Woo pages';
// }
 
// }

// add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_loop_per_product' );
 
// function bbloomer_loop_per_product() {
 
// if ( has_term( 'objects', 'product_cat' ) ) {
// echo 'Great chairs!';
// } elseif ( has_term( 'aynalar', 'product_cat' ) ) {
// echo 'Awesome tables!';
// }
// }

// add_action( 'woocommerce_before_main_content', 'bbloomer_loop_cat' );
 
// function bbloomer_loop_cat() {
 
// if ( is_product_category() ) {
// echo 'This will show on every Cat pages';
// } else {
// echo 'This will show on all other Woo pages';
// }
 
// }

// add_action( 'woocommerce_before_main_content', 'bbloomer_woo_page' );
 
// function bbloomer_woo_page() {
//    if ( is_woocommerce() ) {
//       echo 'This will show on Woo pages';
//    } else {
//       echo 'This will show on WP pages';
//    }
// }


// add_action( 'hook', 'bbloomer_orderpay' );
 
// function bbloomer_orderpay() {
//    if ( is_checkout_pay_page() ) {
//       echo 'This will show on Order Pay page';
//    } else {
//       echo 'This will show on all other pages';
//    }
// }