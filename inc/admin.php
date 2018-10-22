<?php
/**
 * ****************************************************************************
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *
 *   ВНИМАНИЕ!!!!!!!
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *   ПРИ ОБНОВЛЕНИИ ТЕМЫ - ВЫ ПОТЕРЯЕТЕ ВСЕ ВАШИ ИЗМЕНЕНИЯ
 *   ИСПОЛЬЗУЙТЕ ДОЧЕРНЮЮ ТЕМУ ИЛИ НАСТРОЙКИ ТЕМЫ В АДМИНКЕ
 *
 * *****************************************************************************
 *
 * @package Speert
 */

 /**
 * Создаем страницу настроек темы
 */
 function speert_acf_options_page() {
 	if ( function_exists( 'acf_add_options_page' ) ) {
 		acf_add_options_page( array(
 			'title'      => 'Site Options',
 			'capability' => 'manage_options',
 		) );
 	}
 }
 add_action( 'init', 'speert_acf_options_page' );

 /**
 * Отменяем отключение custom-fields
 */
 add_filter('acf/settings/remove_wp_meta_box', '__return_false');