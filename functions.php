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

/**
 * Ad
 */
require get_template_directory() . '/inc/blocks.php';

/**
 * Load TGM
 */
require get_template_directory() . '/inc/init-tgm.php';

/**
 * Comments
 */
require get_template_directory() . '/inc/comments.php';

/**
 * New buttons for TinyMCE
 */
require get_template_directory() . '/inc/edit_buttons/buttons.php';


// Активация темы
add_action( 'after_switch_theme', 'speert_insert_default_page' );
function speert_insert_default_page() {
	$new_pages = array();

 	// создание страницы: Latest Articles
	$new_pages[0]['title'] = 'Latest Articles';
	$new_pages[0]['content'] = 'Description this page';
	$new_pages[0]['template'] = 'template-archive-latest.php';
	$new_pages[0]['option'] = 'speert_page_latest';

 	// создание страницы: Popular news
	$new_pages[1]['title'] = 'Popular news';
	$new_pages[1]['content'] = 'Description this page';
	$new_pages[1]['template'] = 'template-archive-popular.php';
	$new_pages[1]['option'] = 'speert_page_popular';

 	// создание страницы: Contact
	$new_pages[2]['title'] = 'Contact';
	$new_pages[2]['content'] = '<div class="adress-wrap">
	<div class="adress-item">
	<div class="adress-icon adress-icon-phone"> </div>
	<h4>Phone:</h4>
	<p><a href="tel:+12345678910">+ 1 (234) 56 - 789 - 10</a></p>
	</div>
	<div class="adress-item">
	<div class="adress-icon adress-icon-adress"> </div>
	<h4>Address:</h4>
	<p>Los Angeles, St. Avenue, La 2540</p>
	</div>
	<div class="adress-item">
	<div class="adress-icon adress-icon-email"> </div>
	<h4>E-mail:</h4>
	<p><a href="mailto:info@speertwp.com">info@speertwp.com</a></p>
	</div>
	</div>
	<div class="adress-form">[contact-form-7 id="194" title="contact form"]</div>';
	$new_pages[2]['template'] = '';
	$new_pages[2]['option'] = '';

	foreach ($new_pages as $page) {

		$page_check = get_page_by_title($page['title']);
		$new_page = array(
			'post_type' => 'page',
			'post_title' => $page['title'],
			'post_content' => $page['content'],
			'post_status' => 'publish',
			'post_author' => 1,
		);
		if( !isset($page_check->ID) ){
			$new_page_id = wp_insert_post($new_page);
			if( !empty($page['template']) ) {
				update_post_meta($new_page_id, '_wp_page_template', $page['template']);
			}
			if( !empty($page['option']) ) {
				update_option($page['option'], $new_page_id);
			}
		}

	}

}

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
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'thumb-big', $thumb_big_sizes[0], $thumb_big_sizes[1], $thumb_big_sizes[2]);
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
add_image_size( 's-m', 353, 235 );
add_image_size( 'x-x', 288, 154 );
add_image_size( 'ss-ss', 100, 100, true );

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
	wp_enqueue_style( 'style-min', get_template_directory_uri().'/css/main.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/libs/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/libs/slick/slick-theme.css' );
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
		'default'   => __('© '. date('Y') .' Speert theme. All rights reserved.', 'speert'),
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
			'settings' => 'footer_copyright',
			'type'     => 'text',
		)
	);

	$wp_customize->add_control(
		'footer_about', 
		array(
			'label'    => __( 'Footer about text', 'speert' ),
			'section'  => 'footer_section',
			'settings' => 'footer_about',
			'type'     => 'textarea',
		)
	);

}
add_action( 'customize_register', 'speert_customize_register' );

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

add_filter( 'comment_form_default_fields', 'speert_comment_form_default_add_fields' );
function speert_comment_form_default_add_fields( $fields ) {
	unset( $fields['url'] );

	return $fields;
}

function speert_pre_get_posts( $query ) {
	if ( !is_admin() && $query->is_main_query() && $query->is_post_type_archive(array('video','photo')) ) {
		$query->set( 'posts_per_page', 8 );
	}
}
add_action( 'pre_get_posts', 'speert_pre_get_posts' );

function speert_default_thumbnail() {
	return get_template_directory_uri() . '/img/no_photo.jpg';
}

function speert_url_video($post_id) {
	$url = get_field('url_video', $post_id);
	if ( stripos($url, 'embed') === false ) :
		preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
		$url = 'https://youtube.com/embed/' . $matches[0];
	endif;

	return $url;
}
?>