<?php

/**
 * @link              https://www.designsbytouch.co.uk
 * @since             1.0.0
 * @package           Wp_Theme_Optimiser
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<h2 class="nav-tab-wrapper"><?php
		$active_class = ' nav-tab-active';
		foreach( wpto()->categories() as $category_name => $category ):
			$css_id = esc_attr( $category->css_id );
			$label = esc_attr( $category->label );
			echo "<a href=\"#{$css_id}\" class=\"nav-tab{$active_class}\">{$label}</a>";
			$active_class = '';
		endforeach;
	?></h2>

	<form method="post" name="options" action="options.php">
		<?php
		/*
		* Set up hidden fields
		*
		*/
		settings_fields( wpto()->plugin_name );
		do_settings_sections( wpto()->plugin_name );

		$options = wpto()->options();
		?>
		<div class="tab-content">
		<?php
			foreach( wpto()->categories() as $category_name => $category ):
			?>
				<div id="<?php esc_attr_e( $category->css_id ); ?>" class="wrap metabox-holder columns-4 wpto-metaboxes ">
					<h1><?php esc_html_e( $category->label ); ?></h1>
					<p><?php _e( 'Welcome to the WP Theme Optimizer plugin. Use this page to activate or deactivate various settings which can clean up your WordPress code, made it faster by reducing scripts loaded and more secure by removing some information about your WordPress installation.', 'wpto' ); ?></p>

					<input type="checkbox" class="all"/>
					<h3 class="activate-label"><?php esc_attr_e( 'Activate/Deactivate All', 'wpto' ); ?></h3>
					<?php
					foreach( $category->optimizations as $index => $optimization ):
						if ( is_string( $optimization ) && class_exists( $optimization ) ) {
							$optimization = new $optimization();
							if ( is_null( $optimization ) ) {
								continue;
							}
							$category->optimizations[ $index ] = $optimization;
						}
						/**
						 * @var WPTO_Optimization_Base $optimization
						 */
						$input_id = esc_attr( wpto()->plugin_name . '-' . $optimization->name() );
						?>
						<div class="options-box">
							<legend class="screen-reader-text"><span><?php esc_html_e( $optimization->title ); ?></span></legend>
							<label for="<?php echo $input_id ?>">
								<h3><?php esc_attr_e( $optimization->title ); ?></h3>
								<p><?php echo wp_kses_post( $optimization->description ); ?></p>
							</label>
							<div class="options-checkbox">
								<input type="checkbox" id="<? echo $input_id; ?>"
								       name="<?php wpto()->the_plugin_name(); ?>[<?php $optimization->the_name(); ?>]"
								       value="1"<?php echo checked( $options[ $optimization->name() ], 1 ); ?>/>
							</div>
						</div>
						<?php
					endforeach;
					?>
				</div>
			<?php
			endforeach;
			submit_button( __( 'Save all changes', 'wpto' ), 'primary', 'submit', true );
		?>
		</div>

	</form>

</div>
