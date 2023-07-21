
<?php
// Template Name:registration

// Check if WooCommerce is active
if (function_exists('wc_create_new_customer')) {
    // Process user registration when the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpassword'];

        // Additional validation and error handling can be implemented here
        if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
            $error_message = 'All fields are required.';
        } elseif (username_exists($username)) {
            $error_message = 'Username already exists. Please choose a different one.';
        } elseif (!is_email($email)) {
            $error_message = 'Invalid email address.';
        } elseif (email_exists($email)) {
            $error_message = 'Email address already registered. Please use a different one.';
        } elseif ($password !== $confirm_password) {
            $error_message = 'Passwords do not match.';
        } else {
            // Create a new WooCommerce customer
            $new_customer = wc_create_new_customer($email, $username, $password);

            if (is_wp_error($new_customer)) {
                // Handle registration errors
                $error_message = $new_customer->get_error_message();
            } else {
                // Redirect to my account page on successful registration
                wp_safe_redirect(get_permalink(wc_get_page_id('myaccount')));
                exit;
            }
        }
    }
}

// Get header.php
get_header();
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
            <input type="submit" name="register_submit" value="Register">
        </form>
        <br>

        <h4>Have an account? <a href="<?php echo esc_url(wc_get_account_endpoint_url('')); ?>">Login</a></h4>
    </div>
</div>

<?php
// Get footer.php
get_footer();
?>
