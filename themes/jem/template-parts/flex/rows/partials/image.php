<?php  // Flex Template for Super Block - Video

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' text-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';
$mw_lg  = get_sub_field('mw_lg') ? ' mw-lg-'. get_sub_field('mw_lg') : '';


// content vars
$img    = get_sub_field('image');
$iw     = 'img-wrap'; // class for image wrap. To be manipulated if Ratio is selected
$rat    = get_sub_field('ratio');
$cap    = get_sub_field('cap');
$tf     = get_sub_field('l_tf');
$l      = get_sub_field('link');

if($l) {
    $lu = $l['url'];
    $lt = $l['title'];
    $lx = $l['target'] ? $l['target'] : '_self';
}
?>

<div class="super-row super-img<?php echo $align . $pb . $class; ?>" >
    <div class="media-outer<?php echo $mw_lg; ?>">
        <?php 
            // if link tf & link, wrap image in link
            if($tf && $l){ echo '<a class="img-link" href="'.$lu.'" target="'.$lx.'" title="'.$lt.'">'; }

                // if ratio is selected, apply ratio to image
                if($rat) { 
                    echo '<div class="ratio ratio-'. $rat .'"><div class="ratio-inner">'; 
                    $iw     = 'img-wrap obj'; // update image wrap class to support ratio
                } 
            
                    // print img with img-wrap class
                    if($img) { echo '<div class="'.$iw.'">'. wp_get_attachment_image( $img , 'full' ).'</div>'; }
                        
                // if ratio is selected, close ratio
                if($rat) { echo '</div></div>'; } 

        
            // if link tf & link, close link
            if($tf && $l) { echo '</a>'; }
            
            // if caption, display
            if($cap) { echo '<div class="text-wrap"><p class="caption mt-2">'.  $cap .'</p></div>'; } 
        ?>
    </div>
</div>