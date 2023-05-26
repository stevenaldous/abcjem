<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<div class="page-wrapper" id="page-wrapper">
	<div id="content" tabindex="-1">

        <?php /* hero */ get_template_part('template-parts/hero/hero', 'page'); ?>

        <?php // check for off canvas form; 
            if( get_field( 'ocf_tf' ) ) {
                get_template_part('template-parts/components/offcanvas', 'form');
            }
        ?>

        <?php // page content ?>
            <main class="site-main mt-5" id="main">
                <?php get_template_part('/template-parts/flex/flex', 'controller'); ?>
            </main>
        <?php // page content ?>

	</div>
</div>

<?php get_footer();
