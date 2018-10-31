<?php

/**
 * Admin
 */
require get_template_directory() . '/inc/admin.php';

/**
 * Meta
 */
require get_template_directory() . '/inc/meta.php';

/**
 * Views
 */
require get_template_directory() . '/inc/views.php';

/**
 * Post type
 */
require get_template_directory() . '/inc/post-type.php';

/**
 * Ad
 */
require get_template_directory() . '/inc/ad.php';

// Setup theme
function speert_setup() {
	load_theme_textdomain( 'lng_speert' ); // localization
	add_theme_support( 'title-tag' ); // выводим Title на всех страницах
	// настройка логотипа через Customizer
	add_theme_support( 'custom-logo', array( 
		'height'			=> 30,
		'width'			=> 150,
		'flex-width'	=> true
	));
	add_theme_support( 'post-thumbnails' ); // подключение миниатюр
	set_post_thumbnail_size (900,480);

	/*
     * Add new image size
     */
	$thumb_big_sizes  = apply_filters( 'speert_thumb_big_sizes', array( 747, 480, true ) );
    // $thumb_wide_sizes = apply_filters( 'speert_thumb_wide_sizes', array( 330, 140, true ) );
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'thumb-big', $thumb_big_sizes[0], $thumb_big_sizes[1], $thumb_big_sizes[2]);
        // add_image_size( 'thumb-wide', $thumb_wide_sizes[0], $thumb_wide_sizes[1], $thumb_wide_sizes[2] );
	}

	//Включает поддержку html5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	));

	//Включает форматы постов
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'gallery'
	));

	// register Menu
	register_nav_menus( array(
		'header_menu' 		 => esc_html__( 'Header menu', 'speert' ),
		'footer_quick_links' => esc_html__( 'Quick Links', 'speert' ),
		'footer_information' => esc_html__( 'Information', 'speert' ),
	) );

}
add_action( 'after_setup_theme', 'speert_setup' );

// Функция вывода меню, для подвала
function speert_list_menu($menu_name, $list_name) {
	$locations = get_nav_menu_locations();

	if( $locations && isset($locations[ $menu_name ]) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		$menu_items = wp_get_nav_menu_items( $menu );

	// создаем список
		$menu_list = '<ul class="footer-menu menu-' . $menu_name . '">';

		foreach ( (array) $menu_items as $key => $menu_item ){
			$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
		}

		$menu_list .= '</ul>';

		if ( !empty($menu_list) ) {

			$block = '<div class="col-xs-6 col-lg-2 col-md-3">';
			$block .= '<h5>' . $list_name . '</h5>' . $menu_list . '</div>';
			echo $block;

		}

	}
}

// Регистрируем новый размер миниатюр
add_image_size( 'm-m', 580, 300, true );
add_image_size( 's-s', 394, 210 );
add_image_size( 'x-x', 288, 154 );

// Удаляем создание стандартных миниатюр
function speert_remove_image_sizes( $sizes) {
	unset( $sizes['thumbnail']);
	unset( $sizes['medium']);
	unset( $sizes['large']);
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'speert_remove_image_sizes');


// include Style & Script
add_action( 'wp_enqueue_scripts', 'speert_name_scripts' );
function speert_name_scripts() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'style-min', get_stylesheet_directory_uri().'/css/main.min.css' );
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri().'/libs/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri().'/libs/slick/slick-theme.css' );
	wp_enqueue_script( 'script-min', get_template_directory_uri() . '/js/scripts.min.js', array(), false, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/libs/slick/slick.min.js', array(), false, true );
	wp_localize_script( 'script-min', 'speert_ajax', array('url' => admin_url('admin-ajax.php')) ); 
}

// Настройка отрывка поста: кол-во выводимых слов
function new_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Настройка отрывка поста: символы в конце отрывка
add_filter('excerpt_more', function($more) {
	return ' ...';
});

// Customizer Setup
function speert_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
	$wp_customize->add_setting( 'footer_copyright' , array(
		'default'   => __('© 2018 Speert theme. All rights reserved.', 'speert'),
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'footer_about' , array(
		'default'   => __('Add text to the theme settings', 'speert'),
		'transport' => 'refresh',
	));

	$wp_customize->add_section( 'footer_section' , array(
		'title'      => __( 'Footer setting', 'speert' ),
		'priority'   => 40,
	));

	$wp_customize->add_control(
		'footer_copyright', 
		array(
			'label'    => __( 'Footer copyright', 'speert' ),
			'section'  => 'footer_section',
			'settings' => 'footer_copyright', //id настройки
			'type'     => 'text',
		)
	);

	$wp_customize->add_control(
		'footer_about', 
		array(
			'label'    => __( 'Footer about text', 'speert' ),
			'section'  => 'footer_section',
			'settings' => 'footer_about', //id настройки
			'type'     => 'textarea',
		)
	);

}
add_action( 'customize_register', 'speert_customize_register' );

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

?>