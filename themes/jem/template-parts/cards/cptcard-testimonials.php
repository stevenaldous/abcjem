<?php
/**
 * Single Testimonial Card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    $exc = get_field('excerpt');

    

?>
<div class="testimonial-card">
    <div class="tc-inner">
        <div class="name-wrap text-left">
            <?php if($exc): ?>
                <p class="exc h4">"<?php echo $exc; ?>"</p>
            <?php endif; ?>
            <p class="name ms-3">- <?php echo the_title(); ?></p>
        </div>
    </div>
</div>