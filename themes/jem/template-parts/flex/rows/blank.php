<?php // Flex Template for BLANK Block

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

    
?>
<div <?php echo $id; ?> class="<?php echo esc_attr( $container ); ?> flex-blank<?php echo $cl . $pt . $pb; ?>">
    <div class="row">
        <div class="col-12 ">
           
        </div>
    </div>
</div>