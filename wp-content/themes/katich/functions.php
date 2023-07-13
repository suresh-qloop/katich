<?php

register_nav_menus(
    array('primary-menu' => 'Header Menu')
);


add_theme_support('post-thumbnails');
add_theme_support('custom-header');


// Top Slider Menu
function create_top_slider_post_type() {
    $labels1 = array(
        'name' => 'Top Slider',
        'singular_name' => 'Top Slider',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Top Slider',
        'edit_item' => 'Edit Top Slider',
        'new_item' => 'New Top Slider',
        'view_item' => 'View Top Slider',
        'search_items' => 'Search Top Slider',
        'not_found' => 'No sliders found',
        'not_found_in_trash' => 'No sliders found in Trash',
        'parent_item_colon' => 'Parent Slider:',
        'menu_name' => 'Top Slider',
    );

    $args1 = array(
        'labels' => $labels1,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'slider' ),
        'capability_type' => 'post',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'slider', $args1 );
}
add_action( 'init', 'create_top_slider_post_type' );

function top_slider_shortcode($atts) {
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('top-slider', 'top_slider_shortcode');

// Bottom Slider Menu
function create_bottom_slider_post_type(){
    $labels2 = array(
        'name' => 'Bottom Slider',
        'singular_name' => 'Bottom Slider',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Bottom Slider',
        'edit_item' => 'Edit Bottom Slider',
        'new_item' => 'New Bottom Slider',
        'view_item' => 'View Bottom Slider',
        'search_items' => 'Search Bottom Slider',
        'not_found' => 'No sliders found',
        'not_found_in_trash' => 'No sliders found in Trash',
        'parent_item_colon' => 'Parent Slider2:',
        'menu_name' => 'Bottom Slider',
    );

    $args2 = array(
        'labels' => $labels2,
        'public' => true,
        'has_achive' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-images-alt',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'slider2' ),
        'capability_type' => 'post',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'slider2', $args2 );
}
add_action( 'init', 'create_bottom_slider_post_type' );

function bottom_slider_shortcode($atts) {
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('bottom-slider', 'bottom_slider_shortcode');
//sample comment
?>