<?php // Flex Template for Form
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// global form vars
$gft1	= get_field('gf_t1','options');
$gft2	= get_field('gf_t2','options');
$gfid 	= get_field('gf_fid', 'options');

?>
<div class="row sb-form mb-5">
    <div class="col-12">
        <div class="form-wrap bg-jem1 px-5 py-4">
            <?php 
                if( $gft1 || $gft2) { echo '<p class="ft h3 text-uppercase">'.$gft1.'<span class="d-block">'.$gft2.'</span></p>'; }
                echo gravity_form( $gfid, false, true, false, false, true, false, false ); 
            ?>
        </div>
    </div>
</div>