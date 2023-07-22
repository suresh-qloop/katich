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

<div class="sun">

	<?php
	global $post;
	if (is_user_logged_in()) { ?>

		<h1><?php the_title(); ?></h1>
		<div class="my-account">
			<h2>Welcome, <?php echo $current_user->display_name; ?></h2>
			<p>Email: <?php echo $current_user->user_email; ?></p>
		</div>

		<?php
		do_action('woocommerce_account_navigation');
		?>
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
	?>
		<!-- <a href="<?php esc_attr_e('Login', 'woocommerce'); ?>">Login Here</a> -->
		<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>

			<!-- <div class="u-columns col2-set" id="customer_login"> -->

				<!-- <div class="u-column1 col-1"> -->

				<?php endif; ?>

				<h2>Login</h2>


				<form action="<?php echo wc_get_account_endpoint_url(''); ?>" class="woocommerce-form woocommerce-form-login login" method="post">

					<?php do_action('woocommerce_login_form_start'); ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="username"><?php esc_html_e('Username or email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php //@codingStandardsIgnoreLine 
																																																																	?>
					</p>
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
					</p>

					<?php do_action('woocommerce_login_form'); ?>

					<p class="form-row">
						<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
						<button type="submit" class="woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
					</p>
					<!-- <p class="woocommerce-LostPassword lost_password">
						<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
					</p> -->

					<?php do_action('woocommerce_login_form_end'); ?>

				</form>
				<h4>Don't have an account? <a href="<?php esc_attr_e('Registracija', 'woocommerce'); ?>">Registracija</a></h4>

				<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>

				<!-- </div> -->

			<!-- </div> -->
		<?php endif; ?>
	<?php
	}
	?>
</div>

<?php
wp_footer();
get_footer();
?>