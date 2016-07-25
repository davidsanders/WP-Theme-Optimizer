<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<h2 class="nav-tab-wrapper">
            <a href="#clean-up" class="nav-tab nav-tab-active"><?php _e('Clean up', $this->plugin_name);?></a>
  </h2>

	<form method="post" name="options" action="options.php">
		<?php
			// /*
			// * Grab all value if already set
			// *
			// */
			$options = get_option($this->plugin_name);

      global $menu;

			$css_js_versions = $options['css_js_versions'];
			$wp_version_number = $options['wp_version_number'];
			$remove_oembed = $options['remove_oembed'];
			$remove_jquery_migrate = $options['remove_jquery_migrate'];
			$remove_emoji_release = $options['remove_emoji_release'];


				/*
			* Set up hidden fields
			*
			*/
			settings_fields($this->plugin_name);
                        do_settings_sections($this->plugin_name);


		 // Include tabs partials
			require_once('wpto_settings.php');

		?>

		<p class="submit">
            <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>
        </p>

    </form>

</div>
