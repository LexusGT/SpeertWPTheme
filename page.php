<?php get_header(); ?>
<?php the_post(); ?>
<!-- End Header -->
<section class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-1 page-head-share">
                <?php speert_share_btn(); ?>
            </div>
            <div class="col-md-12 col-lg-9 page-head-center">
                <h1><?php the_title(); ?></h1>
                <?php speert_the_excerpt($post); ?>
                <div class="page-more"><?php speert_meta($post); ?></div>
            </div>
            <div class="col-md-3 col-lg-2 page-next"><?php speert_the_next_post($post); ?></div>
        </div>
    </div>
</section>
<section class="page-content">
    <div class="container">
        <div>
            <?php
            $attr = array('class' => "page-content-thumb");
            if ( has_post_thumbnail() )
                the_post_thumbnail( 'full', $attr );
            else
                echo '<div class="page-head-line"></div>';
            ?>
            <?php
            $caption = get_the_post_thumbnail_caption();
            if ( !empty($caption) )
                echo '<div class="page-content-thumb-desc">'. $caption .'</div>';
            else 
                echo '<div class="page-content-thumb-pd"></div>';
            ?>
        </div>
        <div class="row">
            <div class="col-lg-8 page-content-text">

                <?php the_content(); ?>

                <div class="page-content-bottom">
                    <div class="page-more"><?php speert_meta($post); ?></div>
                    <div class="page-bot-share">
                        <?php speert_share_btn(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 rightbar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Start Comments -->
<?php comments_template(); ?>
<!-- End Comments -->
<!-- Start Popular -->
<?php get_template_part('template-parts/popular-news') ?>
<!-- End Popular -->
<?php get_footer(); ?>