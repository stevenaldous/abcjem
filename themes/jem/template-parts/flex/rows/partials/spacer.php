<?php  // Flex Template for Super Block Spacer
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';

// content Vars
$style   = get_sub_field('style') ? get_sub_field('style') : 'hr';
$color   = get_sub_field('hr_color') ? ' ' . get_sub_field('hr_color') : ' wtf';



?>

<div class="super-row super-spacer<?php echo $pb . $class; ?>">
    <hr class="<?php echo $style . $color; ?>" >
</div>