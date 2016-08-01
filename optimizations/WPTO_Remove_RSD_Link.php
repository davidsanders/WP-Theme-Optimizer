<?php

/**
 * Class WPTO_Remove_RSD_Link
 */
class WPTO_Remove_RSD_Link extends WPTO_Optimization_Base {

	const NAME = 'remove_rsd_link';
	const CATEGORY = 'theme-links';

	public function __construct() {

		parent::__construct();

		$this->title       = __( 'Remove RSD Link', 'wpto' );
		$this->description = __( 'Resources with a “?” or “&” in the URL can not always be cached correctly. Removing these query strings can improve the performance of your WordPress site.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'wp_head', 'rsd_link' );
		}
	}

}
