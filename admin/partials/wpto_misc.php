<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="misc" class="wrap metabox-holder columns-4 wpto-metaboxes hidden">
	<h1><?php esc_attr_e( 'Theme Options', $this->plugin_name ); ?></h1>
        <p><?php _e('Welcome to the WP Theme Optimizer plugin. Use this page to activate or deactivate various settings which can clean up your WordPress code, made it faster by reducing scripts loaded and more secure by removing some information about your WordPress installation.', $this->plugin_name);?></p>



<h2>Miscellaneous</h2>

<!-- Remove WP Generator tag -->
	<div class="options-box">
		<legend class="screen-reader-text"><span><?php _e('Remove WP Generator tag', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-wp_version_number">
			<h3><?php esc_attr_e('Remove WP Generator tag', $this->plugin_name);?></h3>
			<p>It can be considered a security risk to make your wordpress version visible and public you should hide it.</p>
		</label>
		<div class="options-checkbox">
		<input type="checkbox" id="<?php echo $this->plugin_name;?>-wp_version_number" name="<?php echo $this->plugin_name;?>[wp_version_number]" value="1" <?php checked($wp_version_number, 1);?>/>
	</div>
</div>

<?php if (is_plugin_active('wordpress-seo/wp-seo.php')) { ?>
<!-- Remove Yoast SEO comments -->
<div class="options-box">
	<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
	<label for="<?php echo $this->plugin_name;?>-remove_yoast_information">
		<h3><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></h3>
		<p>Remove the comments and version number left by Yoast SEO in your front-end HTMl.</p>
	</label>
	<div class="options-checkbox">
	<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_yoast_information" name="<?php echo $this->plugin_name;?>[remove_yoast_information]" value="1" <?php checked($remove_yoast_information, 1);?>/>
</div>
</div>
<?php } ?>

<!-- Minify HTML -->
<div class="options-box">
	<legend class="screen-reader-text"><span><?php _e('Minify HTML', $this->plugin_name);?></span></legend>
	<label for="<?php echo $this->plugin_name;?>-html_minify">
		<h3><?php esc_attr_e('Minify HTML', $this->plugin_name);?></h3>
		<p>Improve your site performance by Minifying the HTMl.</p>
	</label>
	<div class="options-checkbox">
	<input type="checkbox" id="<?php echo $this->plugin_name;?>-html_minify" name="<?php echo $this->plugin_name;?>[html_minify]" value="1" <?php checked($html_minify, 1);?>/>
</div>
</div>


</div>
