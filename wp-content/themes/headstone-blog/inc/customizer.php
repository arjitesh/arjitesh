<?php
/**
 * Headstone Blog Theme Customizer
 *
 * @package headstone_blog
 */

/**
 * Customizer options
 */
function headstone_blog_customize_register( $wp_customize ) {
	include get_stylesheet_directory() . '/inc/customizer/feature-post-one-options.php';
    include get_stylesheet_directory() . '/inc/customizer/top-stories-options.php';
    include get_stylesheet_directory() . '/inc/customizer/popular-post-options.php';
    include get_stylesheet_directory() . '/inc/customizer/trending-post-options.php';
}
add_action( 'customize_register', 'headstone_blog_customize_register' );