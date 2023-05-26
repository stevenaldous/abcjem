<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$bg         = get_field( 'hbg_search' ,'options' ) ? get_field( 'hbg_search' ,'options' ) : get_field('fb_herobg','options'); 

//$curauth    = get_query_var( 'author_name' ) ?  $curauth = get_user_by( 'slug', get_query_var( 'author_name' ) ) : $curauth = get_userdata( intval( $author ) ); 
?>
<div class="page-wrapper" id="author-wrapper">
	<div id="content" tabindex="-1">
        <main class="site-main" id="main">

        <?php // hero 
            get_template_part( 'template-parts/hero/hero', 'archive' )
        ?>
        <div class="<?php echo esc_attr( $container ); ?>">

            <div class="row mt-5">
                <?php while ( have_posts() ): the_post(); ?>
                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                        <?php get_template_part('template-parts/cards/cptcard', 'post'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
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
	</div><!-- #content -->
</div><!-- #author-wrapper -->

<?php
get_footer();
