<?php  // Flex Template for Super Block - Form

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' justify-content-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$st     = get_sub_field('style') ? ' flair' : '';
$bg     = get_sub_field('bg') ?: 'bg-jem';
$tf     = get_sub_field('tf');
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';
$mw_lg  = get_sub_field('mw_lg') ? ' mw-lg-'. get_sub_field('mw_lg') : '';


// content Vars
$form   = get_sub_field('form');

// title vars(optional)
if($tf == 1) {
    $sh     = get_sub_field('sem_hx') ? get_sub_field('sem_hx') : 'h2';
    $vh     = get_sub_field('vis_hx') ? get_sub_field('vis_hx') : 'h2';
    $style  = get_sub_field('style') ? ' flair' : '';
    $talign = get_sub_field('text_align') ? ' text-' . get_sub_field('text_align') : '';
    $t      = get_sub_field('title') ?: '';
    $subt   = get_sub_field('subt');

}

?>

<div class="super-row super-form d-flex <?php echo $align . $pb . $class; ?>">
    <div class="form-wrap rounded p-5 box-shadow <?php echo $bg . $mw_lg . $talign; ?>">
        <?php 
            // if title, fill out
            if( $tf ) {
                echo '<div class="title-wrap'.$style.'">';

                    if($t) { echo '<'.$sh.' class="'.$vh.'">'.$t.'</'.$sh.'>';}

                    if($subt) { echo '<p class="subt">'.$subt.'</p>'; }
                
                echo '</div>';
            }
            // print out gravity form
            echo gravity_form( $form, false, true, false, false, true, false, false ); ?>
    </div>
</div>