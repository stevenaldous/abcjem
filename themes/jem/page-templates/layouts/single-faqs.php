<?php
/**
 * Single FAQ Layout
 *
 * @package Understrap
 * 
 * 
 * 
 *  This built from the Bootstrap Accordion: https://getbootstrap.com/docs/5.2/components/accordion/
 *
 *  add 'accordion-flush' to make seamless
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

$answer = get_field('answer');
?>
<div class="<?php echo esc_attr( $container ); ?> faq mb-5">
    <div class="row">
        <div class="col-12">
            <div class="text-wrap"><?php echo $answer; ?></div>  
        </div>
    </div>
</div>
