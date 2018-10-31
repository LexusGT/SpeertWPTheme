<?php

add_action('init', 'speert_register_post_type');
function speert_register_post_type() {

	register_post_type('photo', array(
		'labels'             => array(
			'name'               => 'Фото',
			'singular_name'      => 'Фото',
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое фото',
			'edit_item'          => 'Редактировать фото',
			'new_item'           => 'Новое фото',
			'view_item'          => 'Посмотреть фото',
			'search_items'       => 'Найти фото',
			'not_found'          => 'Фото не найдено',
			'not_found_in_trash' => 'В корзине фото не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Фото'

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

	register_post_type('video', array(
		'labels'             => array(
			'name'               => 'Видео',
			'singular_name'      => 'Видео',
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое видео',
			'edit_item'          => 'Редактировать видео',
			'new_item'           => 'Новое видео',
			'view_item'          => 'Посмотреть видео',
			'search_items'       => 'Найти видео',
			'not_found'          => 'Видео не найдено',
			'not_found_in_trash' => 'В корзине видео не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Видео'

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