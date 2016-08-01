<?php

/**
 * Class WPTO_Remove_Yoast_Information
 */
class WPTO_Remove_Yoast_Information extends WPTO_Optimization_Base {

	const NAME = 'remove_yoast_information';
	const CATEGORY = 'yoast';

	public function __construct() {

		parent::__construct();

		$this->title       = __( 'Yoast Information', 'wpto' );
		$this->description = __( 'xxx', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			if ( class_exists( 'WPSEO_Frontend', false ) ) {
				$instance = WPSEO_Frontend::get_instance();
				remove_action( 'wpseo_head', array( $instance, 'debug_marker' ), 2 );
				remove_action( 'wp_head', array( $instance, 'head' ), 1 );
				$this->add_action( 'wp_head', 1 );
			}
		}

	}

	/**
	 *
	 */
	function _wp_head() {
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
	}

}
