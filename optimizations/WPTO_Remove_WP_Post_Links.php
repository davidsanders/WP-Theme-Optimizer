<?php

/**
 * Class WPTO_Remove_WP_Post_Links
 */
class WPTO_Remove_WP_Post_Links extends WPTO_Optimization_Base {

	const NAME = 'remove_wp_post_links';
	const CATEGORY = 'theme-scripts';

	public function __construct() {

		$this->title       = __( 'Remove Next/Previous Post Links', 'wpto' );
		$this->description = __( 'If you do not need them, you can remove next and previous post links from the themes header by disabling them here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
		}
	}

}
