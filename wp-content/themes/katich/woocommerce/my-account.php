<?php
// Template Name:my-account

wp_head();
get_header();

// Check if user is logged in, redirect to login page if not logged in
// if (!is_user_logged_in()) {
// 	wp_redirect(wp_login_url());
// 	// exit;
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<?php
global $post;
if (is_user_logged_in()) { ?>

	<h1><?php the_title(); ?></h1>
	<div class="my-account">
		<h2>Welcome, <?php echo $current_user->display_name; ?></h2>
		<p>Email: <?php echo $current_user->user_email; ?></p>
	</div>


	<div class="woocommerce-MyAccount-content">
		<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action('woocommerce_account_content');
		?>
	</div>


<?php
} else {

	echo '<a href="http://localhost/wordpress/katich/login/">Login Here Please</a>';
}
?>

<div class="woocommerce-MyAccount-content">
	<?php
	/**
	 * My Account content.
	 *
	 * @since 2.6.0
	 */
	// do_action('woocommerce_account_content');
	?>
</div>

<?php
wp_footer();
get_footer();
?>