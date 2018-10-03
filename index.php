<?php get_header(); ?>
    <!-- Start Main Block -->
    <div class="container-fluid color_bg">
        <div class="container padding_bg">
            <div class="row white_bg">
                <div class="col-lg-8 slider">
                    <div class="slider-item">
                        <div class="slider-item-img"><img src="<? echo get_bloginfo('template_url'); ?>/img/preview/Slide-1.jpg"></div>
                        <div class="slider-item-text">
                            <a href="#">Record-breaking performances at NCAA Indoor Championships</a>
                            <div class="hot-news-item-info">Athletics / 28 feb 2018</div>
                        </div>   
                    </div>
                    <div class="slider-item">
                        <div class="slider-item-img"><img src="<? echo get_bloginfo('template_url'); ?>/img/preview/Slide-1.jpg"></div>
                        <div class="slider-item-text">
                            <a href="#">Record-breaking performances at NCAA Indoor Championships</a>
                            <div class="hot-news-item-info">Athletics / 28 feb 2018</div>
                        </div>   
                    </div>   
                </div>
                <div class="col-lg-4 hot-news">
                    <div class="hot-news-item">
                        <div class="hot-news-item-img" style="background-image: url(img/preview/hot-1.jpg);"></div>
                        <div class="hot-news-item-wrap">
                            <a class="hot-news-item-head" href="#">How to run without harm to health</a>
                            <div class="hot-news-item-info"><a href="#">Athletics</a> / 28 feb 2018</div>
                        </div>
                    </div>
                    <div class="hot-news-item">
                        <div class="hot-news-item-img" style="background-image: url(img/preview/hot-2.jpg);"></div>
                        <div class="hot-news-item-wrap">
                            <a class="hot-news-item-head" href="#">How to run without harm to health</a>
                            <div class="hot-news-item-info"><a href="#">Athletics</a> / 28 feb 2018</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 news-list">
                        <h5>Football</h5>
                        <ul>
                        <!-- Вывод записей! -->
                            <?php
                                global $post; // не обязательно
                                $args = array('category' => 2, 'posts_per_page' => 5); // 5 записей из выбранной рубрики
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ){ setup_postdata($post);
                                    // стандартный вывод записей
                                     ?><li>
                                        <div class="news-list-date"><?php the_time('H.i');?></div>
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        <div style="background-color: red"><?php echo get_post_meta ($post->ID,'views',true); ?></div>
                                    </li><?php
                                }
                                wp_reset_postdata(); // сбрасываем переменную $post
                            ?>
                            </ul>
                    </div>
                    <!-- .col-md-4 news-list -->
                    <div class="col-lg-4 news-list">
                        <h5>Formula 1</h5>
                        <ul>
                            <!-- Вывод записей! -->
                            <?php
                                global $post; // не обязательно
                                $args = array('category' => 3, 'posts_per_page' => 5); // 5 записей из выбранной рубрики
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ){ setup_postdata($post);
                                    // стандартный вывод записей
                                     ?><li>
                                        <div class="news-list-date"><?php the_time('H.i');?></div>
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        <div style="background-color: red"><?php echo get_post_meta ($post->ID,'views',true); ?></div>
                                    </li><?php
                                }
                                wp_reset_postdata(); // сбрасываем переменную $post
                            ?>
                        </ul>
                    </div>
                    <!-- .col-md-4 news-list -->
                    <div class="col-lg-4 news-list">
                        <h5>Tennis</h5>
                        <ul>
                            <!-- Вывод записей! -->
                            <?php
                                global $post; // не обязательно
                                $args = array('category' => 4, 'posts_per_page' => 5); // 5 записей из выбранной рубрики
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ){ setup_postdata($post);
                                    // стандартный вывод записей
                                     ?><li>
                                        <div class="news-list-date"><?php the_time('H.i');?></div>
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        <div style="background-color: red"><?php echo get_post_meta ($post->ID,'views',true); ?></div>
                                    </li><?php
                                }
                                wp_reset_postdata(); // сбрасываем переменную $post
                            ?>
                        </ul>
                    </div>
                    <!-- .col-md-4 news-list -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Block -->
    <?php include('template-parts/popular-news.php') ?>
    <section class="container gutter">
        <div class="row no-gutters align-items-center justify-content-between section-head">
            <div class="section-head-left">
                <h2>Latest Articles</h2></div>
            <div class="section-head-right"><a href="#">Show more</a></div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="latest-item">
                    <a href="#">
                        <div class="latest-item-img" style="background-image: url(img/preview/latest-1.jpg);"></div>
                    </a>
                    <div class="latest-item-wrap">
                        <div class="latest-item-wrap-head"><a href="#">Sacrifices and singing as Jazmin Sawyers goes for Gold Coast glory</a></div>
                        <div class="latest-item-wrap-text">The Commonwealth long jump silver medallist on the changes she has made and her experience recording the official anthem of Commonwealth Games England</div>
                        <div class="latest-item-wrap-more">
                            <p><a href="#">Athletics</a> / 28 feb 2018
                                <p> <span class="icon-eye-1">28 </span><span class="popular-item-more-separator"></span><span class="icon-comment-1">33</span></div>
                    </div>
                </div>
                <div class="latest-item">
                    <a href="#">
                        <div class="latest-item-img" style="background-image: url(img/preview/latest-2.jpg);"></div>
                    </a>
                    <div class="latest-item-wrap">
                        <div class="latest-item-wrap-head"><a href="#">There’s much more in store for Laura Muir,says Kelly Holmes</a></div>
                        <div class="latest-item-wrap-text">The Scottish double world indoor medallist has decided to miss the Gold Coast Commonwealth Games and double Olympic champion Holmes says she has probably made the right call</div>
                        <div class="latest-item-wrap-more">
                            <p><a href="#">Athletics</a> / 28 feb 2018
                                <p> <span class="icon-eye-1">28 </span><span class="popular-item-more-separator"></span><span class="icon-comment-1">33</span></div>
                    </div>
                </div>
                <div class="latest-item">
                    <a href="#">
                        <div class="latest-item-img" style="background-image: url(img/preview/latest-3.jpg);"></div>
                    </a>
                    <div class="latest-item-wrap">
                        <div class="latest-item-wrap-head"><a href="#">Rosie Clarke’s experience of getting set for Gold Coast</a></div>
                        <div class="latest-item-wrap-text">The steeplechaser offers insight into her preparations ahead of the Commonwealth Games in Australia</div>
                        <div class="latest-item-wrap-more">
                            <p><a href="#">Athletics</a> / 28 feb 2018
                                <p> <span class="icon-eye-1">28 </span><span class="popular-item-more-separator"></span><span class="icon-comment-1">33</span></div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn_showmore">Show more</a>
            <div class="col-lg-4">
                <div class="banner-block"><a href="#"><img src="img/preview/banner-1.jpg" alt=""></a></div>
            </div>
        </div>
    </section>
    <?php include('template-parts/top-video.php') ?>
    <?php include('template-parts/block-archive.php') ?>
    <?php include('template-parts/block-gallery.php') ?>
    <!-- Finish Gallery -->
    <?php get_footer(); ?>