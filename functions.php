<?php
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
	register_nav_menu( 'header_menu', 'Header_menu' );

}
add_action( 'after_setup_theme', 'speert_setup' );

// Регистрируем новый размер миниатюр
add_image_size( 'm-m', 580, 300, true );
add_image_size( 's-s', 394, 210 );
add_image_size( 'x-x', 288, 154 );

// Удаляем создание стандартных миниатюр
function wplift_remove_image_sizes( $sizes) {
        unset( $sizes['thumbnail']);
        unset( $sizes['medium']);
        unset( $sizes['large']);
        return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'wplift_remove_image_sizes');


// include Style & Script
add_action( 'wp_enqueue_scripts', 'speert_name_scripts' );
function speert_name_scripts() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'style-min', get_stylesheet_directory_uri().'/css/main.min.css' );
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri().'/libs/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri().'/libs/slick/slick-theme.css' );
	wp_enqueue_script( 'script-min', get_template_directory_uri() . '/js/scripts.min.js', array(), false, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/libs/slick/slick.min.js', array(), false, true );
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

/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews() {
/* ------------ Настройки -------------- */
$meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
$who_count      = 1;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

global $user_ID, $post;
	if(is_singular()) {
		$id = (int)$post->ID;
		static $post_views = false;
		if($post_views) return true; // чтобы 1 раз за поток
		$post_views = (int)get_post_meta($id,$meta_key, true);
		$should_count = false;
		switch( (int)$who_count ) {
			case 0: $should_count = true;
				break;
			case 1:
				if( (int)$user_ID == 0 )
					$should_count = true;
				break;
			case 2:
				if( (int)$user_ID > 0 )
					$should_count = true;
				break;
		}
		if( (int)$exclude_bots==1 && $should_count ){
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
			$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
				$should_count = false;
		}
		if($should_count)
			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
	}
	return true;
}

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

?>