<?php
/**
 * Single Award Card
 *
 * @package Understrap
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

    $img    = get_field('logo');
    $l      = get_field('link');
    
    if($l) {
        $lu = $l['url'];
        $lt = $l['title'];
        $lx = $l['target'] ? $l['target'] : '_self';
    }
	
    if($img):
?>


<div class="award-card h-100 d-flex flex-column justify-content-center">
    <?php // if link, wrap in <a>
        if($l): 
    ?>
        <a href="<?php echo esc_url($lu); ?>" target="<?php echo esc_attr($lx); ?>" title="<?php echo esc_html($lt); ?>">
    <?php endif; ?>
        <div class="img-wrap">
            <?php echo wp_get_attachment_image( $img , 'full ' ); ?>
        </div>
    <?php // if link, wrap in <a>
        if($l): 
    ?>
        </a>
    <?php endif; ?>
</div>

<?php endif; ?>