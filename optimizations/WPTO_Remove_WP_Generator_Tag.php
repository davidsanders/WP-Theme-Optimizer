<?php

/**
 * Class WPTO_Remove_WP_Generator_Tag
 */
class WPTO_Remove_WP_Generator_Tag extends WPTO_Optimization_Base {

	const NAME = 'wp_version_number';
	const CATEGORY = 'misc-settings';

	public function __construct() {

		parent::__construct();

		$this->title       = __( 'Remove WP Generator Tag', 'wpto' );
		$this->description = __( 'It can be considered a security risk to make your WordPress version visible and public you should hide it.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			$this->add_filter( 'the_generator' );
		}

	}

	public function _the_generator( $generator ) {
		return '';
	}

}