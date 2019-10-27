<?php wp_footer(); ?>
<footer>
    <div class="main-container">
        <div class="footer__newsletter">
            <p class="join" >Keep In Touch With Us!</p>
            <p>Ontvang de laatste trends en <span class="bold">speciale aanbiedingen</span> in je inbox en wees als eerst op de hoogte van nieuwe items!</p>
            <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                <div id="mc_embed_signup">
                <form action="https://fourplusfour.us4.list-manage.com/subscribe/post?u=d1e4de1913f1897f9d9802f81&amp;id=f6a7824497" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    
                    <input type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="email adres" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d1e4de1913f1897f9d9802f81_f6a7824497" tabindex="-1" value=""></div>
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                    
                </form>
                </div>
            <!--End mc_embed_signup-->
        </div>
        <div class="footer__links">
            <div class="footer__links__block">
                <p>Categoriën</p>
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_storelinks' ) ) ?>
                </nav>
            </div>
            <div class="footer__links__block">
                <p>Service</p>
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_information' ) ) ?>
                </nav>
            </div>
            <div class="footer__links__block">
                <p>Volg ons</p>
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/Four-Plus-Four-Clothing-109825547068269" target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/fourplusfournl/" target="_blank">Instagram</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer__payment_methods">
        <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/ideal.svg" alt="Four Plus Four Ideal betaal methode">
        <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/paypal.svg" alt="Four Plus Four PayPal betaal methode"></a>
    </div>

        
</footer>
</body>
</html>

<!-- <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_storelinks' ) ) ?>
</nav>

<nav>
    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_information' ) ) ?>
</nav>

<div class="footer__icons__container">
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/facebook.svg" alt="Four Plus Four Facebook"></a>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/instagram.svg" alt="Four Plus Four Instagram"></a>
            <div class="line"></div>
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/ideal.svg" alt="Four Plus Four Ideal betaal methode">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/icons/paypal.svg" alt="Four Plus Four PayPal betaal methode"></a>
        </div>

<li>KVK: 76204235</li> -->