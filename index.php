<?php get_header(); ?>

<!-- Start Main Block -->
<div class="container-fluid color_bg">
    <div class="container padding_bg">
        <div class="row white_bg">
            <?php $posts_slider = get_field( "posts_home_slider", "option" ); ?>
            
            <?php if ( $posts_slider ) : ?>
                <div class="col-lg-8 slider">

                    <?php foreach ($posts_slider as $post) { setup_postdata($post); ?>
                    <div class="slider-item">

                        <div class="slider-item-img">
                            <?php the_post_thumbnail('thumb-big', array('itemprop'=>'image')); ?>
                        </div>

                        <div class="slider-item-text">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                            <div class="hot-news-item-info"><?php echo speert_category( $post, '', '', null ); ?> / <?php echo get_the_date(); ?></div>
                        </div>

                    </div>
                    <?php } ?>

                </div>
            <? else : ?>
                Посты не выбраны в админке
            <?php endif; ?>

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

            <?php $posts_bottom_slider = get_field( "posts_bottom_slider", "option" ); ?>
            
            <?php if ( $posts_bottom_slider ) : ?>
                <div class="row">

                    <?php foreach ($posts_bottom_slider as $cat_id) { ?>
                    <div class="col-lg-4 news-list">
                        <h5><?php echo get_cat_name( $cat_id ); ?></h5>
                        <ul>
                            <?php
                            $args = array( 'category' => $cat_id, 'posts_per_page' => 5 );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ){
                                setup_postdata($post);
                                ?>
                                <li>
                                    <div class="news-list-date"><?php the_time('H.i');?></div>
                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                </li>
                                <?php
                            }
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                    <? } ?>

                </div>
            <?php endif; ?>

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