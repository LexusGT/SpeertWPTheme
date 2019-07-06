<?php get_header(); ?>
<?php the_post(); ?>
<!-- End Header -->
<section class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?php the_title(); ?></h1>
                <div class="page-desc"><?php speert_the_excerpt($post); ?></div>
                <div class="page-more">
                    <div class="page-content-crumb">
                        <a href="<?php echo get_post_type_archive_link('video'); ?>"><?php _e('Videos'); ?></a>
                    </div>
                    <div class="page-content-author">
                        <?php echo get_the_author(); ?>
                    </div>
                    <div class="page-content-date">
                        <?php echo get_the_date( '', $post ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <p>
                    <div style="padding:56.25% 0 0 0;position:relative;">
                        <iframe src="<?php echo speert_url_video($post->ID); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </p>
            </div>
            <div class="col-lg-8 offset-lg-2 page-content-text">
                <?php the_content(); ?>
                <div class="page-bot-share mod">
                    <?php speert_share_btn(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Comments -->
<?php comments_template(); ?>
<!-- End Comments -->
<?php get_footer(); ?>