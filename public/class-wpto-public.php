<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
class wpto_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->wpto_options = get_option($this->plugin_name);


	}



	// Remove  CSS and JS query strings versions
	public function wpto_remove_cssjs_ver( ) {
		if(!empty($this->wpto_options['css_js_versions'])){
			function wpto_remove_cssjs_ver_filter($src ){
				 if( strpos( $src, '?ver=' ) ) $src = remove_query_arg( 'ver', $src );
				 return $src;
			}
			add_filter( 'style_loader_src', 'wpto_remove_cssjs_ver_filter', 10, 2 );
			add_filter( 'script_loader_src', 'wpto_remove_cssjs_ver_filter', 10, 2 );
		}
	}

	// Remove WP version number
	public function wpto_remove_wp_version_number( ) {
		if(!empty($this->wpto_options['wp_version_number'])){
			function remove_version_generator() {
	 	 return '';
	 	 }
	 	 add_filter('the_generator', 'remove_version_generator');

		}
	}

	// Remove OEmbed
	public function wpto_remove_oembed( ) {
		if(!empty($this->wpto_options['remove_oembed'])){
			function disable_embeds_init() {
				remove_action('rest_api_init', 'wp_oembed_register_route');
				remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
				remove_action('wp_head', 'wp_oembed_add_discovery_links');
				remove_action('wp_head', 'wp_oembed_add_host_js');
			}
			add_action('init', 'disable_embeds_init', 9999);
		}
	}

	// Remove jQuery Migrate
	public function wpto_remove_jquery_migrate( ) {
		if(!empty($this->wpto_options['remove_jquery_migrate'])){
			add_filter( 'wp_default_scripts', 'remove_jquery_migrate_script' );
			function remove_jquery_migrate_script(&$scripts){
			 if(!is_admin()){
			  $scripts->remove('jquery');
			  $scripts->add('jquery', false, array('jquery-core'));
			 }
			}
		}
	}

	// Remove emoji-release
	public function wpto_remove_emoji_release( ) {
		if(!empty($this->wpto_options['remove_emoji_release'])){
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
		}
	}

	// Remove RSD Link
	public function wpto_remove_rsd_link( ) {
		if(!empty($this->wpto_options['remove_rsd_link'])){
			remove_action ('wp_head', 'rsd_link');
		}
	}

	// Remove RSS Feed
	public function wpto_remove_rss_feed( ) {
		if(!empty($this->wpto_options['remove_rss_feed'])){
			function wpto_disable_feed() {
				wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
				}
				remove_action( 'wp_head', 'feed_links_extra', 3 );
				remove_action( 'wp_head', 'feed_links', 2 );
			}
	}

	// Remove wlwmanifest
	public function wpto_remove_wlwmanifest( ) {
		if(!empty($this->wpto_options['remove_wlwmanifest'])){
			remove_action('wp_head', 'wlwmanifest_link');
		}
	}

	// Remove post links
	public function wpto_remove_wp_json( ) {
		if(!empty($this->wpto_options['remove_wp_json'])){
			remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

		}
	}

	// Remove WP Shortlink
	public function wpto_remove_wp_shortlink( ) {
		if(!empty($this->wpto_options['remove_wp_shortlink'])){
			remove_action('wp_head', 'wp_shortlink_wp_head');
		}
	}

	// Remove post links
	public function wpto_remove_wp_post_links( ) {
		if(!empty($this->wpto_options['remove_wp_post_links'])){
			remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
		}
	}

	// Remove post links
	public function wpto_remove_pingback( ) {
		if(!empty($this->wpto_options['remove_pingback'])){
			if (!is_admin()) {
    function link_rel_buffer_callback($buffer) {
        $buffer = preg_replace('/(<link.*?rel=("|\')pingback("|\').*?href=("|\')(.*?)("|\')(.*?)?\/?>|<link.*?href=("|\')(.*?)("|\').*?rel=("|\')pingback("|\')(.*?)?\/?>)/i', '', $buffer);
                return $buffer;
    }
    function link_rel_buffer_start() {
        ob_start("link_rel_buffer_callback");
    }
    function link_rel_buffer_end() {
        ob_flush();
    }
    add_action('template_redirect', 'link_rel_buffer_start', -1);
    add_action('get_header', 'link_rel_buffer_start');
    add_action('wp_head', 'link_rel_buffer_end', 999);
		}
		}
	}


	// Remove Yoast Information
	public function wpto_remove_yoast_information( ) {
		if(!empty($this->wpto_options['remove_yoast_information'])){
			if (defined('WPSEO_VERSION')){
			    $instance = WPSEO_Frontend::get_instance();
			    remove_action( 'wpseo_head', array( $instance, 'debug_marker' ), 2 );
			    remove_action( 'wp_head', array( $instance, 'head' ), 1 );
			    add_action( 'wp_head', 'custom_yoast_head', 1 );
			    function custom_yoast_head() {
			        global $wp_query;
			        $old_wp_query = null;
			        if ( ! $wp_query->is_main_query() ) {
			            $old_wp_query = $wp_query;
			            wp_reset_query();
			        }
			        do_action( 'wpseo_head' );
			        if ( ! empty( $old_wp_query ) ) {
			            $GLOBALS['wp_query'] = $old_wp_query;
			            unset( $old_wp_query );
			        }
			        return;
			    }
			}
		}
	}


// WooCommerce

// Remove WC Price Slider



	public function wpto_remove_wc_price_slider( ) {
  if(!empty($this->wpto_options['remove_wc_price_slider'])){
			  wp_dequeue_script( 'wc_price_slider' );

  }
}
/*
// Remove WC Add To Cart
public function wpto_remove_wc_add_to_cart( ) {
  if(!empty($this->wpto_options['remove_wc_add_to_cart'])){
  wp_dequeue_script( 'wc-add-to-cart' );
  }
}

// Remove WC Cart Fragments
public function wpto_remove_wc_cart_fragments( ) {
  if(!empty($this->wpto_options['remove_wc_cart_fragments'])){
  wp_dequeue_script( 'wc-cart-fragments' );
  }
}

// Remove WC Checkout
public function wpto_remove_wc_checkout( ) {
  if(!empty($this->wpto_options['remove_wc_checkout'])){
  wp_dequeue_script( 'wc-checkout' );
  }
}

// Remove WC Add To Cart Variation
public function wpto_remove_wc_add_to_cart_variation( ) {
  if(!empty($this->wpto_options['remove_wc_add_to_cart_variation'])){
  wp_dequeue_script( 'wc-add-to-cart-variation' );
  }
}

// Remove WC Single Product
public function wpto_remove_wc_single_product( ) {
  if(!empty($this->wpto_options['remove_wc_single_product'])){
  wp_dequeue_script( 'wc-single-product' );
  }
}

// Remove WC Cart
public function wpto_remove_wc_cart( ) {
  if(!empty($this->wpto_options['remove_wc_cart'])){
  wp_dequeue_script( 'wc-cart' );
  }
}

// Remove WC Chosen
public function wpto_remove_wc_chosen( ) {
  if(!empty($this->wpto_options['remove_wc_chosen'])){
  wp_dequeue_script( 'wc-chosen' );
  }
}

// Remove WC WooCommerce
public function wpto_remove_woocommerce( ) {
  if(!empty($this->wpto_options['remove_woocommerce'])){
  wp_dequeue_script( 'woocommerce' );
  }
}

// Remove WC PrettyPhoto
public function wpto_remove_prettyPhoto( ) {
  if(!empty($this->wpto_options['remove_prettyPhoto'])){
  wp_dequeue_script( 'prettyPhoto' );
  }
}

// Remove WC PrettyPhoto Init
public function wpto_remove_prettyPhoto_init( ) {
  if(!empty($this->wpto_options['remove_prettyPhoto_init'])){
  wp_dequeue_script( 'prettyPhoto-init' );
  }
}

// Remove WC jQuery UI
public function wpto_remove_jquery_blockui( ) {
  if(!empty($this->wpto_options['remove_jquery_blockui'])){
  wp_dequeue_script( 'jquery-blockui' );
  }
}

// Remove WC jQuery Placeholder
public function wpto_remove_jquery_placeholder( ) {
  if(!empty($this->wpto_options['remove_jquery_placeholder'])){
  wp_dequeue_script( 'jquery-placeholder' );
  }
}

// Remove WC Fancybox
public function wpto_remove_fancybox( ) {
  if(!empty($this->wpto_options['remove_fancybox'])){
  wp_dequeue_script( 'fancybox' );
  }
}

// Remove WC jQueryUI
public function wpto_remove_jqueryui( ) {
  if(!empty($this->wpto_options['remove_jqueryui'])){
  wp_dequeue_script( 'jqueryui' );
  }
}
*/





}
