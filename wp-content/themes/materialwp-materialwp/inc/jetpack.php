<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package materialwp
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function materialwp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'materialwp_jetpack_setup' );
