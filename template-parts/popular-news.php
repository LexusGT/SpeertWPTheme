<section class="container gutter">
    <div class="row no-gutters align-items-center justify-content-between section-head">
        <div class="section-head-left">
            <h2><?php _e('Popular news'); ?></h2>
        </div>
        <?
        $pagePopular = get_option('speert_page_popular');
        if ( !empty($pagePopular) )
            echo '<div class="section-head-right"><a href="'. get_page_link($pagePopular) .'">'. __('Show more') .'</a></div>'; 
        ?>
    </div>
    
    <div class="row ">

        <?php
        $sizeThumb = 'm-m';

        $args = array( 'numberposts' => 6, 'meta_key' => speert_get_type_sort_popular(), 'orderby' => 'meta_value_num', 'order' => 'DESC' );
        $myposts = get_posts( $args );

        foreach( $myposts as $post ){
            setup_postdata($post);
            ?>
            <div <?php post_class('popular-item'); ?>>
                <a href="<?php the_permalink();?>">
                    <div class="popular-item-img" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, $sizeThumb) ?>);"></div>
                </a>
                <div class="popular-item-head">
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                </div>
                <div class="popular-item-more">
                    <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
                    <span class="popular-item-more-separator"></span>
                    <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>

        <?
        if ( !empty($pagePopular) )
            echo '<a href="'. get_page_link($pagePopular) .'" class="btn_showmore">'. __('Show more') .'</a>'; 
        ?>
    </div>
</section>