<?php // Flex Template for Video + Text Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// template vars
$cap    = get_sub_field('cap');
$cap2   = get_sub_field('cap_2');
$vid    = get_sub_field('vid');

if($vid):
?>

<div class="row sb-video mb-5">
    <div class="col-12">
        <?php 
            if( $cap || $cap2 ){ 
                echo '<div class="cap-wrap"><p class="mb-3 f1-reg c-jem1 text-capitalize">'; // open caption wrap
                    if($cap){ echo $cap; } // print cap 1 and wrap in span for diff css
                    if($cap2){ echo '<span class="ms-2 f1-bold text-uppercase c-jem2">'.$cap2.'</span>'; } // print cap 1 and wrap in span for diff css
                echo '</p></div>'; // close caption wrap
            }
        ?>
        <div class="vid-wrap ratio ratio-16x9">
            <?php echo $vid; ?>
        </div>
    </div>
</div>
<?php endif; ?>