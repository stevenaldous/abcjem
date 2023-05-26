<?php
/**
 * Single Practice Area Output/card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<div class="practice-card">
    <a href="<?php the_permalink(); ?>" class="tc-inner">
        <div class="name-wrap text-left">
            <p class="name h3"><?php echo the_title(); ?></p>
        </div>
    </a>
</div>