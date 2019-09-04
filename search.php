<?php get_header(); ?>

<section class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-head-center">
                <h1><?php printf( esc_html__( __('Results for:') . ' %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
                <div class="page-more">
                    <div class="page-content-crumb">
                        <a href="<?php echo home_url(); ?>"><?php _e('Main page'); ?></a>
                    </div>
                    <?php global $wp_query; ?>
                    <div class="page-content-articles"><?php echo $wp_query->found_posts; ?> <?php _e('results found'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="page-content-text">
                        <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php get_template_part('template-parts/archive-post-one'); ?>

                        <?php endwhile;?>
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

                <?php endif;?>

            </div>

            <div class="col-lg-4 rightbar"><?php speert_banner_right_sidebar(); ?></div>

        </div>
    </div>
</section>


<?php get_footer(); ?>