<?php
/**
 * FAQs Archive Layout
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="<?php echo esc_attr( $container ); ?> faqs mb-5">
<?php 
    while ( have_posts() ):
    the_post();
?>
   <article class="row mb-5">
        <div class="col-12">
            <header>
                <h2 class="h2"><?php the_title(); ?></h2>
            </header>
        </div>
        <div class="col-12">
            <?php get_template_part('template-parts/cards/cptcard', 'faq'); ?>
        </div>
   </article>
<?php endwhile; ?>
</div>


