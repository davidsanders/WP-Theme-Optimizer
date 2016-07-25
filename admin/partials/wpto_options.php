<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="options" class="wrap metabox-holder columns-4 wpto-metaboxes">


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

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove jQuery Migrate', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_jquery_migrate">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_jquery_migrate" name="<?php echo $this->plugin_name;?>[remove_jquery_migrate]" value="1" <?php checked($remove_jquery_migrate, 1);?>/>
			<span><?php esc_attr_e('Remove jQuery Migrate', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove emoji-release.js', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_emoji_release">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_emoji_release" name="<?php echo $this->plugin_name;?>[remove_emoji_release]" value="1" <?php checked($remove_emoji_release, 1);?>/>
			<span><?php esc_attr_e('Remove emoji-release.js', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove RSD Link', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_rsd_link">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_rsd_link" name="<?php echo $this->plugin_name;?>[remove_rsd_link]" value="1" <?php checked($remove_rsd_link, 1);?>/>
			<span><?php esc_attr_e('Remove RSD Link', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove RSS feeds', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_rss_feed">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_rss_feed" name="<?php echo $this->plugin_name;?>[remove_rss_feed]" value="1" <?php checked($remove_rss_feed, 1);?>/>
			<span><?php esc_attr_e('Remove RSS feeds', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove wlwmanifest.xml', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_wlwmanifest">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wlwmanifest" name="<?php echo $this->plugin_name;?>[remove_wlwmanifest]" value="1" <?php checked($remove_wlwmanifest, 1);?>/>
			<span><?php esc_attr_e('Remove wlwmanifest.xml', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove WP JSON link', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_wp_json">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wp_json" name="<?php echo $this->plugin_name;?>[remove_wp_json]" value="1" <?php checked($remove_wp_json, 1);?>/>
			<span><?php esc_attr_e('Remove WP JSON link', $this->plugin_name);?></span>
		</label>
	</fieldset>

	<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Remove WP Shortlink', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-remove_wp_shortlink">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wp_shortlink" name="<?php echo $this->plugin_name;?>[remove_wp_shortlink]" value="1" <?php checked($remove_wp_shortlink, 1);?>/>
			<span><?php esc_attr_e('Remove WP Shortlink', $this->plugin_name);?></span>
		</label>
	</fieldset>

		<fieldset>
			<legend class="screen-reader-text"><span><?php _e('Remove Next/Previous post links', $this->plugin_name);?></span></legend>
			<label for="<?php echo $this->plugin_name;?>-remove_wp_post_links">
				<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wp_post_links" name="<?php echo $this->plugin_name;?>[remove_wp_post_links]" value="1" <?php checked($remove_wp_post_links, 1);?>/>
				<span><?php esc_attr_e('Remove Next/Previous post links', $this->plugin_name);?></span>
			</label>
		</fieldset>

		<fieldset>
			<legend class="screen-reader-text"><span><?php _e('Remove Pingbacks globally', $this->plugin_name);?></span></legend>
			<label for="<?php echo $this->plugin_name;?>-remove_pingback">
				<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_pingback" name="<?php echo $this->plugin_name;?>[remove_pingback]" value="1" <?php checked($remove_pingback, 1);?>/>
				<span><?php esc_attr_e('Remove Pingbacks globally', $this->plugin_name);?></span>
			</label>
		</fieldset>
</div>