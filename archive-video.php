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
        <div class="row video">
            <?php foreach ($posts as $post) { ?>
            <?php setup_postdata($post); ?>
            <div class="col-md-6 video-cat-item">
                <div style="padding:56.25% 0 0 0;position:relative;" class="video-item-block">
                    <iframe src="<?php the_field('url_video'); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <a href="<?php the_permalink();?>" class="video-item-head"><?php the_title(); ?></a>
                <div class="video-item-more align-items-center">
                    <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
                    <span class="popular-item-more-separator"></span>
                    <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>