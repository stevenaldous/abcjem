<?php
/**
 * The template for Posts
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

$pt = get_post_type();

?>
<div class="page-wrapper" id="single-wrapper">
	<div id="content" tabindex="-1">
        <?php /* hero */ get_template_part('template-parts/hero/hero', 'page'); ?>
        <?php // main ?>
        <main class="site-main my-5" id="main">
            <?php if( $pt ) {
                get_template_part('page-templates/layouts/single', $pt );
            } 
            else {
                echo '<p class="h4">Houston, we have a problem.</p>'; 
            };
            ?>
        </main>
        <?php // main ?>
	</div>
</div>
<?php get_footer();
