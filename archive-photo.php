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
            <div class="col-lg-12 page-content-text">
                <?php $posts = get_posts( array('post_type' => 'photo', 'numberposts' => 8) ); ?>
                <?php if ( !empty($posts) ) : ?>
                    <!-- Start Gallery -->
                        <div class="no-gutters img-cat">
                            <?php foreach ($posts as $post) { ?>
                            <?php setup_postdata($post); ?>
                            <div class="img-cat-item">
                                <a href="<?php the_permalink();?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($post, 'm-m') ?>" alt="">
                                    <div class="img-cat-item-more">
                                        <span class="icon-eye-1">28 </span>
                                        <span class="archive-item-left-more-separator"></span>
                                        <span class="icon-comment-1">0</span>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>

                            <div class="clear"></div>
                        </div>
                        <div class="row">
                            <a href="#" class="btn_showmore">Show more</a>
                        </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>


        


<?php get_template_part('template-parts/last-comments'); ?>

<?php get_footer(); ?>