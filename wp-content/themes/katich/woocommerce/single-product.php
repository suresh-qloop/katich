<?php



get_header();
wp_head();

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');

?>


<section class="top-image">
	<img src="<?php bloginfo('template_directory'); ?>/images/intro.jpg" alt="Katich - Katić Winery">
	<div class="top-overlay"></div>
</section>
<section class="pages space dark-bg">
	<div class="container">
		<div class="single-wrapper">
			<article class="single-image">
				<div href="<?php echo esc_url(get_permalink()); ?>" data-fancybox="gallery"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery"></div>
			</article>
			<aricle class="single-text">
				<div class="title">
					<h1><?php the_title(); ?></h1>
					<h4>0,75l</h4>
					<p><?php the_content(); ?></p>
					<?php
					// Check if the global $post variable is available and represents a product post
					if (is_a($post, 'WP_Post') && function_exists('wc_get_product')) {
						$product = wc_get_product($post);
						if ($product) {
							echo '<div class="product-price">' . $product->get_price_html() . '</div>';
						}
					}
					?>
					<div class="product-bottom-wrapper">
						<div class="product-quantity">
							<form class="cart" method="post" enctype="multipart/form-data">
								<div class="quantity">
									<input type="number" step="1" min="1" name="quantity" value="1" class="input-text qty text" />
								</div>
						</div>
						<button type="submit" name="add-to-cart" value="<?php echo esc_attr(get_the_ID()); ?>" class="button alt btn btn-primary btn-cart">Dodajte u košaricu</button>
						</form>
					</div>
				</div>
			</aricle>
		</div>

	</div>
</section>
<section class="similar space">
	<div class="container">
		<div class="title title-center mb-6">
			<!-- <h2><?php the_title(); ?></h2> -->
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
					<a href="<?php echo esc_url(get_permalink()); ?>" class="product-image"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Katich - Katić Winery"></a>
					<div class="product-text">
						<h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
						<h4>0,75l</h4>
						<p><?php the_content(); ?></p>
						<?php echo '<div class="product-price">' . $product->get_price_html() . '</div>'; ?>
						<!-- <div class="product-price">10,00 €</div> -->
						<div class="product-bottom-wrapper">
							<div class="product-quantity">
								<button class="q-minus">-</button>
								<input type="number" placeholder="0" min="1" value="1">
								<?php
								// '<form class="cart" method="post" enctype="multipart/form-data" style="margin-top:;">';
								// '<div class="quantity">';
								// '<input type="number" step="01" min="1" name="quantity" value="1" class="input-text qty text" />';
								// '</div>';
								// '</form>';
								?>
								<button class="q-plus">+</button>
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