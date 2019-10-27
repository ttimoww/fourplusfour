<?php get_header() ?>
<section class="homepage__landing">
    <div class="homepage__landing__images">
        <img class="activeslide" src="https://fourplusfour.nl/wp-content/uploads/2019/09/slider1.jpg" alt="">
        <img src="https://fourplusfour.nl/wp-content/uploads/2019/09/slider2.jpg" alt="">
        <img src="https://fourplusfour.nl/wp-content/uploads/2019/09/slider3.jpg" alt="">
    </div>
    <div class="homepage__landing_social">
        <a href="https://instagram.com/fourplusfournl" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/instagram_landing.svg" alt="Four Plus Four Instagram">
        </a>
        <a href="https://www.facebook.com/Four-Plus-Four-Clothing-109825547068269" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/facebook_landing.svg" alt="Four Plus Four Facebook">  
        </a>
    </div>
</section>
<?php wp_footer(); ?>