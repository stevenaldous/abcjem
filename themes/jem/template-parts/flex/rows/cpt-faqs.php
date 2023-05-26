<?php // Flex Template for FAQ Block

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get site container width
$container = get_theme_mod( 'understrap_container_type' );

// Load spacing/class options
include( locate_template( 'template-parts/flex/flex-options.php', false, false ) );

// options - id
$id     = get_sub_field('id') ? 'id="'. get_sub_field('id') .'" ' : '';
$acc_id = rand( 1, 50000 ); // accordion ID



// faq type
$type = get_sub_field('faq_type');
if($type == 1) {
    $open   = '<div class="accordion" id="faqAccordion' . $acc_id .'">';
    $close  = '</div>';
}
else {
    $open   = '<ul class="">';
    $close  = '</ul>';
}

// content vars
$tf   = get_sub_field('faq_tf');
$faqs = get_sub_field('faq');
if($tf == 1) {
    $term = get_sub_field('faq_tax');
    $tax_query = array( array(
        'taxonomy' => 'faqs_cat',
        'field' => 'id', //can be set to ID
        'terms' => $term //if field is ID you can reference by cat/term number
    ) );

    $args = array(
        'post_type' => 'faqs',
        'posts_per_page' => -1,
        'tax_query' => $tax_query,
    );
    $faqs = get_posts($args);
} 


if( $faqs ):

?>
<div <?php echo $id; ?> class="flex-faq<?php echo $cl . $pt . $pb . $theme; ?>">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row py-2">
            <?php if( get_sub_field('head_tf') ) { get_template_part('template-parts/flex/rows/partials/flex-header'); } ?>
            <div class="col-12">
                    <?php   
                        //wrapping element
                        echo $open;

                        // content loop
                        foreach($faqs as $post) {
                            setup_postdata($post);

                            if( $type == 1 ) {
                                get_template_part('template-parts/cards/cptcard', 'faq', array('acc_id' => $acc_id)); 
                            }
                            else {
                                echo '<li><a href="'.get_the_permalink().'" class="faq-link">'.get_the_title().'</a></li>';
                            }   
                        }
                        echo $close;
                    ?>
            </div>
        </div>
    </div>
</div>
<?php  wp_reset_postdata(); endif; ?>