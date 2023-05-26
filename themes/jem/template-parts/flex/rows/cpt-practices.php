<?php // Flex Template for Practices

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id     = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';
$acc_id = rand( 1, 50000 ); // accordion ID



// content vars
$tf   = get_sub_field('pa_tf');
$pas  = get_sub_field('practices');

if($tf == 1) {
    $term = get_sub_field('pa_tax');

    $tax_query = array( array(
        'taxonomy' => 'category',
        'field' => 'id', //can be set to ID
        'terms' => $term //if field is ID you can reference by cat/term number
    ) );

    $args = array(
        'post_type' => 'practices',
        'posts_per_page' => -1,
        'tax_query' => $tax_query,
    );
    $pas = get_posts($args);
} 


if( $pas ):

?>
<div <?php echo $id; ?> class="flex-faq<?php echo $cl . $pt . $pb . $theme; ?>">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row py-2">
            <?php if( get_sub_field('head_tf') ) { get_template_part('template-parts/flex/rows/partials/flex-header'); } ?>
            <div class="col-12">
                    <?php   
                        // content loop
                        foreach($pas as $post) {
                            setup_postdata($post);
                                get_template_part('template-parts/cards/cptcard', 'practices');
                        }
               
                    ?>
            </div>
        </div>
    </div>
</div>
<?php  wp_reset_postdata(); endif; ?>