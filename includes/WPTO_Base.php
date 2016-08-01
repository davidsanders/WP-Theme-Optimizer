<?php

abstract class WPTO_Base {

	/**
	 * @param string $hook
	 * @param int $priority
	 */
	public function add_filter( $hook, $priority = 10) {

		add_filter( $hook, array( $this, "_{$hook}" ), $priority, 99 );

	}
	/**
	 * @param string $hook
	 * @param int $priority
	 */
	public function add_action( $hook, $priority = 10) {

		add_action( $hook, array( $this, "_{$hook}" ), $priority, 99 );

	}

}