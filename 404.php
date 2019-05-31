<?php get_header(); ?>
    <!-- End Header -->
    <section class="page-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-head-center">
                    <h1>Oops! This page doesn`t exist.</h1>
                    <div class="page-more">
                        <div class="page-content-crumb">
                            <a href="<?php echo home_url(); ?>">Main page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-content-text">
                    <div class="search-page center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/404.svg" alt="Error 404" class="img404">
                        <h3>Error 404</h3>
                        <form action="/" method="get" class="search-form">
                            <input type="search" name="s" placeholder="Lost something?">
                            <button type="submit" value="Search">Search</button>
                        </form>
                    </div>
                    <!-- Popular Block -->
                    <?php get_template_part('template-parts/popular-news') ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>