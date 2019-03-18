<?php get_header(); ?>

<section class="page-head">
    <div class="container">

        <div class="row">
            <div class="col-md-12 page-head-center">
                <?php the_archive_title( '<h1>', '</h1>' ); ?>

                <?php
                $description = get_field('description_videos', 'option');
                if ( !empty($description) ) echo '<div class="page-desc">'. $description .'</div>';
                ?>
            </div>
        </div>

        <div class="row video">
            <?php
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $posts = get_posts( array('post_type' => 'video', 'paged' => $current_page, 'posts_per_page' => 8) );
            ?>

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

        <div class="row">
            <?php the_posts_pagination(); ?>
        </div>

    </div>
</section>
<?php get_footer(); ?>