<section class="container gutter">
    <?php
    $titleBlock = get_field( "name_block_after_for_top_video", "option" );
    $postsBlock = get_field( "posts_block_after_for_top_video", "option" );
    ?>

    <?php if ( empty($titleBlock) || empty($postsBlock) ) : ?>
        <div class="row no-gutters">
            <h2>не выбран заголовок и/или посты</h2>
        </div>
    <?php else : ?> 
        <div class="row no-gutters align-items-center justify-content-between section-head">
            <div class="section-head-left">
                <h2><?php echo $titleBlock; ?></h2>
            </div>
            <div class="section-head-right"><a href="#">Show more</a></div>
        </div>
        <div class="row no-gutters">
            <div class="archive float-md-left">
                <?php
                foreach ($postsBlock as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="archive-item">
                        <div class="col-lg-6 archive-item-left">
                            <a href="<?php the_permalink();?>">
                                <div class="archive-item-left-img" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'm-m') ?>);"></div>
                            </a>
                            <div class="archive-item-left-more align-items-center">
                                <span class="icon-eye-1"><?php speert_the_views($post->ID); ?> </span>
                                <span class="archive-item-left-more-separator"></span>
                                <span class="icon-comment-1"><?php comments_number( 0, 1, '%' ); ?></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="archive-item-wrap">
                                <div class="archive-item-wrap-date"><?php echo speert_category( $post, '', '', true ); ?> / <?php echo get_the_date(); ?></div>
                                <div class="archive-item-wrap-head"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
                                <div class="archive-item-wrap-text"><?php the_excerpt(); ?></div>
                                <div class="archive-item-wrap-link"><a href="<?php the_permalink();?>">Continue reading</a></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <?php wp_reset_postdata(); ?>
                
                <!-- .archive-item -->
                <div class="clear"></div>
                <div class="loadmore"><a href="#">Load more</a></div>
            </div><!-- /.archive -->
        </div><!-- /.row -->
    <?php endif; ?>

</section>