<?php
/**
 * The template for displaying the footer menu
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf = 'f_men_';
//site-info vars
$t 	    = get_field( $acf.'t', 'options' );
$menu 	= get_field('f_menu', 'options');

if($menu){
    echo '<div class="fmenu-wrap">'; // open wrapper

    // title
    if($t){ '<p class="h5">'. $mt.'</p>'; }

    // menu
    wp_nav_menu(
        array(
            'theme_location'  => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'nav menu foot-menu',
            'fallback_cb'     => '',
            'menu_id'         => $menu,
            'depth'           => 1,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
    );
    echo '</div>'; // open wrapper

}
?>