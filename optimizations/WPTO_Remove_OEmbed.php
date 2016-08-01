<?php

class WPTO_Remove_OEmbed extends WPTO_Optimization_Base {

	const NAME = 'remove_oembed';
	const CATEGORY = 'theme-links';

	public function __construct() {

		$this->title       = __( 'Remove OEmbed Links', 'wpto' );
		$this->description = __( 'OEmbed provides an easy way to embed content from one site to another. If you do not need it, disable it here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'rest_api_init', 'wp_oembed_register_route' );
			remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result' );
			remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
			remove_action( 'wp_head', 'wp_oembed_add_host_js' );
		}

	}

}
