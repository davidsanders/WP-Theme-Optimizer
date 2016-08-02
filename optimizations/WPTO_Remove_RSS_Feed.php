<?php

/**
 * Class WPTO_Remove_RSS_Feed
 */
class WPTO_Remove_RSS_Feed extends WPTO_Optimization_Base {

	const NAME = 'remove_rss_feed';
	const CATEGORY = 'theme-links';

	public function __construct() {

		$this->title       = __( 'Remove RSS Feeds', 'wpto' );
		$this->description = __( 'Are you using RSS feeds? If not, you can turn them off here.', 'wpto' );

	}

	/**
	 *
	 */
	public function _after_setup_theme() {
		if ( $this->option() ) {
			remove_action( 'wp_head', 'feed_links_extra', 3 );
			remove_action( 'wp_head', 'feed_links', 2 );
		}
	}

}
