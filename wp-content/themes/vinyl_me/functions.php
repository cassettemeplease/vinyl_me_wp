<?php

  //thumbnails

  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }


add_theme_support( 'post-thumbnails' ); 

//main nav

register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );
register_nav_menu( 'footer1', __( 'Footer navigation 1', 'mytheme' ) );
register_nav_menu( 'footer2', __( 'Footer navigation 2', 'mytheme' ) );
register_nav_menu( 'footer3', __( 'Footer navigation 3', 'mytheme' ) );
register_nav_menu( 'footer4', __( 'Footer navigation 4', 'mytheme' ) );





//create post types

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {

    register_post_type( 'record-of-the-month',
        array(
            'labels' => array(
                'name' => __( 'Record of the Month' ),
                'singular_name' => __( 'records' )
            ),
            'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
            'public' => true,
        )
    );
    register_post_type( 'the-standard',
            array(
                'labels' => array(
                    'name' => __( 'The Standard' ),
                    'singular_name' => __( 'issues' )
                ),
                'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
                'public' => true,
                'has_archive' => true,
            )
        );
        register_post_type( 'friends-family',
            array(
                'labels' => array(
                    'name' => __( 'Friends & Family' ),
                    'singular_name' => __( 'Friends' )
                ),
                'supports' => array( 'title', 'editor', 'thumbnail' ),
                'public' => true,
            )
        );
}

function custom_type_archive_display($query) {
    if (is_post_type_archive('custom_type')) {
        $query->set('posts_per_page',1);
        return;
    }
}

add_action('pre_get_posts', 'custom_type_archive_display');


// Remove "Protected" from Password Protected Posts
function the_title_trim($title) {
    $title = attribute_escape($title);
    $findthese = array(
        '#Protected:#',
        '#Private:#'
    );
    $replacewith = array(
        '', // What to replace "Protected:" with
        '' // What to replace "Private:" with
    );
    $title = preg_replace($findthese, $replacewith, $title);
    return $title;
}
add_filter('the_title', 'the_title_trim');


?>
