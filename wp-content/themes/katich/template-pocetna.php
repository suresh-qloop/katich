<?php

// Template name:pocetna

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
                            <a href="" class="btn btn-primary">Saznajte više</a>
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
</section>
<section class="space about">
    <div class="container">
        <article class="about-text">
            <div class="title">
                <h2>O nama</h2>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio eum repudiandae laborum id dolor. Laborum iste labore voluptas quos recusandae incidunt exercitationem, at non odit, dolore quidem vel similique quibusdam inventore. Hic necessitatibus rem ullam voluptate at eos vitae optio amet non repellendus? Accusamus accusantium minus aliquid? Velit, ex nemo.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi laborum optio ea eaque quam veniam saepe accusamus, a exercitationem error aliquam, nesciunt repellendus asperiores voluptates veritatis molestias harum nobis ipsum.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, quo?</p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('o-nama'))); ?>" class="btn btn-primary">Pročitajte više</a>
        </article>
        <article class="about-map">
            <div class="title">
                <h2>Lokacija</h2>

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, perferendis!</p>
            <img src="<?php bloginfo('template_directory'); ?>/images/map.png" alt="Katich - Katić Winery">
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
</section>

<!-- WooCommerce Products in home Page -->

<section class="products-home space">
    <div class="container">
        <div class="title title-center">
            <h2>Izdvajamo iz ponude</h2>
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
                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr(get_the_ID()); ?>" class="button alt btn btn-primary btn-cart">Dodajte u košaricu</button>
                            </form>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>
        <div class="btn-wrapper">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('ponuda'))); ?>" class="btn btn-secondary">Pogledajte ostatak ponude naših vina</a>
        </div>
    </div>
</section>
<section class="about2 space">
    <div class="container">
        <article class="about-title">
            <div class="title">
                <h2>Naša vinarija</h2>
            </div>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. </h3>
        </article>
        <article class="about2-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
</section>

<?php

wp_footer();
get_footer();

?>