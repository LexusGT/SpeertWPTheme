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
                    <?php wp_reset_postdata(); ?>

                </div>
            <? else : ?>
                Посты не выбраны в админке
            <?php endif; ?>

            <?php $posts_slider_right = get_field( "posts_home_right_slider", "option" ); ?>
            <?php if ( $posts_slider_right ) : ?>
                <div class="col-lg-4 hot-news">

                    <?php foreach ($posts_slider_right as $post) { setup_postdata($post); ?>
                    <div class="hot-news-item">
                        <div class="hot-news-item-img" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'x-x') ?>);"></div>
                        <div class="hot-news-item-wrap">
                            <a class="hot-news-item-head" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <div class="hot-news-item-info"><?php echo speert_category( $post, '', '', null ); ?> / <?php echo get_the_date(); ?></div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            <? else : ?>
                Посты не выбраны в админке
            <?php endif; ?>

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

<!-- Popular Block -->
<?php include('template-parts/popular-news.php') ?>
<!-- End popular Block -->

<section class="container gutter">
    <div class="row no-gutters align-items-center justify-content-between section-head">
        <div class="section-head-left">
            <h2>Latest Articles</h2>
        </div>
        <div class="section-head-right"><a href="#">Show more</a></div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <?php
            $args = array( 'numberposts' => 3 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){
                setup_postdata($post);
                ?>
                <div class="latest-item">
                    <a href="<?php the_permalink();?>">
                        <div class="latest-item-img" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'm-m') ?>);"></div>
                    </a>
                    <div class="latest-item-wrap">
                        <div class="latest-item-wrap-head">
                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        </div>
                        <div class="latest-item-wrap-text"><?php the_excerpt(); ?></div>
                        <div class="latest-item-wrap-more">
                            <p><?php echo speert_category( $post, '', '', true ); ?> / <?php echo get_the_date(); ?></p>
                            <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
                            <span class="popular-item-more-separator"></span>
                            <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <a href="#" class="btn_showmore">Show more</a>
        <div class="col-lg-4">
            <div class="banner-block"><a href="#"><img src="/wp-content/themes/app/img/preview/banner-1.jpg" alt=""></a></div>
        </div>
    </div>
</section>

<?php include('template-parts/top-video.php') ?>
<?php include('template-parts/block-archive.php') ?>
<?php include('template-parts/block-gallery.php') ?>

<!-- Finish Gallery -->
<?php get_footer(); ?>