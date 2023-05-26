<?php  // Template for optional Flex section Header

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$header = get_sub_field('flex_header');

if($header):

//layout/options vars
$align  = ' text-' . $header['align'];
$st     = $header['style'] ? ' flair' : '';

// content Vars
$t      = $header['title'];
$sh     = $header['sem_hx'] ?: 'h2';
$vh     = $header['vis_hx'] ?: 'h2';

?>
    <div class="col-12 mb-4 <?php echo $align; ?>">
        <?php echo '<' . $sh . ' class="' . $vh . $st .'">' . $t . '</' . $sh . '>'; ?> 
    </div>
<?php endif; ?>