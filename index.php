<?php get_header(); ?>

<!-- Start Main Block -->
<div class="container-fluid color_bg">
    <div class="container padding_bg n-mob">
        <div class="row white_bg">
            <?php $posts_slider = get_field( "posts_home_slider", "option" ); ?>
            
            <?php if ( $posts_slider ) : ?>
                <div class="col-lg-8 slider">

                    <?php foreach ($posts_slider as $post) { setup_postdata($post); ?>
                        <div class="slider-item">

                            <div class="slider-item-img">
                                <?php 
                                $thumbnailSlider = get_the_post_thumbnail($post, 'thumb-big', array('itemprop'=>'image'));
                                echo $thumbnailSlider;
                                ?>
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
                            <?
                            $style = '';
                            $thumbUrl = get_the_post_thumbnail_url($post, 's-m');
                            if ( !empty($thumbUrl) )
                                $style = 'style="background-image: url('. $thumbUrl .');"';
                            ?>
                            <div class="hot-news-item">
                                <div class="hot-news-item-img" <?php echo $style; ?>></div>
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
        <?php get_template_part('template-parts/popular-news') ?>
        <!-- End popular Block -->

        <section class="container gutter">
            <div class="row no-gutters align-items-center justify-content-between section-head">
                <div class="section-head-left">
                    <h2>Latest Articles</h2>
                </div>
                <?
                $pageArchive = get_option('speert_page_latest');
                if ( !empty($pageArchive) )
                    echo '<div class="section-head-right"><a href="'. get_page_link($pageArchive) .'">Show more</a></div>'; 
                ?>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    $args = array( 'numberposts' => 3 );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){
                        setup_postdata($post);
                        get_template_part('template-parts/archive-post-one');
                    }
                    wp_reset_postdata();
                    ?>

                    <?
                    if ( !empty($pageArchive) )
                        echo '<a href="'. get_page_link($pageArchive) .'" class="btn_showmore">Show more</a>'; 
                    ?>
                </div>

                <div class="col-lg-4">
                    <div class="pdt20"></div>
                    <?php speert_banner_right_sidebar(); ?>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/top-video') ?>
        <?php get_template_part('template-parts/block-archive') ?>
        <?php get_template_part('template-parts/block-gallery') ?>

        <!-- Finish Gallery -->
        <?php get_footer(); ?>