<?php
/**
 * The template for displaying the footer location and logo
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//site-info vars
$copyr 	= get_field('copyr', 'options');
$links	= get_field('copy_rep', 'options');

// Main footer vars
$ctry 	= get_field('pho_ctry','options');
$pho 	= get_field('pho','options');
$ema 	= get_field('email','options' );

?>
<div class="add-wrap mt-3">
    <?php echo main_address('block' ); ?>
</div>
<div class="pho-wrap">
    <p>P:&nbsp;<?php echo phone( $ctry, $pho, '' ); ?></p>
</div>
<div class="em-wrap">
    <?php echo email($ema); ?>
</div>