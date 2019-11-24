<?php 
    function theme_scripts(){
        wp_enqueue_style('bundle', get_template_directory_uri() . '/dist/css/bundle.css', false, '1.1', 'all' );
        wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.1', true);
    }

    function register_my_menus() {
        register_nav_menus(
            array(
            // Header
            'header_menu_left' => __( 'Header Menu Left' ),
            'header_menu_right' => __( 'Header Menu Right' ),
            
            // Mobile Menu
            'mobile_menu' => __( 'Mobile Menu' ),

            // Footer
            'footer_menu_storelinks' => __( 'Footer Menu Storelinks' ),
            'footer_menu_information' => __( 'Footer Menu Information' )
            )
        );
    }

    function my_filter_head() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    // Add woocommerce
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    // Allows me to have show realtime cartdata
    function woocommerce_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;
        ob_start();

        ?>
        <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
        <?php
        $fragments['a.cart-customlocation'] = ob_get_clean();
        return $fragments;
    }

    function wpb_load_woocommerce() {
        if( ! is_page(array( 'archive' ) ) ) {
            wp_enqueue_style( 'wpb-woo', get_stylesheet_directory_uri() . '/css/woocommerce.css',  '', '3', 'all');		
        }
    }

    // Only load WC CSS on specified pages
    function sk_conditionally_remove_wc_assets() {

        // if WooCommerce is not active, abort.
        if ( ! class_exists( 'WooCommerce' ) ) {
            return;
        }
    
        // if this is a WooCommerce related page, abort.
        if ( is_woocommerce() || is_checkout() || is_page( array( 'my-account' ) ) ) {
            return;
        }
    
        remove_action( 'wp_enqueue_scripts', [ WC_Frontend_Scripts::class, 'load_scripts' ] );
        remove_action( 'wp_print_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
        remove_action( 'wp_print_footer_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
    
    }

    // Remove coupon code notice on checkoutpage
    function remove_checkout_coupon_form(){
        remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
    }
    
    add_action( 'woocommerce_before_checkout_form', 'remove_checkout_coupon_form', 9 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    add_action( 'get_header', 'sk_conditionally_remove_wc_assets' );
    add_action('wp_enqueue_scripts','wpb_load_woocommerce');
    add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
    add_action( 'init', 'register_my_menus' );
    add_action('get_header', 'my_filter_head');
    add_action('wp_enqueue_scripts', 'theme_scripts')
?>