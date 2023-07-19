<?php

// Template Name:vinarija

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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aperiam, eveniet alias ea repudiandae id? Deserunt assumenda quo ut amet officiis rerum animi! Quos eum, hic ducimus quis cumque maiores quo magni quaerat omnis delectus voluptatibus fugit repellat ab ipsam blanditiis doloremque ex est illum harum laboriosam. Voluptatibus, eius asperiores.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, incidunt quasi rerum ullam voluptatem vitae ex doloribus earum dignissimos animi, maxime voluptates. Ad nisi consectetur rerum inventore est. Libero, suscipit praesentium magni voluptatem maiores magnam corporis nisi reiciendis! Commodi hic voluptates corrupti nobis? Inventore, similique! Doloremque distinctio quam non sed debitis eaque aspernatur repellat dolor explicabo repudiandae obcaecati ipsam quaerat cum eum sit ducimus sint vitae quibusdam, impedit error porro voluptates consequuntur magnam libero. Quod adipisci, ullam numquam perspiciatis facere, natus ducimus incidunt iste maiores vitae distinctio neque quos delectus enim tempore reprehenderit nobis eaque veritatis ratione temporibus nam consequuntur, voluptates recusandae. Veniam reprehenderit enim laborum dolore repellendus suscipit deserunt ea possimus fugiat? Dignissimos, voluptates blanditiis recusandae culpa sunt dolorum eaque, quo sapiente dicta odio omnis accusamus saepe nesciunt? Magni veritatis distinctio vitae cumque! Aut consectetur vitae a obcaecati minus, alias ea similique doloremque beatae voluptas quae aspernatur, rem maiores.</p>
        </div>
    </div>
</section>
<section class="page-lg">
    <div class="container container-lg">
        <div class="pages-image-lg">
            <img src="<?php bloginfo('template_directory'); ?>/images/image2.jpg" alt="Katich - Katić Winery">
        </div>
        <div class="pages-text-lg">
            <div class="title">
                <h2>Libero, suscipit praesentium magni</h2>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum in dolor quidem et doloribus possimus pariatur cum earum iste? Tempore saepe dolor debitis pariatur voluptatibus omnis consectetur adipisci, numquam odio dolore! Quidem necessitatibus, a nesciunt voluptate aliquam doloribus veritatis ad?</p>
        </div>
    </div>
</section>
<section class="page-lg lg-reverse">
    <div class="container container-lg">
        <div class="pages-image-lg">
            <img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg" alt="Katich - Katić Winery">
        </div>
        <div class="pages-text-lg">
            <div class="title">
                <h2>Libero, suscipit praesentium magni</h2>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum in dolor quidem et doloribus possimus pariatur cum earum iste? Tempore saepe dolor debitis pariatur voluptatibus omnis consectetur adipisci, numquam odio dolore! Quidem necessitatibus, a nesciunt voluptate aliquam doloribus veritatis ad?</p>
        </div>
    </div>
</section>

<section class="space">
    <div class="container">
        <div class="pages-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aperiam, eveniet alias ea repudiandae id? Deserunt assumenda quo ut amet officiis rerum animi! Quos eum, hic ducimus quis cumque maiores quo magni quaerat omnis delectus voluptatibus fugit repellat ab ipsam blanditiis doloremque ex est illum harum laboriosam. Voluptatibus, eius asperiores.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, incidunt quasi rerum ullam voluptatem vitae ex doloribus earum dignissimos animi, maxime voluptates. Ad nisi consectetur rerum inventore est. Libero, suscipit praesentium magni voluptatem maiores magnam corporis nisi reiciendis! Commodi hic voluptates corrupti nobis? Inventore, similique! Doloremque distinctio quam non sed debitis eaque aspernatur repellat dolor explicabo repudiandae obcaecati ipsam quaerat cum eum sit ducimus sint vitae quibusdam, impedit error porro voluptates consequuntur magnam libero. Quod adipisci, ullam numquam perspiciatis facere, natus ducimus incidunt iste maiores vitae distinctio neque quos delectus enim tempore reprehenderit nobis eaque veritatis ratione temporibus nam consequuntur, voluptates recusandae. Veniam reprehenderit enim laborum dolore repellendus suscipit deserunt ea possimus fugiat? Dignissimos, voluptates blanditiis recusandae culpa sunt dolorum eaque, quo sapiente dicta odio omnis accusamus saepe nesciunt? Magni veritatis distinctio vitae cumque! Aut consectetur vitae a obcaecati minus, alias ea similique doloremque beatae voluptas quae aspernatur, rem maiores.</p>
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