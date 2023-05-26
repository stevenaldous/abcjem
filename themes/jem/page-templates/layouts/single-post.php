
 <?php
/**
 * Single Location Layout
 *
 * @package Understrap
 * 
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="<?php echo esc_attr( $container ); ?>">
    <div class="row">
        <div class="col-12">
            <?php
                while ( have_posts() ) {
                    the_post();
            ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <header class="entry-header">

                <?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <div class="entry-meta">

                    <?php understrap_posted_on(); ?>

                </div><!-- .entry-meta -->

            </header><!-- .entry-header -->

            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

            <div class="entry-content">

                <?php
                the_content();
                understrap_link_pages();
                ?>

            </div><!-- .entry-content -->

            <footer class="entry-footer">

                <?php understrap_entry_footer(); ?>

            </footer><!-- .entry-footer -->

            </article><!-- #post-## -->

            <?php 
                    understrap_post_nav();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                }
            ?>
        </div>
    </div>
</div>
