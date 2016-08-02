<?php

/**
 * Class WPTO_Remove_Pingbacks
 */
class WPTO_Remove_Pingbacks extends WPTO_Optimization_Base {

	const NAME = 'remove_pingbacks';
	const CATEGORY = 'not-active';

	public function __construct() {

		$this->title       = __( 'xxx', 'wpto' );
		$this->description = __( 'xxx', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			if ( ! is_admin() ) {
				$this->add_action( 'wp_head', 999 );
				$this->add_action( 'template_redirect', -1 );
				$this->add_action( 'get_header' );
			}
		}

	}

	function _callback( $buffer ) {
		$buffer = preg_replace( '/(<link.*?rel=("|\')pingback("|\').*?href=("|\')(.*?)("|\')(.*?)?\/?>|<link.*?href=("|\')(.*?)("|\').*?rel=("|\')pingback("|\')(.*?)?\/?>)/i', '', $buffer );

		return $buffer;
	}

	function _wp_head() {
		ob_flush();
	}

	function _template_redirect() {
		ob_start( array( $this, "_callback" ) );
	}

	function _get_header() {
		ob_start( array( $this, "_callback" ) );
	}

}
