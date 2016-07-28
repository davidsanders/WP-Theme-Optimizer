<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="minify" class="wrap metabox-holder columns-4 wpto-metaboxes hidden">

	<h2><?php esc_attr_e( 'Minify', $this->plugin_name ); ?></h2>
        <p><?php _e('A page showing minification settings', $this->plugin_name);?></p>

	<!-- remove css and js query string versions -->
	<div class="options-box">
		<legend class="screen-reader-text"><span><?php _e('Minify HTML', $this->plugin_name);?></span></legend>
		<label for="<?php echo $this->plugin_name;?>-html_minify">
			<input type="checkbox" id="<?php echo $this->plugin_name;?>-html_minify" name="<?php echo $this->plugin_name;?>[html_minify]" value="1" <?php checked($html_minify, 1);?>/>
			<h3><?php esc_attr_e('Minify HTML', $this->plugin_name);?></h3>
			<p>Improve your site performance by Minifying the HTMl.</p>

		</label>
	</div>


</div>
