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
<!--
				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_wc_single_product">
						<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_single_product" name="<?php echo $this->plugin_name;?>[remove_wc_single_product]" value="1" <?php checked($remove_wc_single_product, 1);?>/>
						<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
					</label>
				</fieldset>

				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_wc_add_to_cart">
						<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_add_to_cart" name="<?php echo $this->plugin_name;?>[remove_wc_add_to_cart]" value="1" <?php checked($remove_wc_add_to_cart, 1);?>/>
						<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
					</label>
				</fieldset>

				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_wc_cart_fragments">
						<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_cart_fragments" name="<?php echo $this->plugin_name;?>[remove_wc_cart_fragments]" value="1" <?php checked($remove_wc_cart_fragments, 1);?>/>
						<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
					</label>
				</fieldset>

				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_wc_checkout">
						<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_checkout" name="<?php echo $this->plugin_name;?>[remove_wc_checkout]" value="1" <?php checked($remove_wc_checkout, 1);?>/>
						<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
					</label>
				</fieldset>

				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
					<label for="<?php echo $this->plugin_name;?>-remove_wc_add_to_cart_variation">
						<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_add_to_cart_variation" name="<?php echo $this->plugin_name;?>[remove_wc_add_to_cart_variation]" value="1" <?php checked($remove_wc_add_to_cart_variation, 1);?>/>
						<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
					</label>
				</fieldset>


								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_wc_single_product">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_single_product" name="<?php echo $this->plugin_name;?>[remove_wc_single_product]" value="1" <?php checked($remove_wc_single_product, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>

								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_wc_cart">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_cart" name="<?php echo $this->plugin_name;?>[remove_wc_cart]" value="1" <?php checked($remove_wc_cart, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>


								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_wc_chosen">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_wc_chosen" name="<?php echo $this->plugin_name;?>[remove_wc_chosen]" value="1" <?php checked($remove_wc_chosen, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>

								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_woocommerce">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_woocommerce" name="<?php echo $this->plugin_name;?>[remove_woocommerce]" value="1" <?php checked($remove_woocommerce, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>

								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_prettyPhoto">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_prettyPhoto" name="<?php echo $this->plugin_name;?>[remove_prettyPhoto]" value="1" <?php checked($remove_prettyPhoto, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>

								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_prettyPhoto_init">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_prettyPhoto_init" name="<?php echo $this->plugin_name;?>[remove_prettyPhoto_init]" value="1" <?php checked($remove_prettyPhoto_init, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>

								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_jquery_blockui">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_jquery_blockui" name="<?php echo $this->plugin_name;?>[remove_jquery_blockui]" value="1" <?php checked($remove_jquery_blockui, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>

								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_jquery_placeholder">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_jquery_placeholder" name="<?php echo $this->plugin_name;?>[remove_jquery_placeholder]" value="1" <?php checked($remove_jquery_placeholder, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>


								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_fancybox">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_fancybox" name="<?php echo $this->plugin_name;?>[remove_fancybox]" value="1" <?php checked($remove_fancybox, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>


								<fieldset>
									<legend class="screen-reader-text"><span><?php _e('Remove Yoast Information', $this->plugin_name);?></span></legend>
									<label for="<?php echo $this->plugin_name;?>-remove_jqueryui">
										<input type="checkbox" id="<?php echo $this->plugin_name;?>-remove_jqueryui" name="<?php echo $this->plugin_name;?>[remove_jqueryui]" value="1" <?php checked($remove_jqueryui, 1);?>/>
										<span><?php esc_attr_e('Remove Yoast Information', $this->plugin_name);?></span>
									</label>
								</fieldset>
-->

							</div>
