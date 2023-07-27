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

// info-section
function info_section()
{
    $labels3 = array(
        'name' => 'Info Section',
        'singular_name' => 'Info Section',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Info Section',
        'edit_item' => 'Edit Info Section',
        'new_item' => 'New Info Section',
        'view_item' => 'View Info Section',
        'search_items' => 'Search Info Section',
        'not_found' => 'No Info Section found',
        'not_found_in_trash' => 'No Info Section found in Trash',
        'parent_item_colon' => 'Parent Info:',
        'menu_name' => 'Info Section',
    );

    $args3 = array(
        'labels' => $labels3,
        'public' => true,
        'has_achive' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-info',
        'query_var' => true,
        'rewrite' => array('slug' => 'info'),
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    );

    register_post_type('info', $args3);
}
add_action('init', 'info_section');

function info_section_shortcode($atts)
{
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('info-section', 'info_section_shortcode');

// custom-post for O nama
function custom_post()
{
    $labels4 = array(
        'name' => 'Custom Post',
        'singular_name' => 'Custom Post',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Custom Post',
        'edit_item' => 'Edit Custom Post',
        'new_item' => 'New Custom Post',
        'view_item' => 'View Custom Post',
        'search_items' => 'Search Custom Post',
        'not_found' => 'No Custom Post found',
        'not_found_in_trash' => 'No Custom Post found in Trash',
        'parent_item_colon' => 'Parent Custom:',
        'menu_name' => 'Custom Post For O nama',
    );

    $args4 = array(
        'labels' => $labels4,
        'public' => true,
        'has_achive' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-admin-post',
        'query_var' => true,
        'rewrite' => array('slug' => 'custom'),
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    );

    register_post_type('custom', $args4);
}
add_action('init', 'custom_post');

function custom_post_shortcode($atts)
{
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('custom-post', 'custom_post_shortcode');

// custom-post for Naša vinarija
function custom_post1()
{
    $labels5 = array(
        'name' => 'Custom Post',
        'singular_name' => 'Custom Post',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Custom Post',
        'edit_item' => 'Edit Custom Post',
        'new_item' => 'New Custom Post',
        'view_item' => 'View Custom Post',
        'search_items' => 'Search Custom Post',
        'not_found' => 'No Custom Post found',
        'not_found_in_trash' => 'No Custom Post found in Trash',
        'parent_item_colon' => 'Parent Custom:',
        'menu_name' => 'Custom Post For Naša vinarija',
    );

    $args5 = array(
        'labels' => $labels5,
        'public' => true,
        'has_achive' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-admin-post',
        'query_var' => true,
        'rewrite' => array('slug' => 'custom1'),
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    );

    register_post_type('custom1', $args5);

    $taxonomy_labels = array(
        'name' => 'Category',
        'singular_name' => 'Category',
        'search_items' => 'Search Category',
        'all_items' => 'All Category',
        'parent_item' => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item' => 'Edit Category',
        'update_item' => 'Update Category',
        'add_new_item' => 'Add New Category',
        'new_item_name' => 'New Category Name',
        'menu_name' => 'Category',
    );

    $taxonomy_args = array(
        'hierarchical' => true,
        'labels' => $taxonomy_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'category1'), // Change the slug to your desired URL base
    );

    register_taxonomy('category1', 'custom1', $taxonomy_args);
}
add_action('init', 'custom_post1');


function custom_post1_shortcode($atts)
{
    ob_start();
    $output = ob_get_clean();
    return $output;
}
add_shortcode('custom-post1', 'custom_post1_shortcode');



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

/**
 * Register meta boxes.
 */
function hcf_register_meta_boxes()
{
    $page_id = '22';
    $template_file = 'template-vinarija.php';
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
        $template = get_post_meta($post_id, '_wp_page_template', true);

        // Check if the current page uses the specified page template
        if ($template === $template_file) {
            add_meta_box('hcf-1', __('Hello Custom Field', 'hcf'), 'hcf_display_callback', 'page');
        }
    }

    $page_id = '18';
    $template_file = 'template-pocetna.php';
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
        $template = get_post_meta($post_id, '_wp_page_template', true);

        // Check if the current page uses the specified page template
        if ($template === $template_file) {
            add_meta_box('hcf-2', __('Another Custom Field', 'hcf'), 'hcf_display_callback_2', 'page');
        }
    }
}
add_action('add_meta_boxes', 'hcf_register_meta_boxes');

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_display_callback($post)
{
    include plugin_dir_path(__FILE__) . './form.php';
}
/**
 * Meta box display callback for the second meta box.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_display_callback_2($post)
{
    include plugin_dir_path(__FILE__) . './form-1.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function hcf_save_meta_box($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if ($parent_id = wp_is_post_revision($post_id)) {
        $post_id = $parent_id;
    }
    $fields = [
        'top_right',
        'top_left',
        'bottom_right',
        'bottom_left',
    ];
    $fields1 = [
        'right_heading',
        'right_text',
        'left_heading',
        'left_text',
        'image_field',
        'bottom_heading',
        'bottom_left',
        'bottom_right'
    ];
    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
    // foreach ($fields1 as $field) {
    foreach ($fields1 as $field) {
        if ('image_field' === $field) {
            // Handle the image upload
            if (!empty($_FILES['image_field']['name'])) {
                $attachment_id = media_handle_upload('image_field', $post_id);
                if (is_wp_error($attachment_id)) {
                    // Handle the upload error (if any)
                } else {
                    // Image uploaded successfully, save the attachment ID as post meta
                    update_post_meta($post_id, 'image_field', $attachment_id);
                }
            }
        } elseif (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}

add_action('save_post', 'hcf_save_meta_box');
