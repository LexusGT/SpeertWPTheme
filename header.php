<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Start Header -->
    <div class="container-fluid header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-auto header-logotype"><a href="<?php site_url(); ?>"><?php the_custom_logo(); ?></a></div>
                <div class="header-menu">
                    <?php
                    if ( has_nav_menu( 'header_menu' ) ) {
                        wp_nav_menu( array('theme_location' => 'header_menu', 'menu_id' => 'header_menu') );
                    }
                    ?>
                </div>
                <div class="header-search"></div>
                <div class="header-menu-btn"></div>
            </div>
        </div>
        <div class="row search-wrap">
            <div class="container">
                <form action="/" class="search-form">
                    <input type="search" name="s" placeholder="Lost something?">
                    <button type="submit" name="submit" value="Search">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Header -->