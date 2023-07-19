<?php
// Template Name:registration
wp_head();
get_header();
// if (!is_user_logged_in()) {
//     wp_redirect(get_permalink(wc_get_page_id('myaccount')));
//     exit;
// }
global $wpdb;
// Process user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Additional validation and error handling can be implemented here
    // Create a new WooCommerce customer
    $new_customer = wc_create_new_customer($email, $username, $password);
    if (is_wp_error($new_customer)) {
        // Handle registration errors
        $error_message = $new_customer->get_error_message();
    } else {
        // Redirect to my account page on successful registration
        wp_redirect(get_permalink(wc_get_page_id('myaccount')));
        exit;
    }
}
?>

<div class="registration-container">
    <div class="registration-form">
        <h2><?php the_title(); ?></h2>
        <?php if (isset($error_message)) : ?>
            <div class="registration-error">
                <?php echo esc_html($error_message); ?>
            </div>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
            <input type="submit" value="Register">
        </form>
    </div>
</div>

<?php
wp_footer();
get_footer();
?>