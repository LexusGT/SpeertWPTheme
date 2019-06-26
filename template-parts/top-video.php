<?php $posts = get_posts( array('post_type' => 'video', 'numberposts' => 2) ); ?>

<?php if ( !empty($posts) ) : ?>

    <section class="container gutter">
        <div class="row no-gutters align-items-center justify-content-between section-head">
            <div class="section-head-left">
                <h2>Top video</h2>
            </div>
            <div class="section-head-right"><a href="<?php echo get_post_type_archive_link('video'); ?>">Show more</a></div>
        </div>
        <div class="row video">

            <?php foreach ($posts as $post) { ?>
            <?php setup_postdata($post); ?>
            <div <?php post_class('col-md-6 video-item'); ?>>
                <div style="padding:56.25% 0 0 0;position:relative;" class="video-item-block">
                    <iframe src="<?php echo speert_url_video($post->ID); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <a href="<?php the_permalink();?>" class="video-item-head"><?php the_title(); ?></a>
                <div class="video-item-more align-items-center">
                    <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
                    <span class="popular-item-more-separator"></span>
                    <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
                </div>
            </div>
            <?php } ?>

            <a href="#" class="btn_showmore">Show more</a>
        </div>
    </section>

<?php endif; ?>