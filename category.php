<?php get_header(); ?>

    <section class="page-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-head-center">
                    <h1>Features 1</h1>
                    <div class="page-desc">The Commonwealth long jump silver medallist on the changes she has made and her experience recording the official anthem of Commonwealth Games England</div>
                    <div class="page-more">
                        <div class="page-content-crumb"><a href="#">Category</a></div>
                        <div class="page-content-articles">31 Arcticles</div>
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
                            <h3>Sorry, there are no entries in this category</h3>
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
                    <div class="rightbar-popular">
                        <h4>The most <strong>popular</strong></h4>
                        <div class="rightbar-popular-top">
                            <a href="#"><img class="rightbar-popular-top-img" src="<? echo get_bloginfo('template_url'); ?>/img/preview/most-popular-1.jpg" alt=""></a>
                            <div class="rightbar-popular-top-text">
                                <div class="rightbar-popular-link"><a href="#">Rosie Clarke’s experience of getting set for Gold Coast</a></div>
                                <div class="rightbar-popular-info"><a href="#">Athletics</a> / 28 feb 2018</div>
                            </div>
                        </div>
                        <div class="rightbar-popular-item">
                            <a href="#"><img class="rightbar-popular-img" src="<? echo get_bloginfo('template_url'); ?>/img/preview/most-popular-2.jpg" alt=""></a>
                            <div class="rightbar-popular-item-text">
                                <div class="rightbar-popular-link"><a href="#">There’s much more in store for Laura Muir, says Kelly</a></div>
                                <div class="rightbar-popular-info"><a href="#">Athletics</a> / 28 feb 2018</div>
                            </div>
                        </div>
                        <div class="rightbar-popular-item">
                            <a href="#"><img class="rightbar-popular-img" src="<? echo get_bloginfo('template_url'); ?>/img/preview/most-popular-3.jpg" alt=""></a>
                            <div class="rightbar-popular-item-text">
                                <div class="rightbar-popular-link"><a href="#">Sacrifices and singing as Jazmin Sawyers</a></div>
                                <div class="rightbar-popular-info"><a href="#">Athletics</a> / 28 feb 2018</div>
                            </div>
                        </div>
                        <div class="rightbar-popular-item">
                            <a href="#"><img class="rightbar-popular-img" src="<? echo get_bloginfo('template_url'); ?>/img/preview/most-popular-4.jpg" alt=""></a>
                            <div class="rightbar-popular-item-text">
                                <div class="rightbar-popular-link"><a href="#">Rosie Clarke’s experience of getting set for Gold Coast</a></div>
                                <div class="rightbar-popular-info"><a href="#">Athletics</a> / 28 feb 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Popular -->
    <section class="container gutter">
        <div class="row no-gutters align-items-center justify-content-between section-head">
            <div class="section-head-left">
                <h2>Last comments</h2>
            </div>
        </div>
        <div class="row ">
            <div class="last-comments-item">
                <div class="col-lg-6 last-comments-item-left">
                    <a href="#">
                        <div class="last-comments-item-left-img" style="background-image: url(<? echo get_bloginfo('template_url'); ?>/img/preview/archive-1.jpg);"></div>
                    </a>
                    <div class="last-comments-item-left-more align-items-center"><span class="icon-eye-1">28</span><span class="archive-item-left-more-separator"></span><span class="icon-comment-1">33</span></div>
                </div>
                <div class="col-lg-6">
                    <div class="last-comments-item-wrap">
                        <div class="last-comments-item-wrap-head"><a href="#">Williams wins first WTA Tour match after birth of child</a></div>
                        <div class="last-comments-header">
                            <div class="last-comments-avatar">
                                <img alt="" src="http://1.gravatar.com/avatar/7cd369b15b33cf0d18e3130e67731bc2?s=50&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/7cd369b15b33cf0d18e3130e67731bc2?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo" height="50" width="50"> </div>
                            <div class="last-comments-meta">
                                <cite class="last-comments-author" itemprop="creator"><?php the_author_posts_link() ?></cite>
                                <time class="last-comments-time" itemprop="datePublished" datetime="2016-06-16">16.06.2016 в 09:45</time>
                            </div>
                        </div>
                        <div class="last-comments-item-wrap-text">The Scottish double world indoor medallist has decided to miss the Gold Coast Commonwealth Games and double Olympic champion Holmes says she has probably made the right call</div>
                        <div class="last-comments-item-wrap-link"><a href="#">Read comment</a></div>
                    </div>
                </div>
            </div>
            <!-- .archive-item -->
            <div class="last-comments-item">
                <div class="col-lg-6 last-comments-item-left">
                    <a href="#">
                        <div class="last-comments-item-left-img" style="background-image: url(<? echo get_bloginfo('template_url'); ?>/img/preview/archive-1.jpg);"></div>
                    </a>
                    <div class="last-comments-item-left-more align-items-center"><span class="icon-eye-1">28</span><span class="archive-item-left-more-separator"></span><span class="icon-comment-1">33</span></div>
                </div>
                <div class="col-lg-6">
                    <div class="last-comments-item-wrap">
                        <div class="last-comments-item-wrap-head"><a href="#">Williams wins first WTA Tour match after birth of child</a></div>
                        <div class="last-comments-header">
                            <div class="last-comments-avatar">
                                <img alt="" src="http://1.gravatar.com/avatar/7cd369b15b33cf0d18e3130e67731bc2?s=50&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/7cd369b15b33cf0d18e3130e67731bc2?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo" height="50" width="50"> </div>
                            <div class="last-comments-meta">
                                <cite class="last-comments-author" itemprop="creator">Richard Graham</cite>
                                <time class="last-comments-time" itemprop="datePublished" datetime="2016-06-16">16.06.2016 в 09:45</time>
                            </div>
                        </div>
                        <div class="last-comments-item-wrap-text">The Scottish double world indoor medallist has decided to miss the Gold Coast Commonwealth Games and double Olympic champion Holmes says she has probably made the right call</div>
                        <div class="last-comments-item-wrap-link"><a href="#">Read comment</a></div>
                    </div>
                </div>
            </div>
            <!-- .archive-item -->
        </div>
    </section>
    <!-- End Popular -->

       <?php get_footer(); ?>