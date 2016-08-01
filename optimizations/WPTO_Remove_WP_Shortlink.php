<?php

/**
 * Class WPTO_Remove_WP_Shortlink
 */
class WPTO_Remove_WP_Shortlink extends WPTO_Optimization_Base {

	const NAME = 'remove_wp_shortlink';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		parent::__construct();

		$this->title       = __( 'Remove WP Shortlink', 'wpto' );
		$this->description = __( 'The shortlink is a shortened version of a web page’s URL. If you do not need it, you can disable it here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		}
	}

}
