<?php
/**
 * Hero - Page
 *
 * @package Understrap
 * 
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// template Vars
$sh     = get_field( 'sem_hx' ) ? get_field( 'sem_hx' ) : 'h1';
$vh     = get_field( 'vis_hx' ) ? get_field( 'vis_hx' ) : 'h1';
$t      = get_field( 'title' ) ? get_field( 'title' ) : get_the_title();
$subt   = get_field( 'subt' );
$img    = get_field( 'img' );

?>
<?php if( $img ): ?>
    <div class="hero hero-home bg-img pt-5 pb-3" style="background-image: url('<?php echo $img; ?>');">
        <div class="abs-cover overlay"></div>
<?php else: ?>
    <div class="hero hero-home bg-jem1 pt-5 pb-3">
<?php endif; ?>
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-12 mt-5 pt-5">
                <header class="p-4">
                    <?php
                        // print title w/options
                        echo '<' . $sh . ' class="' . $vh . '">' . $t . '</' . $sh . '>'; 
                        // print Subtitle if present
                        if($subt) { echo '<p class="subt">'. $subt . '</p>'; };
                    ?>
                </header>
            </div>
        </div>
    </div>
</div>