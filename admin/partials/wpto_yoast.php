<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="yoast" class="wrap metabox-holder columns-4 wpto-metaboxes hidden">

	<h2><?php esc_attr_e( 'Yoast SEO', $this->plugin_name ); ?></h2>
        <p><?php _e('To Add Yoast Options', $this->plugin_name);?></p>

				<div class="options-box">
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_yoast_information">
						<h3><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></h3>
						<p>Remove the comments and version number left by Yoast SEO in your front-end HTMl.</p>
					</label>
					<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_yoast_information" name="<?php echo $this->plugin_name;?>[remove_yoast_information]" value="1" <?php checked($remove_yoast_information, 1);?>/>
				</div>

</div>
