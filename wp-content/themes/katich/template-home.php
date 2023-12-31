<?php

// Template name:home

get_header();
wp_head();

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');

?>

<section class="intro">
    <div class="intro-slider">
        <?php
        $slider_posts = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ));

        while ($slider_posts->have_posts()) : $slider_posts->the_post();
        ?>
            <article class="intro-slide">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery">
                <div class="intro-overlay"></div>
                <div class="intro-text">
                    <div class="container">
                        <div class="intro-inner">
                            <div class="title">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <p><?php the_content(); ?></p>
                            <a href="" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    </div>
    <div class="custom-arrows">
        <span class="prev"></span>
        <div id="slider__counter"></div>
        <span class="next"></span>
    </div>
    <?php wp_reset_postdata(); ?>
</section>

<section class="space about">
    <div class="container">
        <article class="about-text">
            <div class="title">
                <h2><?php echo esc_attr(get_post_meta(get_the_ID(), 'left_heading', true)); ?></h2>
            </div>
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'left_text', true)); ?></p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('o-name'))); ?>" class="btn btn-primary">Read More</a>
        </article>
        <article class="about-map">
            <div class="title">
                <h2><?php echo esc_attr(get_post_meta(get_the_ID(), 'right_heading', true)); ?></h2>

            </div>
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'right_text', true)); ?></p>

            <img src="<?php $image_id = get_post_meta(get_the_ID(), 'image_field', true);
                        if ($image_id) {
                            $image_url = wp_get_attachment_url($image_id);
                            if ($image_url) {
                                echo  esc_url($image_url);
                            }
                        } ?>" alt="Katich - Katić Winery">

        </article>
    </div>
</section>


<section class="info-section">
    <div class="container">

        <?php
        $info_posts = new WP_Query(array(
            'post_type' => 'info',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ));

        while ($info_posts->have_posts()) : $info_posts->the_post();
        ?>
            <article>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery">
                <h3><?php the_title() ?></h3>
            </article>
        <?php endwhile; ?>

    </div>
    <?php wp_reset_postdata(); ?>

</section>

<!-- WooCommerce Products in home Page -->

<section class="products-home space">
    <div class="container">
        <div class="title title-center">
            <h2>We highlight from the offer</h2>
        </div>
        <div class="products-wrapper">

            <?php
            $posts = new WP_Query(array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => 5,
            ));

            while ($posts->have_posts()) : $posts->the_post();
            ?>

                <article>
                    <!-- <a href="page-proizvod.php" class="product-image"><img src="<?php //echo get_the_post_thumbnail_url(); 
                                                                                        ?>" alt="Katich - Katić Winery"></a> -->
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="product-image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery">
                    </a>
                    <div class="product-text">
                        <h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
                        <?php echo '<h4>' . $product->get_attribute('quantity') . '</h4>'; ?>
                        <p><?php the_content(); ?></p>
                        <?php echo '<div class="product-price">' . $product->get_price_html() . '</div>'; ?>
                        <!-- <div class="product-price">10,00 €</div> -->
                        <div class="product-bottom-wrapper">
                            <div class="product-quantity">
                                <form class="cart" method="post" enctype="multipart/form-data">
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="smntcswcb">Quantity</label>
                                        <input class="minus button wp-element-button" type="button" value="-">
                                        <input type="number" id="smntcswcb" step="1" min="1" name="quantity" value="1" class="input-text qty text" />
                                        <input class="plus button wp-element-button" type="button" value="+">
                                    </div>
                            </div>
                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr(get_the_ID()); ?>" class="button alt btn btn-primary btn-cart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>
        <div class="btn-wrapper">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('ponuda'))); ?>" class="btn btn-secondary">See the rest of our wine offer</a>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>

</section>
<section class="about2 space">
    <div class="container">
        <article class="about-title">
            <div class="title">
                <h2><?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_heading', true)); ?></h2>
            </div>
            <h3><?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_left', true)); ?></h3>
        </article>
        <article class="about2-text">
            <p><?php echo esc_attr(get_post_meta(get_the_ID(), 'bottom_right', true)); ?></p>
        </article>
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
    <?php wp_reset_postdata(); ?>

</section>

<?php

wp_footer();
get_footer();

?>