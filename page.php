<?php get_header(); ?>
<?php the_post(); ?>
<!-- End Header -->
<section class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-12 page-head-center">
                <h1 class="mod"><?php the_title(); ?></h1>
                <?php speert_the_excerpt($post); ?>
            </div>
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
            ?>
            <?php
            $caption = get_the_post_thumbnail_caption();
            if ( !empty($caption) )
                echo '<div class="page-content-thumb-desc">'. $caption .'</div>';
            ?>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 page-content-text">

                <!-- <?php the_content(); ?> -->
                <div class="adress-wrap">
                    <div class="adress-item">
                        <div class="adress-icon adress-icon-phone"></div>
                        <h4>Phone:</h4>
                        <p><a href="tel:+12345678910">+ 1 (234) 56 - 789 - 10</a></p>
                    </div>
                    <div class="adress-item">
                    <div class="adress-icon adress-icon-adress"></div>
                        <h4>Adress:</h4>
                        <p>Los Angeles, St. Avenue, La 2540</p>
                    </div>
                    <div class="adress-item">
                        <div class="adress-icon adress-icon-email"></div>
                        <h4>E-mail:</h4>
                        <p><a href="mailto:info@speertwp.com">info@speertwp.com</a></p>
                    </div>
                </div>
                <div class="adress-form">
                 <?php
                    echo do_shortcode ('[contact-form-7 id="194" title="contact form"]')
                 ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>