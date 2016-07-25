<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="clean-up" class="wrap metabox-holder columns-2 wpto-metaboxes">

	<h2><?php esc_attr_e( 'Options', $this->plugin_name ); ?></h2>

	<!-- remove css and js query string versions -->
	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove CSS and JS files query strings', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-css_js_versions">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-css_js_versions" name="<?php echo $this->plugin_name;?>[css_js_versions]" value="1" <?php checked($css_js_versions, 1);?>/>
			<span><?php esc_attr_e('Remove CSS and JS versions', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove WP Generator tag', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-wp_version_number">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-wp_version_number" name="<?php echo $this->plugin_name;?>[wp_version_number]" value="1" <?php checked($wp_version_number, 1);?>/>
			<span><?php esc_attr_e('Remove WP Generator tag', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove OEmbed Links', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_oembed">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_oembed" name="<?php echo $this->plugin_name;?>[remove_oembed]" value="1" <?php checked($remove_oembed, 1);?>/>
			<span><?php esc_attr_e('Remove OEmbed Links', $this->plugin_name);?></span>
		</label>
	</fieldset>


</div>
