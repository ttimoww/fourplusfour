<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MSRK9V3');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
        if (is_product_category()){
            echo single_term_title();
        }else{
            echo the_title();
        } ?> - Four Plus Four Clothing</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSRK9V3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="header__top__bar">
    <p class="header__top__bar__sellingpoint">
        VERZENDING BINNEN 48 UUR
    </p>
    <!-- <p class="header__top__bar__account">
        <?php if ( is_user_logged_in() ) { ?>
        <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"
            title="<?php _e('mijn account',''); ?>"><?php _e('mijn account',''); ?></a><?php } 
        else { ?>
        <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"
            title="<?php _e('login / register',''); ?>"><?php _e('login / registreer',''); ?></a>
        <?php } ?>

        <?php if (is_user_logged_in()) : ?>
        <a href="<?php echo wp_logout_url(get_permalink()); ?>" class="header__account__large__logout" >log uit</a>
        <?php endif;?>
    </p> -->
    </div>
    <header>
        <div class="main-container">
            <div class="header__main__content">
                <div class="header__nav__left">
                    <div class="header__icon header__icon-menu toggle-menu">
                        <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/hamburger.svg" alt="Open & Close Menu">
                    </div>
                    <div class="header__icon header__icon-search" id="toggle-searchbar">
                        <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/search.svg" alt="Open Search Menu">
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'header_menu_left' ) ) ?>
                </div>
                <div class="header__logo">
                <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                    <img src="<?php bloginfo('template_directory'); ?>/dist/images/logos/logo_header.svg" alt="Four Plus Four Clothing">
                </a>
                </div>
                <div class="header__nav__right">
                    <?php wp_nav_menu( array( 'theme_location' => 'header_menu_right' ) ) ?>
                    <a href="<?php echo wc_get_cart_url(); ?>">
                        <div class="header__icon header__icon-shoppingbag" cart-count="<?php echo sprintf (_n('%d','%d',WC()->cart->get_cart_contents_count()),WC()->cart->get_cart_contents_count());?>">
                            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/shoppingbag.svg" alt="Shoppingbag">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="searchbar">
            <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
        </div>

        <div class="overlay"></div>

        <nav class="mobile-menu">
            <div class="mobile-menu__container">
                <div class="mobile-menu__header">
                    <img id="toggle-searchbar-from-menu" src="<?php bloginfo('template_directory'); ?>/dist/images/icons/search.svg" alt="Open Search Menu">
                    <img class="toggle-menu" src="<?php bloginfo('template_directory'); ?>/dist/images/icons/cross.svg" alt="Close Mobile Menu">
                </div>
                <div class="mobile-menu__content">
                    <?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ) ?>
                    <!-- Account option is disabled -->
                    <!-- <ul>
                        <?php if ( is_user_logged_in() ) { ?>
                        <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"
                            title="<?php _e('mijn account',''); ?>"><?php _e('Mijn Account',''); ?></a></li><?php } 
                        else { ?>
                        <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"
                            title="<?php _e('login / register',''); ?>"><?php _e('Login / Registreer',''); ?></a></li>
                        <?php } ?>

                        <?php if (is_user_logged_in()) : ?>
                        <li><a href="<?php echo wp_logout_url(get_permalink()); ?>" class="header__account__large__logout" >Log Uit</a></li>
                        <?php endif;?>
                    </ul> -->
                </div>
            </div>
        </nav>
    </header>
    
    