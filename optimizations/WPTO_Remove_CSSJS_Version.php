<?php

/**
 * Class WPTO_Remove_CSSJS_Version
 */
class WPTO_Remove_CSSJS_Version extends WPTO_Optimization_Base {

	const NAME = 'css_js_versions';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		$this->title       = __( 'Remove CSS and JS versions', 'wpto' );
		$this->description = __( 'Resources with a “?” or “&” in the URL can not always be cached correctly. Removing these query strings can improve the performance of your WordPress site.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			$this->add_filter( 'style_loader_src' );
			$this->add_filter( 'script_loader_src' );
		}

	}

	/**
	 * @param string $src
	 *
	 * @return string
	 */
	public function _style_loader_src( $src ) {
		return $this->remove_cssjs_version( $src );
	}

	/**
	 * @param string $src
	 *
	 * @return string
	 */
	public function _script_loader_src( $src ) {
		return $this->remove_cssjs_version( $src );
	}

	/**
	 * @param string $src
	 *
	 * @return string
	 */
	public function remove_cssjs_version( $src ) {
		if ( false !== strpos( $src, '?ver=' ) ) {
			$src = remove_query_arg( 'ver', $src );
		}

		return $src;
	}

}