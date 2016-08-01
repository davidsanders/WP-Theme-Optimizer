<?php

/**
 * Class WPTO_HTML_Minify
 */
class WPTO_HTML_Minify extends WPTO_Optimization_Base {

	const NAME = 'html_minify';
	const CATEGORY = 'misc-settings';

	public function __construct() {

		$this->title       = __( 'Minify HTML', 'wpto' );
		$this->description = __( 'Improve your site performance by Minifying the HTMl.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			ob_start( array( $this, '_minify_output' ) );
		}

	}

	/**
	 *
	 */
	function _minify_output( $buffer ) {
		$search  = array(
			'/\>[^\S ]+/s',
			'/[^\S ]+\</s',
			'/(\s)+/s'
		);
		$replace = array(
			'>',
			'<',
			'\\1'
		);
		if ( preg_match( "/\<html/i", $buffer ) == 1 && preg_match( "/\<\/html\>/i", $buffer ) == 1 ) {
			$buffer = preg_replace( $search, $replace, $buffer );
		}

		return $buffer;

	}


}
