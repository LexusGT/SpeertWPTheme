<?php get_header(); ?>

<section class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-head-center">
                <?php the_archive_title( '<h1>', '</h1>' ); ?>

                <?php
                $description = get_field('description_images', 'option');
                if ( !empty($description) ) echo '<div class="page-desc">'. $description .'</div>';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 page-content-text">

                <?php if( have_posts() ) : ?>

                    <div class="no-gutters img-cat">

                        <?php while( have_posts() ){ the_post(); ?>

                        <div <?php post_class('img-cat-item'); ?>>
                            <a href="<?php the_permalink();?>">
                                <img src="<?php echo get_the_post_thumbnail_url($post, 'm-m') ?>" alt="">
                                <div class="img-cat-item-more">
                                    <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
                                    <span class="archive-item-left-more-separator"></span>
                                    <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
                                </div>
                            </a>
                        </div>

                        <?php } ?>

                        <div class="clear"></div>
                    </div>

                    <div class="row">
                        <?php get_template_part('inc/pagination'); ?>
                    </div>

                <?php endif; ?>

            </div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/last-comments'); ?>

<?php get_footer(); ?>