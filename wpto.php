<?php

/**
 *
 * @link              https://www.designsbytouch.co.uk
 * @since             1.0.0
 * @package           Wp_Theme_Optimizer
 *
 * @wordpress-plugin
 * Plugin Name:       WP Theme Optimizer
 * Plugin URI:        www.themeoptimizer.io
 * Description:       Optimize your WordPress theme header by removing excess tags and scripts. Make your site faster and more secure by hiding WordPress tags.
 * Version:           1.0.1
 * Author:            Studio Touch (Daniel Hand)
 * Author URI:        https://www.designsbytouch.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-theme-optimizer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

spl_autoload_register( 'wpto_autoloader' );
function wpto_autoloader( $class_name ) {
	if ( is_file( $filepath = __DIR__ . "/includes/{$class_name}.php" ) ) {
		require( $filepath );
	}
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 *
 * @return WPTO
 */
function wpto() {
	static $wpto;
	if ( ! isset( $wpto ) ) {
		$wpto = new WPTO();
	}
	return $wpto;
}
wpto();