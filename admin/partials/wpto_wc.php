	<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="wc" class="wrap metabox-holder columns-2 wp_cbf-metaboxes hidden">

	<h2><?php esc_attr_e( 'WooCommerce', $this->plugin_name ); ?></h2>
        <p><?php _e('To Add Yoast Options', $this->plugin_name);?></p>

				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_wc_price_slider">
						<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_price_slider" name="<?php echo $this->plugin_name;?>[remove_wc_price_slider]" value="1" <?php checked($remove_wc_price_slider, 1);?>/>
						<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
					</label>
				</fieldset>

							</div>
