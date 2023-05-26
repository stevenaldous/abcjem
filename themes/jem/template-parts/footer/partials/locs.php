<?php
/**
 * The template for displaying the footer Locations
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf = 'f_loc_';
//site-info vars
$t 	    = get_field($acf . 't', 'options');
$sh     = get_field($acf . 'sh', 'options') ? get_field($acf . 'sh', 'options') : 'p';
$posts  = get_field($acf . 'locs', 'options');

if($t) { echo '<'.$sh.' class="h2">'.$t.'</'.$sh.'>'; };

if($posts) {
    echo '<div class="loc-grid mt-4 mt-lg-5">';
    foreach($posts as $post) {
        setup_postdata( $post );

        get_template_part('template-parts/cards/cptcard', 'loc');
    }
    echo '</div>';
}
?>