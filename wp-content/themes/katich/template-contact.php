<?php

// Template Name:contact

get_header();
wp_head();

?>


<section class="top-image">
    <img src="<?php bloginfo('template_directory'); ?>/images/intro.jpg" alt="Katich - Katić Winery">
    <div class="top-overlay"></div>
</section>
<section class="pages space dark-bg">
    <div class="container">
        <div class="contact-wrapper">
            <article class="contact-text">
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <p><?php the_content(); ?></p>
            </article>
            <article class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="119" title="Contact form 1"]'); ?>
            </article>
        </div>
    </div>
</section>
<section class="map">
    <div class="container container-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2895.775387728252!2d17.044053876570924!3d43.46528626456386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ac3593fa88fcb%3A0xf9d3cf8651fc5a72!2sVinarija%20Kati%C4%87%20-%20Katich%20Winery!5e0!3m2!1sen!2shr!4v1688039172145!5m2!1sen!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<?php

wp_footer();
get_footer();

?>