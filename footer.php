    <!-- Start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5><?php _e('About'); ?></h5>
                    <p><?php echo get_theme_mod('footer_about');?></p>
                    <div class="footer-social-links">
                        <?php speert_social_network(); ?>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-2 col-md-3">
                    <h5><?php _e('Categories'); ?></h5>
                    <ul class="footer-menu">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            if ( $category->parent > 0 )
                                continue;

                            echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>

                <?php speert_list_menu('footer_quick_links', 'Quick Links'); ?>
                <?php speert_list_menu('footer_information', 'Information'); ?>

                <?php if(shortcode_exists('instagram-feed')) : ?>
                    <div class="col-xs-6 col-lg-2 col-md-3">
                        <h5><?php _e('Instagram'); ?></h5>
                        <?php echo do_shortcode('[instagram-feed num=6 cols=3 showheader=false showbio=false]'); ?>
                    </div>
                <?php endif; ?>

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