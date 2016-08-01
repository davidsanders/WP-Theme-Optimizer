<?php

/**
 * Class WPTO_Remove_Recent_Comments_CSS
 */
class WPTO_Remove_Recent_Comments_CSS extends WPTO_Optimization_Base {

	const NAME = 'remove_recent_comments_css';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		$this->title       = __( 'Remove WordPress Recent Comments inline styling CSS', 'wpto' );
		$this->description = __( 'WordPress automatically adds an inline CSS style for recent comments. If you do not need this, remove it here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			$this->add_action( 'widgets_init' );

		}
	}

	/**
	 */
	public function _widgets_init() {

		global $wp_widget_factory;
		remove_action( 'wp_head', array(
			$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
			'recent_comments_style'
		));

	}

}
