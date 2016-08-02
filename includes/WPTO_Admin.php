<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimizer
*/
class WPTO_Admin extends WPTO_Base {

	static $options_page;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     */
    public function __construct() {

	    $this->add_action( 'admin_enqueue_scripts' );

	    $this->add_action( 'admin_menu' );
	    $this->add_action( 'admin_init' );


    }

	/**
	 *
	 */
    public function _admin_enqueue_scripts() {

	    $this->enqueue_styles();
	    $this->enqueue_scripts();

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in WPTO_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The WPTO_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if ( 'settings_page_wpto' === get_current_screen()->id ) {
            // Css rules for Color Picker
            wp_enqueue_style(
            	wpto()->plugin_name,
	            plugin_dir_url( wpto()->filepath ) . 'assets/css/wpto-admin.css',
	            wpto()->version,
	            'all'
            );
        }

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in WPTO_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The WPTO_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if ( 'settings_page_wpto' === get_current_screen() -> id ) {
            wp_enqueue_media();
            wp_enqueue_script(
            	wpto()->plugin_name,
	            plugin_dir_url( wpto()->filepath ) . 'assets/js/wpto-admin.js',
	            array( 'jquery' ),
	            wpto()->version,
	            false
            );
        }

    }

    /**
     * Register the administration menu for this plugin into the WordPress Dashboard menu.
     *
     * @since    1.0.0
     */
    public function _admin_menu() {

        /*
         * Add a settings page for this plugin to the Settings menu.
         *
         * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
         *
         *        Administration Menus: http://codex.wordpress.org/Administration_Menus
         *
         */
        self::$options_page = add_options_page(
	        __('WP Theme Optimizer', 'wpto' ),
	        __('WP Theme Optimizer', 'wpto' ),
	        'manage_options',
	        wpto()->plugin_name,
	        array( $this, '_admin_page' ) );
    }

    /**
     * Render the settings page for this plugin.
     *
     * @since    1.0.0
     */
    public function _admin_page() {
        include_once( wpto()->dirpath . '/partials/display-admin.php' );
    }


    /**
     * Add settings action link to the plugins page.
     *
     * @since    1.0.0
     *
     * @param array $links
     * @return array
     */
    public function _plugin_action_links( $links ) {

        return array_merge(
            array(
                'settings' => sprintf( '<a href="%s">%s</a>',
                    admin_url( 'options-general.php?page=' . wpto()->plugin_name ),
                    __( 'Settings', 'wpto' )
                ),
            ),
            $links
        );

    }


    /**
     *  Save the plugin options
     *
     *
     * @since    1.0.0
     */
    public function _admin_init() {
        register_setting(
        	wpto()->plugin_name,
	        wpto()->plugin_name,
	        array($this, 'validate')
        );

	    /**
	     * @todo Verify there is not an easier way to $plugin_basename.
	     */
	    $plugin_basename = plugin_basename( dirname( __DIR__ ) . '/' . wpto()->plugin_name . '.php' );

	    add_filter(
		    "plugin_action_links_{$plugin_basename}",
		    array( $this, '_plugin_action_links' )
	    );

    }

    public function validate($input) {
	    $valid = array();
	    foreach( wpto()->optimizations() as $class_name => $optimization_name ) {
	    	if ( ! isset( $input[ $optimization_name ] ) ) {
			    $valid[ $optimization_name ] = 0;
		    } else {
			    /**
			     * @var WPTO_Optimization_Base $optimization
			     */
			    $optimization = new $class_name();
			    $valid[ $optimization_name ] = $optimization->validate_input( $input[ $optimization_name ] );
		    }
	    }
        return $valid;
    }

}
