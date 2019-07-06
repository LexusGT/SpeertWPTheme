<?php

add_action('init', 'speert_register_post_type');
function speert_register_post_type() {

	$namePhoto = __('Photo');
	$namephoto = __('photo');

	register_post_type('photo', array(
		'labels'             => array(
			'name'               => $namePhoto,
			'singular_name'      => $namePhoto,
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое '. $namephoto,
			'edit_item'          => 'Редактировать '. $namephoto,
			'new_item'           => 'Новое '. $namephoto,
			'view_item'          => 'Посмотреть '. $namephoto,
			'search_items'       => 'Найти '. $namephoto,
			'not_found'          => $namePhoto.' не найдено',
			'not_found_in_trash' => 'В корзине '. $namephoto .' не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => $namePhoto

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 21,
		'exclude_from_search'=> true,
		'menu_icon'			 => 'dashicons-format-gallery',
		'supports'           => array('title','editor','author','thumbnail','comments')
	) );


	$nameVideo = __('Video');
	$namevideo = __('video');

	register_post_type('video', array(
		'labels'             => array(
			'name'               => $nameVideo,
			'singular_name'      => $nameVideo,
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое '. $namevideo,
			'edit_item'          => 'Редактировать '. $namevideo,
			'new_item'           => 'Новое '. $namevideo,
			'view_item'          => 'Посмотреть '. $namevideo,
			'search_items'       => 'Найти '. $namevideo,
			'not_found'          => $nameVideo .' не найдено',
			'not_found_in_trash' => 'В корзине '. $namevideo .' не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => $nameVideo

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 21,
		'exclude_from_search'=> true,
		'menu_icon'			 => 'dashicons-format-video',
		'supports'           => array('title','editor','author','comments')
	) );

}