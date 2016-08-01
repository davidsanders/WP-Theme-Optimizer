<?php

/**
 * Class WPTO_Remove_WP_JSON_Link
 */
class WPTO_Remove_WP_JSON_Link extends WPTO_Optimization_Base {

	const NAME = 'remove_wp_json_link';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		$this->title       = __( 'Remove WP JSON link', 'wpto' );
		$this->description = __( 'WP JSON could potentially open your website to a new front of DDoS attacks. If you do not need it, disable it here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'wp_head', 'rest_output_link_wp_head' );
		}
	}

}
