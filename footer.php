    <!-- Start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>About</h5>
                    <p><?php echo get_theme_mod('footer_about');?></p>
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/fb.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/gp.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/ins.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/ok.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/tg.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/tw.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/vk.png" alt=""></a></li>
                            <li><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/yt.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-2 col-md-3">
                    <h5>Categories</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Football</a></li>
                        <li><a href="#">Formula 1</a></li>
                        <li><a href="#">Tennis</a></li>
                        <li><a href="#">Atletics</a></li>
                        <li><a href="#">Basketball</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-2 col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Updates</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-2 col-md-3">
                    <h5>Information</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-2 col-md-3">
                    <h5>Instagram</h5>
                </div>
                <div class="row align-items-center footer-bottom">
                    <div class="col-md-auto header-logotype">
                        <img src="<? echo get_bloginfo('template_url'); ?>/img/logotype-speert-theme.svg" alt="">
                    </div>
                    <div class="footer-bottom-copy">
                        <p><?php echo get_theme_mod('footer_copyright');?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->
    <?php wp_footer(); ?>
</body>
</html>