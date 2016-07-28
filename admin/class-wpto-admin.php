<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
class wpto_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->wpto_options = get_option($this->plugin_name);

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
         * defined in wpto_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The wpto_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if ( 'settings_page_wpto' == get_current_screen() -> id ) {
            // Css rules for Color Picker
            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpto-admin.css', array('wp-color-picker'), $this->version, 'all' );
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
         * defined in wpto_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The wpto_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if ( 'settings_page_wpto' == get_current_screen() -> id ) {
            wp_enqueue_media();
            wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpto-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );
        }

    }

    /**
     * Register the administration menu for this plugin into the WordPress Dashboard menu.
     *
     * @since    1.0.0
     */
    public function add_plugin_admin_menu() {

        /*
         * Add a settings page for this plugin to the Settings menu.
         *
         * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
         *
         *        Administration Menus: http://codex.wordpress.org/Administration_Menus
         *
         */
        $plugin_screen_hook_suffix = add_options_page( __('WP Theme Optimiser', $this->plugin_name ), 'WP Theme Optimiser', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
        );
    }

    /**
     * Render the settings page for this plugin.
     *
     * @since    1.0.0
     */
    public function display_plugin_setup_page() {
        include_once( 'partials/wpto-admin-display.php' );
    }


    /**
     * Add settings action link to the plugins page.
     *
     * @since    1.0.0
     */
    public function add_action_links( $links ) {


        return array_merge(
            array(
                'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __( 'Settings', $this->plugin_name ) . '</a>'
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
    public function options_update() {
        register_setting( $this->plugin_name, $this->plugin_name, array($this, 'validate') );
    }

    public function validate($input) {
        // All checkboxes inputs
        $options = get_option($this->plugin_name);
        $valid = array();

        $valid['css_js_versions'] = (isset($input['css_js_versions']) && !empty($input['css_js_versions'])) ? 1 : 0;
        $valid['wp_version_number'] = (isset($input['wp_version_number']) && !empty($input['wp_version_number'])) ? 1 : 0;
        $valid['remove_oembed'] = (isset($input['remove_oembed']) && !empty($input['remove_oembed'])) ? 1 : 0;
        $valid['remove_jquery_migrate'] = (isset($input['remove_jquery_migrate']) && !empty($input['remove_jquery_migrate'])) ? 1 : 0;
        $valid['remove_emoji_release'] = (isset($input['remove_emoji_release']) && !empty($input['remove_emoji_release'])) ? 1 : 0;
        $valid['remove_rsd_link'] = (isset($input['remove_rsd_link']) && !empty($input['remove_rsd_link'])) ? 1 : 0;
        $valid['remove_rss_feed'] = (isset($input['remove_rss_feed']) && !empty($input['remove_rss_feed'])) ? 1 : 0;
        $valid['remove_wlwmanifest'] = (isset($input['remove_wlwmanifest']) && !empty($input['remove_wlwmanifest'])) ? 1 : 0;
        $valid['remove_wp_json'] = (isset($input['remove_wp_json']) && !empty($input['remove_wp_json'])) ? 1 : 0;
        $valid['remove_wp_shortlink'] = (isset($input['remove_wp_shortlink']) && !empty($input['remove_wp_shortlink'])) ? 1 : 0;
        $valid['remove_wp_post_links'] = (isset($input['remove_wp_post_links']) && !empty($input['remove_wp_post_links'])) ? 1 : 0;
        $valid['remove_pingback'] = (isset($input['remove_pingback']) && !empty($input['remove_pingback'])) ? 1 : 0;

        // Yoast
        $valid['remove_yoast_information'] = (isset($input['remove_yoast_information']) && !empty($input['remove_yoast_information'])) ? 1 : 0;

        // WooCommerce
          $valid['wc_cart_fragments'] = (isset($input['wc_cart_fragments']) && !empty($input['wc_cart_fragments'])) ? 1 : 0;


// HTML Minify
          $valid['html_minify'] = (isset($input['html_minify']) && !empty($input['html_minify'])) ? 1 : 0;

        return $valid;
    }



    /*
    *
    * Images / Media uploader
    *
     */







}
