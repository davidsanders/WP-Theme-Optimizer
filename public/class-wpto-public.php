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


}
