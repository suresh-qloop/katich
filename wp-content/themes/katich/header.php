<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>
    <meta name="theme-color" content="#a60e18">
    <meta name="msapplication-navbutton-color" content="#a60e18">
    <meta name="apple-mobile-web-app-status-bar-style" content="#a60e18">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32x32.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
    <meta name="description" content="Katich - Katić Winery" />
    <meta name="keywords" content="Katich - Katić Winery" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- slick slide css -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?>/js/slick/slick.css"> -->
    <!-- gallery css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"> -->
    <!-- <link rel="stylesheet" href="<? //php bloginfo('template_directory'); 
                                        ?>/woocommerce/css/woocommerce-blocktheme-rtl.css"> -->

</head>

<body>

    <header>
        <div class="container">
            <a href="<?php echo site_url(); ?>" class="header-logo"><img src="<?php echo get_header_image(); ?>" alt="Katich - Katić Winery"></a>
            <nav>
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu'
                    ))
                    ?>
                </ul>
            </nav>
            <div class="header-right">
                <article class="header-bottom">
                    <a href="<?php echo wc_get_cart_url(); ?>" class="header-cart">
                        <img src="<?php bloginfo('template_directory'); ?>/images/cart.svg" alt="Katich - Katić Winery">
                        <span>My Shopping Cart</span>
                        <span class="cart-quantity">(<?php echo WC()->cart->get_cart_contents_count(); ?>)</span>
                    </a>
                </article>
                <!-- <div style="font-size:xx-large; margin: -10px -12px 0 10px">/</div> -->
                <article class="header-top">
                    <?php if (is_user_logged_in()) { ?>
                        <a href="<?php echo wc_get_account_endpoint_url(''); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/user.png" alt="Katich - Katić Winery"></a>
                    <?php } else { ?>
                        <a href="<?php echo wc_get_account_endpoint_url(''); ?>" class="my-login-link">Login</a>
                        <!-- <a href="<? //php esc_attr_e('Registracija', 'woocommerce'); 
                                        ?>">Registracija</a> -->
                    <?php } ?>
                    
                </article>
            </div>
        </div>
    </header>
    <main>

        <?php wp_footer(); ?>