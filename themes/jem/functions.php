<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Loads javascript for showing customizer warning dialog.
 */
$understrap_includes = array(

    '/widgets.php',              // currently, all widgets are disabled in this file.

    '/customizer.php',           // Manage the available customizer fields

    '/enqueue.php',              // Load Child Scripts and Styles

    '/acf.php',                  // ACF functions

    // '/blocks.php',                // Gutenberg Blocks

    '/grav-forms.php',           // Gravity Form functions

    '/mb-functions.php',         // Mockingbird specific functions

    '/cpt.php',                  // Custom Post Types

    '/mb-class-wp-bootstrap-navwalker.php', // understrap nav-walker

    '/setup.php',
	
    
);

foreach ( $understrap_includes as $file ) {
    $filepath = locate_template( '/inc' . $file );
    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
}



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );
