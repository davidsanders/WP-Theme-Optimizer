<?php

/**
 * Class WPTO_Remove_JQuery_Migrate
 */
class WPTO_Remove_JQuery_Migrate extends WPTO_Optimization_Base {

	const NAME = 'remove_jquery_migrate';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		$this->title       = __( 'Remove jQuery Migrate', 'wpto' );
		$this->description = __( 'Resources with a “?” or “&” in the URL can not always be cached correctly. Removing these query strings can improve the performance of your WordPress site.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			$this->add_filter( 'wp_default_scripts' );
		}
	}

	/**
	 * @param WP_Scripts $scripts WP_Scripts object.
	 */
	public function _wp_default_scripts( &$scripts ) {

		if ( ! is_admin() ) {
			$scripts->remove( 'jquery' );
			$scripts->add( 'jquery', false, array( 'jquery-core' ) );
		}
	}

}
