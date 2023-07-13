<?php

get_header();
the_post();

?>

<main class="main-content">

    <div class="page">
        <div class="container">
            <h2 class="entry-title"><?//php the_title(); ?></h2>

            <?php the_post_thumbnail('medium'); ?>
            
            <?php the_excerpt(); ?>

            <?php the_content(); ?>

            <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
            <img src="<?php echo $imagepath[0]; ?>" width="500">
        </div>
    </div>

</main>

<?php

get_footer();

?>