<?php // Flex Template for the SUPER Block. This will use a template system to support up to two columns 
      // with an array of content types to build the majority of jem site pages

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';

// layout vars
$align  = ' text-' . get_sub_field('align');
$w1     = get_sub_field('col_w') ? ' col-lg-'.get_sub_field('col_w') : ' col-lg';
$w2     = ' col-lg';

$rep    = 'super_rep';
$ct     = count( get_sub_field( 'super_rep' ) );

if( have_rows($rep) ):

    
?>
<div <?php echo $id; ?> class="flex-super<?php echo $cl . $pt . $pb . $theme; ?>">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <?php if( get_sub_field('head_tf') ) { get_template_part('template-parts/flex/rows/partials/flex-header'); } // section Header ?>
            <?php while( have_rows($rep) ): the_row(); 
                if( $ct > 1 ) {
                    $w = get_row_index() == 1 ?  $w1 : $w2;
                }
            ?>
            <div class="col-12 <?php echo $w; ?>">
                <?php get_template_part('template-parts/flex/flex-controller-super'); ?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php endif; ?>