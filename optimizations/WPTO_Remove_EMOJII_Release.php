<?php

/**
 * Class WPTO_Remove_EMOJII_Release
 */
class WPTO_Remove_EMOJII_Release extends WPTO_Optimization_Base {

	const NAME = 'remove_emoji_release';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		$this->title       = __( 'Remove emoji-release.js', 'wpto' );
		$this->description = __( 'Are you using Emoji\'s on your website? If not, you can disable them here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' );

		}
	}

}
