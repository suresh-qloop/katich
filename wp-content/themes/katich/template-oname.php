<?php

// Template Name:o name  

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
            <p><?php the_content(); ?></p>
        </div>
    </div>
</section>
<section class="page-lg">
    <?php
    $custom_posts = new WP_Query(array(
        'post_type' => 'custom',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ));
    while ($custom_posts->have_posts()) : $custom_posts->the_post();
    ?>
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
    <?php endwhile; ?>
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