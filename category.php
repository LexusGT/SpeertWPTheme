<?php get_header(); ?>

<section class="page-head">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 page-head-center">

                <?php the_archive_title( '<h1>', '</h1>' ); ?>
                <div class="page-desc"><?php the_archive_description(); ?></div>

                <?php $ancestors = get_ancestors( get_query_var('cat'), 'category' ); ?>
                <?php if ( !empty($ancestors) ) : ?>
                    <div class="page-more">
                        <div class="page-content-crumb">
                            <a href="<?php echo get_category_link( $ancestors[0] ); ?>">Category</a>
                        </div>
                        <div class="page-content-articles">
                            <?php speert_the_count_posts_archive('category'); ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 page-content-text">

                <?php if (have_posts()) : ?>
                    <?php 
                    while (have_posts()) : the_post(); 

                        get_template_part('template-parts/archive-post-one');

                    endwhile; 
                    ?>

                    <div class="loadmore"><a href="#">Load more</a></div>

                <?php else: ?>

                    <div class="search-page">
                        <h3>Sorry, there are no entries in this category</h3>
                        <form method="get" class="search-form">
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

                        <?php
                        $args = array( 'numberposts' => 3 );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){
                            setup_postdata($post);
                            get_template_part('template-parts/archive-post-one');
                        }
                        wp_reset_postdata();
                        ?>

                    </div>

                <?php endif;?>

            </div>
            <div class="col-lg-4 rightbar">
                <?php speert_banner_right_sidebar(); ?>
                <div class="rightbar-popular">
                    <h4>The most <strong>popular</strong></h4>

                    <?php
                    $args = array( 'numberposts' => 4, 'meta_key' => speert_get_type_sort_popular(), 'orderby' => 'meta_value_num', 'order' => 'DESC' );
                    $myposts = get_posts( $args );
                    $countEach = 1;
                    foreach( $myposts as $post ){
                        setup_postdata($post);
                        ?>
                        <div class="rightbar-popular-<?php echo $countEach == 1 ? 'top' : 'item'; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if ( $countEach == 1 )
                                    the_post_thumbnail('m-m', array('itemprop'=>'image', 'class' => 'rightbar-popular-top-img'));
                                else
                                    the_post_thumbnail('x-x', array('itemprop'=>'image', 'class' => 'rightbar-popular-top-img'));
                                ?>
                            </a>
                            <div class="rightbar-popular-top-text">
                                <div class="rightbar-popular-link"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></div>
                                <div class="rightbar-popular-info"><?php echo speert_category( $post, '', '', true ); ?> / <?php echo get_the_date(); ?></div>
                            </div>
                        </div>
                        <?php
                        $countEach++;
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/last-comments'); ?>

<?php get_footer(); ?>