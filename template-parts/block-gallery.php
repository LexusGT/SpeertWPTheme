<?php $posts = get_posts( array('post_type' => 'photo', 'numberposts' => 8) ); ?>

<?php if ( !empty($posts) ) : ?>

    <!-- Start Gallery -->
    <section class="container gutter">
        <div class="row no-gutters align-items-center justify-content-between section-head">
            <div class="section-head-left">
                <h2>Gallery</h2>
            </div>
            <div class="section-head-right"><a href="<?php echo get_post_type_archive_link('photo'); ?>">Show more</a></div>
        </div>
        <div class="no-gutters gallery-wrap">

            <?php foreach ($posts as $post) { ?>
            <?php setup_postdata($post); ?>
            <div class="gallery-item" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'm-m') ?>);">
                <a href="<?php the_permalink();?>">
                    <div class="gallery-item-more align-items-center">
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
    </section>

<?php endif; ?>