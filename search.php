<?php get_header(); ?>

    <section class="page-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-head-center">
                    <h1><?php printf( esc_html__( 'Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    <div class="page-more">
                        <div class="page-content-crumb"><a href="#">Main page</a></div>
                        <div class="page-content-articles">10 results found</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 page-content-text">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="latest-item">
                                <a href="<?php the_permalink() ?>">
                                    <div class="latest-item-img" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></div>

                                </a>
                                <div class="latest-item-wrap">
                                    <div class="latest-item-wrap-head"><a href="<?php the_permalink() ?>"><?php the_title()?></a></div>
                                    <div class="latest-item-wrap-text"><?php the_excerpt()?></div>
                                    <div class="latest-item-wrap-more">
                                        <p><a href="#">Athletics</a> / <?php the_time('d M Y');?>
                                            <p> <span class="icon-eye-1">28 </span><span class="popular-item-more-separator"></span><span class="icon-comment-1">33</span></div>
                                </div>
                            </div>
                        <?php endwhile;?>
                        <div class="loadmore"><a href="#">Load more</a></div>
                    <?php else:?>
                        <div class="search-page">
                            <h3>Sorry, we couldn't find any matches for: <span><?php printf( get_search_query());?></span></h3>
                            <form class="search-form">
                                <input type="search" name="s" placeholder="Lost something?">
                                <button type="submit" name="submit" value="Search">Search</button>
                            </form>
                        </div>
                        <div class="row no-gutters align-items-center justify-content-between section-head">
                            <div class="section-head-left">
                                <h2 class="exempt">Popular news</h2>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="latest-item">
                                <a href="#">
                                    <div class="latest-item-img" style="background-image: url(/img/preview/latest-1.jpg);"></div>
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
                                    <div class="latest-item-img" style="background-image: url(/img/preview/latest-1.jpg);"></div>
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
                                    <div class="latest-item-img" style="background-image: url(/img/preview/latest-1.jpg);"></div>
                                </a>
                                <div class="latest-item-wrap">
                                    <div class="latest-item-wrap-head"><a href="#">Sacrifices and singing as Jazmin Sawyers goes for Gold Coast glory</a></div>
                                    <div class="latest-item-wrap-text">The Commonwealth long jump silver medallist on the changes she has made and her experience recording the official anthem of Commonwealth Games England</div>
                                    <div class="latest-item-wrap-more">
                                        <p><a href="#">Athletics</a> / 28 feb 2018
                                            <p> <span class="icon-eye-1">28 </span><span class="popular-item-more-separator"></span><span class="icon-comment-1">33</span></div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    
                </div>
                <div class="col-lg-4 rightbar">
                    <div class="banner"><a href="#"><img src="<? echo get_bloginfo('template_url'); ?>/img/preview/banner-1.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </section>
 <?php get_footer(); ?>