<?php  // Flex Template for Super Block - Video

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//layout/options vars
$align  = ' text-' . get_sub_field('align');
$pb     = get_sub_field('b_pad') ? ' pb-'.get_sub_field('b_pad') : '';
$class  = get_sub_field('class') ? ' ' . get_sub_field('class') : '';
$mw_lg  = get_sub_field('mw_lg') ? ' mw-lg-'. get_sub_field('mw_lg') : '';

// content vars
$video  = get_sub_field('video');
$rat    = get_sub_field('ratio') ?: '16x9';
$cap    = get_sub_field('cap');

//title
$t = get_sub_field('title');

if($t) {
    $st = get_sub_field('style') ? ' flair' : '';
}

// video 

if($video):

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $video, $matches);
    $src = $matches[1];
    
    // Add extra parameters to src and replace HTML.
    $params = array(
        'controls'  => 1,
        'hd'        => 1,
        'autohide'  => 1,
        'title'     => 'MY TITLE: '.$t,
    );
    
    $new_src = add_query_arg($params, $src);
    $video = str_replace($src, $new_src, $video);
    
    // Add extra attributes to iframe HTML.
    $attributes = 'frameborder="0"';
    $video = str_replace('></iframe>', ' ' . $attributes . '"></iframe>', $video);
?>
<div class="super-row super-vid<?php echo $align . $pb . $class; ?>" >
    <div class="media-outer<?php echo $mw_lg; ?>">
        <?php 
            // display video and ratio wrapper
            echo '<div class="ratio ratio-'. $rat .'">'.$video.'</div>'; 
    
            // if caption, display
            if($cap) { echo '<div class="text-wrap"><p class="caption mt-2">'.  $cap .'</p></div>'; } 
        ?>
    </div>
</div>
<?php endif; ?>