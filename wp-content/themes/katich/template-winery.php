<?php

// Template Name:winery

get_header();
wp_head();
?>


<section class="top-image">
    <img src="<?php bloginfo('template_directory'); ?>/images/intro.jpg" alt="Katich - Katić Winery">
    <div class="top-overlay"></div>
</section>



<section class="pages space dark-bg">
    <div class="container">
        <div class="title title-center">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="pages-text">
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'top_left', true)); ?></p>
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'top_right', true)); ?></p>
        </div>
    </div>
</section>


<?php

$args_example = array(
    'post_type' => 'custom1',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$custom_query_example = new WP_Query($args_example);
$odd_posts = array();
$even_posts = array();


// $custom_taxonomies = get_the_terms( get_the_ID(), 'categories' );


if ($custom_query_example->have_posts()) {
    while ($custom_query_example->have_posts()) {
        $custom_query_example->the_post();
        $custom_categories = get_the_terms(get_the_ID(), 'category1');

        if ($custom_categories && !is_wp_error($custom_categories)) {
            $category_id = $custom_categories[0]->term_id;
            // prinT_r($category_id);
            // exit;
            if ($category_id == '32') {
                // Even post
                $even_posts[] = $category_id;

?>
                <section class="page-lg">
                    <div class="container container-lg">
                        <div class="pages-image-lg">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery">
                        </div>
                        <div class="pages-text-lg">
                            <div class="title">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <p><?php the_content(); ?></p>

                        </div>
                    </div>
                </section>
            <?php
            } else if ($category_id == '33') {
                // Odd post
                $odd_posts[] = $category_id;
            ?>
                <section class="page-lg lg-reverse">
                    <div class="container container-lg">
                        <div class="pages-image-lg">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery">
                        </div>
                        <div class="pages-text-lg">
                            <div class="title">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </section>
<?php
            }
        }
    }
}
wp_reset_postdata();
?>

<section class="space">
    <div class="container">
        <div class="pages-text">
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_left', true)); ?></p>
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_right', true)); ?></p>
        </div>
    </div>
</section>

<section class="image-slider">
    <?php
    $slider_posts = new WP_Query(array(
        'post_type' => 'slider2',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ));

    while ($slider_posts->have_posts()) : $slider_posts->the_post();
    ?>
        <article class="image-slide">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery">
        </article>
    <?php endwhile; ?>
</section>



<?php

wp_footer();
get_footer();

?>