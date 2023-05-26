<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php // check for Google Analytics 
		
		// Global Google Analytics JS
		$gajs = get_field('js_ga','options');
		if($gajs){
			echo $gajs;
		}


	?>


	<?php wp_head(); ?>


	<?php // check for page Javascript  
		
		// Global JS
		$hjs = get_field('js_head','options');
		if($hjs){
			echo $hjs;
		}

		// Page JS
		$phjs = get_field('pagejs');
		if($phjs){
			echo $phjs;
		}
	?>

	
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?> >
<?php //do_action( 'wp_body_open' ); ?>

<div class="site" id="page">

	<?php  /******************* The Navbar Area *******************/ ?>
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part('template-parts/header/navbar', 'main'); ?>

	</header><?php  /* #wrapper-navbar end */ ?>

