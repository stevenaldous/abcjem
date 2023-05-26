<?php //this sheet holds the WP Functions settings for this project.

//////////////////////////////////////////////////////////////////////////
/// ** Change Default template to the FLEX FIELDS **
///////////////////////////////////////////////////////////////////////////
function mb_default_page_template() {
    global $post;
    if ( 'page' == $post->post_type 
        && 0 != count( get_page_templates( $post ) ) 
        && get_option( 'page_for_posts' ) != $post->ID // Not the page for listing posts
        && '' == $post->page_template // Only when page_template is not set
    ) {
        $post->page_template = "page-templates/flex.php";
    }
}
// add_action('add_meta_boxes', 'mb_default_page_template', 1);




//////////////////////////////////////////////////////////////////////////
/// ** Disable Child theme templates from editor **
///////////////////////////////////////////////////////////////////////////
add_filter( 'theme_page_templates', 'child_theme_remove_page_template' );
/**
* Remove page templates inherited from the parent theme.
*
* @param array $page_templates List of currently active page templates.
*
* @return array Modified list of page templates.
*/
function child_theme_remove_page_template( $page_templates ) {
    // Remove the template we don’t need.
    unset( $page_templates['page-templates/blank.php'] );
    unset( $page_templates['page-templates/empty.php'] );
    unset( $page_templates['page-templates/both-sidebarspage.php'] );
    unset( $page_templates['page-templates/fullwidthpage.php'] );
    unset( $page_templates['page-templates/left-sidebarpage.php'] );
    unset( $page_templates['page-templates/right-sidebarpage.php'] );
    return $page_templates;
}


//////////////////////////////////////////////////////////////////////////
// ** Rename Default Template **
//////////////////////////////////////////////////////////////////////////
// add_filter('default_page_template_title', function() {
//     return __('WP Default (do not use)', 'your_text_domain');
// });




//////////////////////////////////////////////////////////////////////////
/// ** Main Address Format **
///////////////////////////////////////////////////////////////////////////
function main_address( $style ) {
    $str = get_field('main_str','options');
    $str2 = get_field('main_str2','options');
    $cit = get_field('main_city','options');
    $sta = get_field('main_state','options');
    $zip = get_field('main_zip','options');

    if( $style == 'inline' ) {
        if( $str2 ) {
            $str2 = $str2 . ', ';
        }
        return  '<address class="mb-2">'.
                    '<p class="mb-0">'.
                        $str.', '. $str2 .
                        $cit.', '.
                        $sta.' '.
                        $zip.
                    '</p>'.
                '</address>';
    } 
    else {
        if( $str2 ) {
            $str2 = '<p class="mb-0">'.$str2.'</p>';
        }
        return  '<address>'.
                    '<p class="mb-0">'.$str.'</p>'.$str2.
                    '<p>'.
                        $cit.', '.
                        $sta.' '.
                        $zip.
                    '</p>'.
                '</address>';
    }
}

//////////////////////////////////////////////////////////////////////////
/// ** CPT: Location Address Format **
///////////////////////////////////////////////////////////////////////////
function loc_address( $style ) {

    $str = get_field('str');
    $str2 = get_field('str2');
    $cit = get_field('city');
    $sta = get_field('state');
    $zip = get_field('zip');

    if( $style == 'inline' ) {
        if( $str2 ) {
            $str2 = $str2 . ', ';
        }
        return  '<address class="mb-2">'.
                    '<p class="mb-0">'.
                        $str.', '. $str2 .
                        $cit.', '.
                        $sta.' '.
                        $zip.
                    '</p>'.
                '</address>';
    } 
    else {
        if( $str2 ) {
            $str2 = '<p class="mb-0">'.$str2.'</p>';
        }
        return  '<address>'.
                    '<p class="mb-0">'.$str.'</p>'.$str2.
                    '<p class="mb-0">'.
                        $cit.', '.
                        $sta.' '.
                        $zip.
                    '</p>'.
                '</address>';
    }
}

//////////////////////////////////////////////////////////////////////////
/// ** Phone Format **
///////////////////////////////////////////////////////////////////////////
function phone( $ctry, $pho, $style ) {
    if( $style == 'dots' ) {
        return '<a class="pho" href="tel:+'.$ctry.$pho.'">'.
        substr($pho, 0, 3 ).
        '.'.
        substr($pho, 3, 3 ).
        '.'.
        substr($pho, 6, 4 ).
        '</a>';
    }
    if( $style == 'dashes' ) {
        return '<a class="pho" href="tel:+'.$ctry.$pho.'">'.
        substr($pho, 0, 3 ).
        '-'.
        substr($pho, 3, 3 ).
        '-'.
        substr($pho, 6, 4 ).
        '</a>';
    }
    if( $style == 'textDots' ) {
        return substr($pho, 0, 3 ).'.'.
        substr($pho, 3, 3 ).'.'.
        substr($pho, 6, 4 );
    }
    if( $style == 'text' ) {
        return '('.substr($pho, 0, 3 ).') '.
        substr($pho, 3, 3 ).'-'.
        substr($pho, 6, 4 );
    }
    if( $style == 'btn' ) {
        return '<a class="pho btn btn-primary" href="tel:+'.$ctry.$pho.'"><i class="fa-solid fa-phone-flip" aria-hidden="true"></i>'.
        substr($pho, 0, 3 ).
        '.'.
        substr($pho, 3, 3 ).
        '.'.
        substr($pho, 6, 4 ).
        '</a>';
    }
    else {
        return '<a class="pho" href="tel:+'.$ctry.$pho.'">('.
            substr($pho, 0, 3 ).
            ') '.
            substr($pho, 3, 3 ).
            '-'.
            substr($pho, 6, 4 ).
            '</a>';
    }
};

//////////////////////////////////////////////////////////////////////////
/// ** Phone Button **
///////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
/// ** Email Format **
///////////////////////////////////////////////////////////////////////////
function email( $ema ) {
    return '<a class="ema" href="mailto:'.$ema.'">'.$ema.'</a>';
};

//////////////////////////////////////////////////////////////////////////
/// ** Move Yoast to bottom of editor **
///////////////////////////////////////////////////////////////////////////
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');



//////////////////////////////////////////////////////////////////////////
/// ** Remove COMMENTS in its entirety **
///////////////////////////////////////////////////////////////////////////
// Removes from admin menu
add_action( 'admin_menu', 'jem_remove_admin_menus' );
function jem_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

// Removes from post and pages
add_action('init', 'jem_remove_comment_support', 100);
function jem_remove_comment_support() {
   remove_post_type_support( 'post', 'comments' );
   remove_post_type_support( 'page', 'comments' );
}

// Removes from admin bar
add_action( 'wp_before_admin_bar_render', 'jem_remove_comments_admin_bar' );
function jem_remove_comments_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}


//////////////////////////////////////////////////////////////////////////
/// ** Read More Excerpt **
///////////////////////////////////////////////////////////////////////////
function new_excerpt_more($more) {
	global $post;
 	return '<a class="more-link" href="'. get_permalink($post->ID) . '"> Read more<span class="sr-only"> about '.get_the_title($post->ID).'</span></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



///////////////////////////////////////////////////////////////////////////
/// ** Remove Posts if not needed **
///////////////////////////////////////////////////////////////////////////
if( ! get_field('gcpt_posts', 'options') ) {
    // Remove default Post content type from WordPress

    add_action('admin_menu','remove_posts_type' );
    add_action('admin_bar_menu','remove_posts_from_menu', 9999);
    add_action('wp_dashboard_setup', 'remove_posts_quickdraft', 9999);

    function remove_posts_type() { // Remove post type links
    remove_menu_page('edit.php');
    }
    function remove_posts_quickdraft(){ // Remove "quick drafts" post from dashboard
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); 
    }
    function remove_posts_from_menu( $wp_admin_bar ) { // Remove "New post" links
    $wp_admin_bar->remove_node('new-post');
    }
}


///////////////////////////////////////////////////////////////////////////
/// ** Add animation class to header logo on home page only **
///////////////////////////////////////////////////////////////////////////
// add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {
    if( is_front_page() ) {
        $html = str_replace( 'custom-logo-link', 'custom-logo-link animate__animated animate__fadeInDown', $html );
    }

    return $html;
}


///////////////////////////////////////////////////////////////////////////
/// ** Map embed **
///////////////////////////////////////////////////////////////////////////
function map_embed() {
    // Load value.
    $iframe = get_field('map_embed', 'options');

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $iframe, $matches);

    $src = $matches[1];

    // Add extra parameters to src and replace HTML.
    $params = array(
        // 'controls'  => 0,
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);

    // Add extra attributes to iframe HTML.
    $attributes = 'frameborder="0"';
    $class      = 'class="riddle-map"';
    $iframe = str_replace('></iframe>', ' ' . $attributes . $class .'></iframe>', $iframe);

    // Display customized HTML.
    return $iframe;
}