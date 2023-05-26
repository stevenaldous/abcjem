<?php // Flex Template for CTA Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// content vars
$align  = ' text-' . get_sub_field('align');
$sh     = get_sub_field('sem_hx') ? get_sub_field('sem_hx') : 'h2';
$vh     = get_sub_field('vis_hx') ? get_sub_field('vis_hx') : 'h2';
$t      = get_sub_field('title');
$txt    = get_sub_field('text');
$l      = get_sub_field('link');

if($l) {
    $lu = $l['url'];
    $lt = $l['title'];
    $lx = $l['target'] ? $l['target'] : '_self';
}

// inner spacing vars
    // spacing - top padding
    $ipt = ' pt-' . get_sub_field('it_pad');
    $iptt = get_sub_field('it_pad_t') ? ' pt-md-' . get_sub_field('it_pad_t') : '';
    $iptd = get_sub_field('it_pad_d') ? ' pt-xl-' . get_sub_field('it_pad_d') : '';
    $ipt = $ipt . $iptt . $iptd;

    // spacing - bottom padding
    $ipb = ' pb-' . get_sub_field('ib_pad');
    $ipbt = get_sub_field('ib_pad_t') ? ' pb-md-' . get_sub_field('ib_pad_t') : '';
    $ipbd = get_sub_field('ib_pad_d') ? ' pb-xl-' . get_sub_field('ib_pad_d') : '';
    $ipb = $ipb . $ipbt . $ipbd;

    
?>
<div <?php echo $id; ?> class="flex-cta <?php echo $cl . $pt . $pb . $theme ?>">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-12<?php echo $align . $ipt . $ipb ?>">
                <?php 
                    // print title
                    echo '<' . $sh . ' class="title ' . $vh . '">' . $t . '</' . $sh . '>'; 
                
                    // check for text content and display 
                    if($txt){ echo '<div class="txt-wrap mb-4">'. $txt .'</div>'; }
                    
                    // check for link content and display 
                    if($l):
                ?>
                    <a class="btn btn-secondary" href="<?php echo esc_url($lu); ?>" target="<?php echo esc_attr($lx); ?>" ><?php echo esc_html($lt); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>