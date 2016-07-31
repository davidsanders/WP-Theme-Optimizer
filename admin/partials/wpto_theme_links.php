<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="theme_links" class="wrap metabox-holder columns-4 wpto-metaboxes hidden">
	<h1><?php esc_attr_e( 'Theme Options', $this->plugin_name ); ?></h1>
        <p><?php _e('Welcome to the WP Theme Optimizer plugin. Use this page to activate or deactivate various settings which can clean up your WordPress code, made it faster by reducing scripts loaded and more secure by removing some information about your WordPress installation.', $this->plugin_name);?></p>


<h2>Theme Links</h2>

<!-- Remove oEmbed -->
<div class="options-box">
	<legend class="screen-reader-text"><span><?php _e('Remove OEmbed Links', $this->plugin_name);?></span></legend>
	<label for="<?php echo $this->plugin_name;?>-remove_oembed">
		<h3><?php esc_attr_e('Remove OEmbed Links', $this->plugin_name);?></h3>
		<p>OEmbed provides an easy way to embed content from one site to another. If you do not need it, disable it here.</p>
	</label>
	<div class="options-checkbox">
	<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_oembed" name="<?php echo $this->plugin_name;?>[remove_oembed]" value="1" <?php checked($remove_oembed, 1);?>/>
</div>
</div>

<!-- Remove RSD Link -->
<div class="options-box remove_rsd_link">
	<legend class="screen-reader-text"><span><?php _e('Remove RSD Link', $this->plugin_name);?></span></legend>
	<label for="<?php echo $this->plugin_name;?>-remove_rsd_link">
		<h3><?php esc_attr_e('Remove RSD Link', $this->plugin_name);?></h3>
		<p>Are you editing your WordPress blog using your browser? Then you are not using a blog client and this link can probably be removed by disabling it here.</p>
	</label>
	<div class="options-checkbox">
	<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_rsd_link" name="<?php echo $this->plugin_name;?>[remove_rsd_link]" value="1" <?php checked($remove_rsd_link, 1);?>/>
</div>
</div>

<!-- Remove RSS Feeds -->
<div class="options-box">
	<legend class="screen-reader-text"><span><?php _e('Remove RSS feeds', $this->plugin_name);?></span></legend>
	<label for="<?php echo $this->plugin_name;?>-remove_rss_feed">
		<h3><?php esc_attr_e('Remove RSS feeds', $this->plugin_name);?></h3>
		<p>Are you using RSS feeds? If not, you can turn them off here.</p>
	</label>
	<div class="options-checkbox">
	<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_rss_feed" name="<?php echo $this->plugin_name;?>[remove_rss_feed]" value="1" <?php checked($remove_rss_feed, 1);?>/>
</div>
</div>




</div>
