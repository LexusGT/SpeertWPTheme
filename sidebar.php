<?php speert_banner_right_sidebar(); ?>

<div class="rightbar-popular">
    <h4>The most <strong>popular</strong></h4>

    <?php
    $args = array( 'numberposts' => 4, 'meta_key' => speert_get_type_sort_popular(), 'orderby' => 'meta_value_num', 'order' => 'DESC' );
    $count = 1;
    $myposts = get_posts( $args );
    foreach( $myposts as $post ){
        setup_postdata($post);
        $sizeThumb = $count == 1 ? 'm-m' : 'ss-ss';
        $classThumb = $count == 1 ? 'rightbar-popular-top-img' : 'rightbar-popular-item-img';
        ?>
        <div class="rightbar-popular-<?php echo $count == 1 ? 'top' : 'item'; ?>">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($sizeThumb, array('itemprop'=>'image', 'class' => $classThumb)); ?></a>
            <div class="rightbar-popular-top-text">
                <div class="rightbar-popular-link"><a href="#"><?php the_title(); ?></a></div>
                <div class="rightbar-popular-info"><?php echo speert_category( $post, '', '', null ); ?> / <?php echo get_the_date(); ?></div>
            </div>
        </div>
        <?php
        $count++;
    }
    wp_reset_postdata();
    ?>
</div>