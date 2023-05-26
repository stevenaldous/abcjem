<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$pt = get_post_type();

?>

<div class="page-wrapper archive-<?php echo $pt; ?>" id="archive-wrapper">
    <div id="content" tabindex="-1">

        <?php /* hero */ get_template_part('template-parts/hero/hero', 'archive'); ?>

        <main class="site-main mb-5" id="main">
        <?php
            if ( have_posts() ) {
                if( $pt ) {
                    get_template_part('page-templates/layouts/archive', $pt );
                } 
                else {
                    echo '<p class="h4">Houston, we have a problem.</p>'; 
                }
            } else {
                get_template_part( 'loop-templates/content', 'none' );
            }
        ?>
        </main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        // Display the pagination component.
                        understrap_pagination();
                    ?>
                </div>
            </div>
        
        </div>
	</div>
</div>

<?php get_footer();
