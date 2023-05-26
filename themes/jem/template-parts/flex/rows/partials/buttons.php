<?php  // Flex Template for Super Button(s)

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' justify-content-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$st     = get_sub_field('style') ? ' flair' : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';

// content Vars
$w      = get_sub_field('width');
$wc     = 'btn-' . $w;
$mw     = get_sub_field('max_width') && $w == 'max' ? 'style="max-width: ' . get_sub_field('max_width') . 'px;"' : '' ;

$rep    = 'btn_rep';

$btn_ct = ' btns-'. count( get_sub_field($rep) );

?>

<div class="super-row super-btns d-flex flex-column flex-md-row flex-wrap align-items-center <?php echo $align . $pb . $class; ?>">
    <?php // loop through and display btns 
        if( have_rows( $rep ) ){
            while(  have_rows( $rep ) ){
                the_row();
                // get button
                $l = get_sub_field('link');

                if($l) {
                    // get btn array vars
                    $lu = $l['url'];
                    $lt = $l['title'];
                    $lx = $l['target'] ? $l['target'] : '_self';

                    // print btn
                    echo '<a href="'.$lu.'" class="btn btn-primary '. $wc .'" target="'.$lx.'" '.$mw.'>'.$lt.'</a>';
                }
            }
        }
    ?>
</div>