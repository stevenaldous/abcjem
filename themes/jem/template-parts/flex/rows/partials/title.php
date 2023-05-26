<?php  // Flex Template for Super Block Title

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' text-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$st     = get_sub_field('style') ? ' flair' : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';

// content Vars
$sh     = get_sub_field('sem_hx') ? get_sub_field('sem_hx') : 'h3';
$vh     = get_sub_field('vis_hx') ? get_sub_field('vis_hx') : 'h3';
$t      = get_sub_field('title');



?>

<div class="super-row super-title<?php echo $align . $pb . $class; ?>">
    <?php echo '<' . $sh . ' class="' . $vh . $st .'">' . $t . '</' . $sh . '>'; ?>
</div>