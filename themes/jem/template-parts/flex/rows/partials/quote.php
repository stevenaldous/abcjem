<?php  // Flex Template for Super Block - Quote/Slogan?
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' justify-content-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$st     = get_sub_field('style') ? ' flair' : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';
$mw_lg  = get_sub_field('mw_lg') ? ' mw-lg-'. get_sub_field('mw_lg') : '';
$bg     = get_sub_field('bg') ?: 'bg-jem1';


// content Vars
$text    = get_sub_field('text');
$cite    = get_sub_field('source');

?>

<div class="super-row super-quote d-flex<?php echo $align . $pb . $class; ?>">
    <blockquote class="p-5 rounded <?php echo $bg . $mw_lg; ?>" >
        <?php 
            if($text) { echo '<div class="text-wrap font-lg"><i class="fa-sharp fa-regular fa-quote-left" aria-hidden="true"></i>'.$text.'</div>'; }
            if($cite) { echo '<cite class="d-block mt-4">- '.$cite.'</cite>'; } 
        ?>
    </blockquote>
</div>