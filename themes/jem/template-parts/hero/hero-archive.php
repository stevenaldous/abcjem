<?php
/**
 * Hero - Page
 *
 * @package Understrap
 * 
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$t= '';

if (is_category()) {
    $term   = get_queried_object();
    $t = $term->name;
} 
elseif (is_tag()) {
    $t = get_the_title();
} 
elseif (is_author()) {
    $t = '<span class="vcard">' . get_the_author() . '</span>';
} 
elseif (is_tax()) { //for custom post types
    $t = 'All ' . get_post_type();
} 
elseif ( is_post_type_archive('team') ) {
    $t = 'Our Team';
} 
elseif ( is_post_type_archive('locations') ) {
    $t = 'Our Locations';
} 
elseif ( is_post_type_archive('cases') ) {
    $t = 'Our Case Results';
} 
elseif ( is_post_type_archive('testimonials') ) {
    $t = 'Our Testimonials';
} 
elseif ( is_post_type_archive('faqs') ) {
    $t = 'Our Frequently Asked Questions';
} 
elseif ( is_post_type_archive('practices') ) {
    $t = 'Our Practice Areas';
} 
elseif ( is_home() ) {
    $t = 'Blog';
}

?>
<div class="hero bg-jem1 pt-5 pb-3">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-12 mt-5 pt-5">
                <header>
                    <h1 class="h1 page-title text-capitalize"><?php echo $t; ?></h1>
                </header>
            </div>
        </div>
    </div>
</div>