<?php

/**
 * @link              https://www.designsbytouch.co.uk
 * @since             1.0.0
 * @package           Wp_Theme_Optimizer
 */
class WPTO extends WPTO_Base {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string $plugin_name The string used to uniquely identify this plugin.
	 */
	public $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string $version The current version of the plugin.
	 */
	public $version;

	/**
	 * The domain specified for this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * The directory of the plugin root
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	public $dirpath;

	/**
	 * The root filepath of the plugin
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	public $filepath;

	/**
	 * @var array
	 */
	private $_categories = array();

	/**
	 * @var array
	 */
	private $_optimizations = array();

	/**
	 * @var WPTO_Admin
	 */
	private $_admin;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'wpto';
		$this->version     = '1.0.0';
		$this->dirpath     = dirname( __DIR__ );
		$this->filepath    = "{$this->dirpath}/wpto.php";

		$this->set_locale();

		register_activation_hook( __FILE__, array( $this, 'activate_plugin' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate_plugin' ) );

		$this->register_category( 'theme-scripts', array(
			'label' => __( 'Theme Scripts', 'wpto' ),
			'css_id' => 'theme_scripts',
		));

		$this->register_category( 'theme-links', array(
			'label' => __( 'Theme Links', 'wpto' ),
			'css_id' => 'theme_links',
		));

		$this->register_category( 'misc-settings', array(
			'label' => __( 'Misc Settings', 'wpto' ),
			'css_id' => 'misc',
		));

		if ( class_exists( 'WooCommerce' ) ) {
			$this->register_category( 'woocommerce', array(
				'label'  => __( 'WooCommerce', 'wpto' ),
				'css_id' => 'wc',
			) );
		}

		if ( is_admin() ) {

			$this->_admin = new WPTO_Admin();

		}

		$this->add_action( 'plugins_loaded', 11 );

	}

	/**
	 * @param string $optimization_name
	 *
	 * @return string|null
	 */
	public function get_optimization_class_name( $optimization_name ) {
		$optimizations = array_flip( $this->_optimizations );

		return isset( $optimizations[ $optimization_name ] )
			? $optimizations[ $optimization_name ]
			: null;
	}

	/**
	 * @param string $optimization_name
	 *
	 * @return WPTO_Optimization_Base|null
	 */
	public function make_new_optimization( $optimization_name ) {
		$class_name = $this->get_optimization_class_name( $optimization_name );
		return $class_name
			? new $class_name()
			: null;
	}

	/**
	 * Load all optimizations
	 */
	public function _plugins_loaded() {
		$optimization_files = apply_filters( 'wpto_optimizations', glob( "{$this->dirpath}/optimizations/*.php" ) );
		$categories = $this->categories();
		$options = $this->options();
		foreach( $optimization_files as $optimization_file ) {
			require( $optimization_file );
			$class_name = basename( $optimization_file, '.php' );
			if ( class_exists( $class_name ) ) {
				$optimization_category = constant( "{$class_name}::CATEGORY" );
				if ( isset( $categories[ $optimization_category ] ) ) {
					$optimization_name                        = constant( "{$class_name}::NAME" );
					$this->_optimizations[ $class_name ]      = $optimization_name;
					if ( ! isset( $options[ $optimization_name ] ) || 0 === $options[ $optimization_name ] ) {
						$optimization = $class_name;
					} else {
						/**
						 * @var WPTO_Optimization_Base $optimization
						 */
						$optimization = new $class_name();
						$optimization->optimize();
					}
					$this->_categories[ $optimization_category ]->optimizations[ $optimization_name ] = $optimization;
				}
			}
		}
	}

	/**
	 * @param string $category
	 * @param array $args
	 */
	public function register_category( $category, $args = array() ) {
		$args[ 'category' ]             = $category;
		$args[ 'optimizations' ]        = array();
		$this->_categories[ $category ] = (object)$args;
	}

	/**
	 * The code that runs during plugin activation.
	 */
	public function activate_plugin() {

	}

	/**
	 * The code that runs during plugin deactivation.
	 */
	public function deactivate_plugin() {

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the WPTO_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$this->set_domain( $this->plugin_name );

		add_action( 'plugins_loaded', 'load_plugin_textdomain' );

	}

	/**
	 * @return mixed|void
	 */
	public function optimizations() {
		return $this->_optimizations;
	}

	/**
	 * @return mixed|void
	 */
	public function options() {
		return get_option( wpto()->plugin_name );

	}

	/**
	 * @param string $option_name
	 *
	 * @return mixed|null
	 */
	public function get_option( $option_name ) {

		$options = $this->options();

		return isset( $options[ $option_name ] )
			? $options[ $option_name ]
			: null;

	}

	/**
	 * @return mixed|void
	 */
	public function categories() {
		return $this->_categories;
	}

	/**
	 * @param string $category_name
	 *
	 * @return mixed|null
	 */
	public function get_category( $category_name ) {

		$categories = $this->categories();

		return isset( $categories[ $category_name ] )
			? $categories[ $category_name ]
			: null;

	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( __DIR__ ) . '/languages/'
		);

	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @since    1.0.0
	 * @param    string    $domain    The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}

	public function the_plugin_name() {

		echo esc_html( $this->plugin_name );

	}

}
