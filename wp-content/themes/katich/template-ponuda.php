<?php

// Template Name:ponuda

get_header();
wp_head();

?>


<section class="top-image">
    <img src="<?php bloginfo('template_directory'); ?>/images/intro.jpg" alt="Katich - Katić Winery">
    <div class="top-overlay"></div>
</section>

</section>
<section class="pages space">
    <div class="container">
        <div class="title title-center mb-6">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="products-wrapper">

            <?php
            $posts = new WP_Query(array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));

            while ($posts->have_posts()) : $posts->the_post();
            ?>

                <article>
                    <a href="page-proizvod.php" class="product-image"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery"></a>
                    <div class="product-text">
                        <h3><a href="page-proizvod.php"><?php the_title(); ?></a></h3>
                        <h4>0,75l</h4>
                        <p><?php the_content(); ?></p>
                        <?php echo '<div class="product-price">' . $product->get_price_html() . '</div>'; ?>
                        <!-- <div class="product-price">10,00 €</div> -->
                        <div class="product-bottom-wrapper">
                            <div class="product-quantity">
                                <button class="q-minus">-</button>
                                <input type="number" placeholder="0" min="0" value="0" class="input-text qty text">
                                <?php
                                // echo '<form class="cart" method="post" enctype="multipart/form-data" style="margin-top:;">';
                                // echo '<div class="quantity">';
                                // echo '<input type="number" step="01" min="1" name="quantity" value="1" class="input-text qty text2" />';
                                // echo '</div>';
                                // echo '</form>';
                                ?>
                                <button class="q-plus">+</button>
                                <!-- <span class="q-minus">-</span>
                                <input type="number" placeholder="0">
                                <span class="q-plus">+</span> -->
                            </div>
                            <?php
                            echo '<form class="cart" method="post" enctype="multipart/form-data" style="margin-top:;">';
                            echo '<button type="submit" name="add-to-cart" value="' . esc_attr(get_the_ID()) . '" class="button alt btn btn-primary btn-cart">Dodajte u košaricu</button>';
                            echo '</form>';
                            ?>

                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>
    </div>
</section>


<?php

wp_footer();
get_footer();

?>