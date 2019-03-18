<?php speert_banner_right_sidebar(); ?>

<div class="rightbar-popular">
    <h4>The most <strong>popular</strong></h4>

    <?php
    $args = array( 'numberposts' => 4, 'meta_key' => speert_get_type_sort_popular(), 'orderby' => 'meta_value_num', 'order' => 'DESC' );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ){
        setup_postdata($post);
        ?>
        <div class="rightbar-popular-top">
            <a href="<?php the_permalink(); ?>"><img class="rightbar-popular-top-img" src="<?php echo get_the_post_thumbnail_url($post, 's-m') ?>" alt=""></a>
            <div class="rightbar-popular-top-text">
                <div class="rightbar-popular-link"><a href="#"><?php the_title(); ?></a></div>
                <div class="rightbar-popular-info"><?php echo speert_category( $post, '', '', null ); ?> / <?php echo get_the_date(); ?></div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>
</div>