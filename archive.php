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
                            <a href="<?php echo get_category_link( $ancestors[0] ); ?>"><?php _e('Category'); ?></a>
                        </div>
                        <div class="page-content-articles">
                            <?php speert_the_count_posts_archive('category'); ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="page-content-text">
                    <?php if (have_posts()) : ?>
                        <?php 
                        while (have_posts()) : the_post(); 

                            get_template_part('template-parts/archive-post-one');

                        endwhile; 
                        ?>
                    </div>
                    <div class="row">
                        <?php get_template_part('inc/pagination'); ?>
                    </div>

                    <?php else: ?>

                        <div class="search-page">
                            <h3><?php _e('Sorry, there are no entries in this category'); ?></h3>
                            <form action="/" method="get" class="search-form">
                                <input type="search" name="s" placeholder="Lost something?">
                                <button type="submit" value="Search"><?php _e('Search'); ?></button>
                            </form>
                        </div>
                        <div class="row no-gutters align-items-center justify-content-between section-head">
                            <div class="section-head-left">
                                <h2 class="exempt"><?php _e('Popular news'); ?></h2>
                            </div>
                        </div>
                        <div class="row no-gutters">

                            <?php
                            $args = array( 'numberposts' => 3 );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ){
                                setup_postdata($post);
                                get_template_part('template-parts/archive-post-one');
                            }
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>

                <?php endif;?>

            </div>
            <div class="col-lg-4 rightbar">
                <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/last-comments'); ?>

<?php get_footer(); ?>