<div class="latest-item">
    <a href="<?php the_permalink(); ?>">
        <div class="latest-item-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
    </a>
    <div class="latest-item-wrap">
        <div class="latest-item-wrap-head"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="latest-item-wrap-text"><?php the_excerpt(); ?></div>
        <div class="latest-item-wrap-more">
            <p><?php echo speert_category( $post, '', '', null ); ?> / <?php echo get_the_date(); ?></p>
            <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
            <span class="popular-item-more-separator"></span>
            <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
        </div>
    </div>
</div>