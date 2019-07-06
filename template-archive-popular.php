<?
// Template name: Popular Articles
?>
<?php get_header(); ?>
<?php the_post(); ?>

<section class="page-head">
    <div class="container">

        <div class="row">
            <div class="col-md-12 page-head-center">

                <h1><?php the_title(); ?></h1>
                <div class="page-desc"><?php the_content(); ?></div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="page-content-text">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'meta_key' => speert_get_type_sort_popular(),
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC',
                        'paged' => $paged,
                    );
                    query_posts( $args );
                    ?>

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
                    </div>

                <?php endif;?>

                <? wp_reset_query(); ?>

            </div>
            <div class="col-lg-4 rightbar">
                <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/last-comments'); ?>

<?php get_footer(); ?>