<?php

/**
 * Class WPTO_Remove_WLW_Manifest
 */
class WPTO_Remove_WLW_Manifest extends WPTO_Optimization_Base {

	const NAME = 'remove_wlwmanifest';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		parent::__construct();

		$this->title       = __( 'Remove wlwmanifest.xml', 'wpto' );
		$this->description = __( 'If you are not using Windows Live Writer Manifest Link then disable it here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action('wp_head', 'wlwmanifest_link');
		}
	}

}
