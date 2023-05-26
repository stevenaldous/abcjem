<?php
/**
 * The template for displaying the header Phone Button
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 
 // vars
$hpt1 = get_field('hp_txt1','options');
$hpt2 = get_field('hp_txt2','options');
$hptb = get_field('hp_txtb','options');

$ctry 	= get_field('pho_ctry','options');
$pho 	= get_field('pho','options');
?>
<div class="phone-cta order-lg-1 ps-lg-3">
    <a href="tel:+<?php echo $ctry . $pho; ?>" aria-label="Call Us" class="btn btn-primary btn-pho d-flex flex-column justify-content-center">
        <?php 
            // check for text
            if($hptb) { echo '<span class="mb-0 d-none d-lg-block">' . $hptb . '</span>'; } 

            // print phone number
            echo '<span class="d-none d-md-block">' . phone( $ctry, $pho, 'text' ) . '</span>'; 
        ?>
        <i class="fa-regular fa-phone d-md-none" aria-hidden="true"></i>
    </a>
</div>