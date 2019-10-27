<?php wp_footer(); ?>
<footer>

    </div>
    <div class="main-container">
        <div class="footer__grid">
            <div class="footer__store-links footer__section">
                <p class="title">Four Plus Four</p>
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_storelinks' ) ) ?>
                </nav>
            </div>
            <div class="footer__store-links-important footer__section">
                <p class="title">Informatie</p>
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_information' ) ) ?>
                </nav>
            </div>
            <div class="footer__newsletter footer__section">
                <p class="title">Contact</p>
                <ul>
                    <li>info@fourplusfour.nl</li>
                    <li>KVK: 76204235</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__icons">
        <div class="footer__icons__container">
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/facebook.svg" alt="Four Plus Four Facebook"></a>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/instagram.svg" alt="Four Plus Four Instagram"></a>
            <div class="line"></div>
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/ideal.svg" alt="Four Plus Four Ideal betaal methode">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/paypal.svg" alt="Four Plus Four PayPal betaal methode"></a>
        </div>
</footer>
</body>
</html>