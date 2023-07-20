<?php

// Header Menu
register_nav_menus(
    array('primary-menu' => 'Header Menu'),
);

register_nav_menus(
    array('secondary-menu' => 'Right Menu')
);

// Footer Widgets
function katich_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'katich'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'katich'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'katich'),
        'id'            => 'footer-2',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'katich'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'katich'),
        'id'            => 'footer-3',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'katich'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 4', 'katich'),
        'id'            => 'footer-4',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'katich'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 5', 'katich'),
        'id'            => 'footer-5',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'katich'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'katich_widgets_init');


add_theme_support('post-thumbnails');
add_theme_support('custom-header');


// Enqueue Katich Scripts
function katich_enqueue_style()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', '1.0', 'all');
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/js/slick/slick.css', '1.0', 'all');
    // wp_enqueue_style('style', get_stylesheet_directory_uri() . '/woocommerce/css/woocommerce.css', '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'katich_enqueue_style');

function katich_enqueue_script()
{
    wp_enqueue_script('myscript', get_template_directory_uri() . '/js/functions.js', array('jquery'), '', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/slick/slick.js', '1.0', 'all', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/slick/slick.min.js', '1.0', 'all', true);
}
add_action('wp_enqueue_scripts', 'katich_enqueue_script');


// Top Slider Menu
function create_top_slider_post_type()
{
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
        'rewrite' => array('slug' => 'slider'),
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('slider', $args1);
}
add_action('init', 'create_top_slider_post_type');

function top_slider_shortcode($atts)
{
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('top-slider', 'top_slider_shortcode');

// Bottom Slider Menu
function create_bottom_slider_post_type()
{
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
        'rewrite' => array('slug' => 'slider2'),
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('slider2', $args2);
}
add_action('init', 'create_bottom_slider_post_type');

function bottom_slider_shortcode($atts)
{
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('bottom-slider', 'bottom_slider_shortcode');


//WooCommerce Theme Support
function katich_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'katich_woocommerce_support');

function custom_account_menu_items($items)
{
    // Replace "view-order" with your desired endpoint name
    $items['orders'] = __('Orders', 'katich');
    return $items;
}
add_filter('woocommerce_account_menu_items', 'custom_account_menu_items');


// add_action(
//     'woocommerce_before_quantity_input_field',
//     function () {
//         if (get_theme_mod('has_custom_quantity', 'yes') !== 'yes') {
//             return;
//         }

//         echo '<span class="ct-increase"></span>';
//         echo '<span class="ct-decrease"></span>';
//     }
// );
