<?php  // Flex Template for Super Block - Text editor

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' text-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$st     = get_sub_field('style') ? ' flair' : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';

// content Vars

$text    = get_sub_field('text');
$size    = get_sub_field('size') ? ' font-lg' : '';
$cols    = get_sub_field('cols') ? ' two-col' : '';

?>

<div class="super-row super-text<?php echo $align . $pb . $class; ?>">
    <?php echo '<div class="text-wrap'. $size . $cols .'">'.$text.'</div>'; ?>
</div>