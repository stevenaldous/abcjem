<?php // Flex Template for Location

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id         = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// content vars
$type       = get_sub_field('type');
$tf         = get_sub_field('tf');
$align      = ' text-' . get_sub_field('align');
$sh         = get_sub_field('sem_hx') ? get_sub_field('sem_hx') : 'h2';
$vh         = get_sub_field('vis_hx') ? get_sub_field('vis_hx') : 'h2';
$rat        = get_sub_field('ratio');

// Setup Location content - If from Location CPT
if( $type && $tf ) {
    $post = get_sub_field('locations');

    if( $post ){
        setup_postdata( $post );

        $t      = get_the_title();
        $txt    = get_field('content');
        $img    = get_field('image');
        $ctry   = get_field('pho_code') ? get_field('pho_code') : '1';
        $pho    = get_field('phone');
        $adr    = loc_address('block');
        $murl   = get_field('map_url');

        // use loc post data for title, text, img
        if( $tf ) {
            $t      = get_the_title();
            $txt    = get_field('content');
            $img    = get_field('image');
            wp_reset_postdata();
        }
        // use entered data for title, text, img
        else {
            wp_reset_postdata();
            $t      = get_sub_field('title');
            $txt    = '<p>'.get_sub_field('text').'</p>';
            $img    = get_sub_field('image');
        }       
    }
} 
// if using theme settings location info
else {
    $t      = get_sub_field('title');
    $txt    = get_sub_field('text');
    $img    = get_sub_field('image');
    $ctry 	= get_field('pho_ctry','options');
    $pho 	= get_field('pho','options');
    $adr    = main_address('block' );
    $murl   = get_field('map_url', 'options');
}
    
?>
<div <?php echo $id; ?> class="<?php echo esc_attr( $container ); ?> flex-location<?php echo $cl . $pt . $pb; ?>">
    <?php if( $t ): ?>
        <div class="row">
            <div class="col-12">
                <?php echo '<' . $sh . ' class="' . $vh . '">' . $t . '</' . $sh . '>'; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-md-7">
            <?php 
                // check for and print text
                if( $txt ){ echo '<div class="txt-wrap">'.$txt.'</div>'; } 
            
                // check for content and print out 'phone' if it exists
                if($pho): 
            ?>
                <div class="pho-wrap">
                    <p class="pho h2">P:&nbsp;<?php echo phone( $ctry, $pho, '' ); ?></p>
                </div>
            <?php endif; ?>

            <?php // check for content and print out 'address' if it exists
                if($adr): 
            ?>
                <div class="add-wrap">
                    <?php echo $adr; ?>
                </div>
                <?php if($murl): ?>
                    <a href="<?php echo esc_url( $murl ); ?>" target="_blank">Get Directions</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="col">

            <?php // if ratio is selected, apply ratio to image
                if($rat): 
            ?>
                <div class="ratio ratio-<?php echo $rat; ?>">
                    <div class="ratio-inner">
            <?php endif; ?>

                <div class="img-wrap<?php if($rat) { echo ' obj'; }; ?>">
                    <?php if($img) {
                        echo wp_get_attachment_image( $img , 'full' );
                    } ?>
                </div>

            <?php // if ratio is selected, close ratio
                if($rat): 
            ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>