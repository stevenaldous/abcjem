<?php
/**
 * Single Cases Output/card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    $e = get_field('excerpt');
    $a = get_field('awarded');

?>
<div class="cases-card bg-light rounded px-4 py-5 h-100">
    <!-- <a href="<?php the_permalink(); ?>" class="tc-inner"> -->
        <div class="case-wrap text-center py-5">
            <?php if($a): ?>
                <p class="award h2 mb-4"><?php echo $a; ?></p>
            <?php endif; ?>
            <?php if($e): ?>
            
                <p class="exc"><?php echo esc_html($e); ?></p>
            <?php endif; ?>


        </div>
    <!-- </a> -->
</div>