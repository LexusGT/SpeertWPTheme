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
                        <a href="<?php echo get_post_type_archive_link('photo'); ?>">Images</a>
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
                <figure>
                    <?php
                    $attr = array('class' => "page-content-thumb");
                    the_post_thumbnail( 'full', $attr );

                    $caption = get_the_post_thumbnail_caption();
                    if ( !empty($caption) )
                        echo '<figcaption class="wp-caption-text">'. $caption .'</figcaption>';
                    ?>
                </figure>
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