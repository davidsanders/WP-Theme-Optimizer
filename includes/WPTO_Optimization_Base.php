<?php

abstract class WPTO_Optimization_Base extends WPTO_Base {

	const NAME = 'wpto_base';
	const CATEGORY = 'unknown';

	public $title;
	public $description;

	public function __construct() {

		$this->add_action( 'after_setup_theme' );

	}

	/*
	 * Remove  CSS and JS query strings versions
	 */
	public function _after_setup_theme() {

	}

	/**
	 * @return mixed|null
	 */
	public function option() {

		return wpto()->get_option( static::NAME );

	}

	/**
	 * @return string
	 */
	public function name() {

		return static::NAME;

	}

	/**
	 * @return string
	 */
	public function the_name() {

		echo esc_attr( $this->name() );

	}

	/**
	 * @return string
	 */
	public function category() {

		return static::CATEGORY;

	}

	/**
	 * @return string
	 */
	public function the_category() {

		echo esc_attr( $this->category() );

	}

	/**
	 * Validates input from admin console.
	 *
	 * @param mixed $input
	 *
	 * @return bool
	 */
	public function validate_input( $input ) {

		return ! empty( $input ) ? 1 : 0;

	}

	/**
	 * @return string
	 */
	public function is_wc_dequeueable() {
		return ! is_woocommerce() && ! is_cart() && ! is_checkout() ;
	}

}