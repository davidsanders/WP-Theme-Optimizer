<?php

/**
 * @link              https://www.designsbytouch.co.uk
 * @since             1.0.0
 * @package           Wp_Theme_Optimizer
 */
class WPTO_Public {


	/* WOOCOMMERCE

	// Open Public function
	public function wpto_wc_cart_fragments( ) {

	// Check for empty boxes
	if(wpto()->get_option( 'wc_cart_fragments' )){

	// open function to dequeue scripts
	function wc_script_dequeue() {

	// Array - relates to checkboxes
	$wc_dequeue_scripts = array();
	$wc_dequeue_scripts[101] = array("output" => "wc-cart-fragments");

	// Run dequeue script for each box based on array output
	  foreach($wc_dequeue_scripts as $wc_dequeue_script) {
		wp_dequeue_script( $wc_dequeue_script["output"] );
	  }
	// close function to dequeue scripts
	}
	// Add action to dequeue scripts
	add_action( 'wp_enqueue_scripts', 'wc_script_dequeue', 100 );

	//Close check for empty boxes
	}
	//Close Public function
	}
	*/

// WOOCOMMERCE
// Remove wc_add_payment_method
	public function wpto_wc_add_payment_method() {
		if ( wpto()->get_option( 'wc_add_payment_method' ) ) {
			function remove_wc_scripts_1() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-add-payment-method' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_1', 99 );
		}
	}

// Remove wp-lost-password
	public function wpto_wc_lost_password() {
		if ( wpto()->get_option( 'wc_lost_password' ) ) {
			function remove_wc_scripts_2() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-lost-password' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_2', 99 );
		}
	}

// Remove wc_price_slider
	public function wpto_wc_price_slider() {
		if ( wpto()->get_option( 'wc_price_slider' ) ) {
			function remove_wc_scripts_3() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc_price_slider' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_3', 99 );
		}
	}

// Remove wc-single-product
	public function wpto_wc_single_product() {
		if ( wpto()->get_option( 'wc_single_product' ) ) {
			function remove_wc_scripts_4() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-single-product' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_4', 99 );
		}
	}

// Remove wc_add_to_cart
	public function wpto_wc_add_to_cart() {
		if ( wpto()->get_option( 'wc_add_to_cart' ) ) {
			function remove_wc_scripts_5() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-add-to-cart' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_5', 99 );
		}
	}

// Remove wc-single-product
	public function wpto_wc_cart_fragments() {
		if ( wpto()->get_option( 'wc_cart_fragments' ) ) {
			function remove_wc_scripts_6() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-cart-fragments' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_6', 99 );
		}
	}

// Remove wc_credit_card_form
	public function wpto_wc_credit_card_form() {
		if ( wpto()->get_option( 'wc_credit_card_form' ) ) {
			function remove_wc_scripts_7() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-credit-card-form' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_7', 99 );
		}
	}


// Remove wc_checkout
	public function wpto_wc_checkout() {
		if ( wpto()->get_option( 'wc_checkout' ) ) {
			function remove_wc_scripts_8() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-checkout' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_8', 99 );
		}
	}

// Remove wc-add-to-cart-variation
	public function wpto_wc_add_to_cart_variation() {
		if ( wpto()->get_option( 'wc_add_to_cart_variation' ) ) {
			function remove_wc_scripts_9() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-add-to-cart-variation' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_9', 99 );
		}
	}

// Remove wc-cart
	public function wpto_wc_cart() {
		if ( wpto()->get_option( 'wc_cart' ) ) {
			function remove_wc_scripts_10() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-cart' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_10', 99 );
		}
	}

// Remove wc-chosen
	public function wpto_wc_chosen() {
		if ( wpto()->get_option( 'wc_chosen' ) ) {
			function remove_wc_scripts_11() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'wc-chosen' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_11', 99 );
		}
	}

// Remove woocommerce
	public function wpto_woocommerce() {
		if ( wpto()->get_option( 'woocommerce' ) ) {
			function remove_wc_scripts_12() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'woocommerce' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_12', 99 );
		}
	}

// Remove prettyPhoto
	public function wpto_prettyPhoto() {
		if ( wpto()->get_option( 'prettyPhoto' ) ) {
			function remove_wc_scripts_13() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'prettyPhoto' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_13', 99 );
		}
	}

// Remove prettyPhoto_init
	public function wpto_prettyPhoto_init() {
		if ( wpto()->get_option( 'prettyPhoto_init' ) ) {
			function remove_wc_scripts_14() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'prettyPhoto-init' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_14', 99 );
		}
	}

// Remove jquery_blockui
	public function wpto_jquery_blockui() {
		if ( wpto()->get_option( 'jquery_blockui' ) ) {
			function remove_wc_scripts_15() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'jquery-blockui' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_15', 99 );
		}
	}

// Remove jquery_placeholder
	public function wpto_jquery_placeholder() {
		if ( wpto()->get_option( 'jquery_placeholder' ) ) {
			function remove_wc_scripts_16() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'jquery-placeholder' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_16', 99 );
		}
	}

// Remove jquery_payment
	public function wpto_jquery_payment() {
		if ( wpto()->get_option( 'jquery_payment' ) ) {
			function remove_wc_scripts_17() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'jquery-payment' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_17', 99 );
		}
	}

// Remove fancybox
	public function wpto_fancybox() {
		if ( wpto()->get_option( 'fancybox' ) ) {
			function remove_wc_scripts_18() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'fancybox' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_18', 99 );
		}
	}

// Remove fancybox
	public function wpto_jqueryui() {
		if ( wpto()->get_option( 'jqueryui' ) ) {
			function remove_wc_scripts_19() {
				if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
					wp_dequeue_script( 'jqueryui' );
				}
			}

			add_action( 'wp_enqueue_scripts', 'remove_wc_scripts_19', 99 );
		}
	}

}
