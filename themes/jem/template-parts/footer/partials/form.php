<?php
/**
 * The template for displaying the footer form
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf = 'f_form_';
//site-info vars
$t 	    = get_field( $acf.'t', 'options' );
$sh     = get_field( $acf.'sh', 'options' ) ? get_field( $acf.'sh', 'options' ) : 'p';
$subt   = get_field( $acf.'subt', 'options' );
$form   = get_field( $acf.'form', 'options' );


?>
<div class="form-wrap p-3 p-xl-5">
    <header class="mb-4">
        <?php 
            // title
            if ( $t ) { echo '<'.$sh.' class="h2">'.$t.'</'.$sh.'>'; }

            // subtitle
            if ( $subt ) { echo '<p class="h2">'.$subt.'</p>'; }
        ?>
    </header>
    <?php 
        // print form
        if($form) { echo gravity_form( $form, false, true, false, false, true, false, false ); } 
    ?>
</div>