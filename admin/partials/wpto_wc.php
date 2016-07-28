	<?php

/**
* @link              https://www.designsbytouch.co.uk
* @since             1.0.0
* @package           Wp_Theme_Optimiser
*/
?>

<div id="wc" class="wrap metabox-holder columns-4 wpto-metaboxes hidden">

	<h2><?php esc_attr_e( 'WooCommerce', $this->plugin_name ); ?></h2>
        <p><?php _e('To Add WC Options', $this->plugin_name);?></p>

<?php
$wc_dequeue_scripts = array();
$wc_dequeue_scripts[101] = array(
    "id" => "wc_cart_fragments",
    "output" => "wc-cart-fragments",
    "title" => "Remove wc-cart-fragments.js",
    "description" => "Donec ullamcorper nulla non metus auctor fringilla.",
);

foreach($wc_dequeue_scripts as $wc_dequeue_script) {
?>

		<div class="options-box">
			<legend class="screen-reader-text"><span><?php _e($wc_dequeue_script["title"], $this->plugin_name);?></span></legend>
			<label for="<?php echo $this->plugin_name;?>-<?php echo $wc_dequeue_script["id"] ?>">
				<input type="checkbox" id="<?php echo $this->plugin_name;?>-<?php echo $wc_dequeue_script["id"] ?>" name="<?php echo $this->plugin_name;?>[<?php echo $wc_dequeue_script["id"] ?>]" value="1" <?php checked($wc_cart_fragments, 1);?>/>
				<span><?php echo $wc_dequeue_script["title"] ?></span><br/>
				<span><?php echo $wc_dequeue_script["description"] ?></span>
			</label>
		</div>
<?php
}

?>

							</div>
