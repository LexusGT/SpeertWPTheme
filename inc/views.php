<?php

add_action('wp_footer', 'speert_postviews_javascript', 99);
function speert_postviews_javascript() {
	if ( !is_single() ) return;
	?>
	<script>
		jQuery(document).ready(function($) {
			var data = {
				action: 'speert_postviews',
				post_id: "<?php echo get_the_ID(); ?>"
			};
			jQuery.post( speert_ajax.url, data );
		});
	</script>
	<?php
}

add_action('wp_ajax_speert_postviews', 'speert_postviews_callback');
add_action('wp_ajax_nopriv_speert_postviews', 'speert_postviews_callback');
function speert_postviews_callback() {
// 1 - исключить ботов из подсчета. 0 - нет, пусть тоже считаются.
	$exclude_bots = 1; 

	if ( $exclude_bots == 1 && speert_is_Bot($_SERVER['HTTP_USER_AGENT']) || empty($_POST['post_id']) )
		wp_die();

	/* Определяем переменные */
	$timestamp  = current_time('timestamp');
	$year  		= date('Y', $timestamp);
	$month 		= date('n', $timestamp);
	$week  		= date('W', $timestamp);
	$day   		= date('z', $timestamp);

	$post_id 	= $_POST['post_id'];

	$meta_keys  = array(
		'all_time'  => 'speert_views_all_time',
		'year'  	=> 'speert_views_year_' . $year,
		'month' 	=> 'speert_views_month_' . $month,
		'week'  	=> 'speert_views_week_' . $week,
		'day'   	=> 'speert_views_day_' . $day,
	);

	foreach ($meta_keys as $meta_key) {
		$views = get_post_meta($post_id, $meta_key, true);
		$views = !empty($views) ? $views * 1 + 1 : 1;
		update_post_meta($post_id, $meta_key, $views);
	}

	wp_die();
}

// создаем крон для чистки
add_action( 'wp', 'speert_activation_cron_views' );
function speert_activation_cron_views() {
	if( ! wp_next_scheduled( 'speert_views' ) ) {
		$difference = 24 - get_option('gmt_offset');
		$toTime = strtotime('00:00:59') + HOUR_IN_SECONDS * $difference;
		wp_schedule_event( $toTime, 'daily', 'speert_views');
	}
}
// в 00:00:59 по локальному времени чистим данные за прошлый день, неделю, месяц
add_action( 'speert_views', 'speert_views_clear' );
function speert_views_clear() {
	global $wpdb;
	
	$timestamp 	  = current_time('timestamp');
	$day   		  = date('z', $timestamp) * 1 - 1;

	$meta_keys 	  = array(
		'day' => 'speert_views_day_' . $day,
	);

	if ( date('j', $timestamp) == 1 ) {
		$month = date('n', $timestamp) * 1 - 1;
		$meta_keys['month'] = 'speert_views_month_' . $month;
	}
	if ( date('N', $timestamp) == 1 ) {
		$week = date('W', $timestamp) * 1 - 1;
		$meta_keys['week'] = 'speert_views_week_' . $week;
	}

	foreach( $meta_keys as $meta_key ){
		$wpdb->delete( $wpdb->postmeta, array('meta_key'=>$meta_key) );
	}
}

// выдаем выбранный способ сортировки в админке: 'meta_key' => speert_get_type_sort_popular(), 'orderby' => 'meta_value_num'
function speert_get_type_sort_popular() {
	$type = get_field('sort_popular', 'option');

	$timestamp  = current_time('timestamp');
	$year  		= date('Y', $timestamp);
	$month 		= date('n', $timestamp);
	$week  		= date('W', $timestamp);
	$day   		= date('z', $timestamp);

	$meta_keys  = array(
		'all_time'  => 'speert_views_all_time',
		'year'  	=> 'speert_views_year_' . $year,
		'month' 	=> 'speert_views_month_' . $month,
		'week'  	=> 'speert_views_week_' . $week,
		'day'   	=> 'speert_views_day_' . $day,
	);

	return $meta_keys[$type];
}

function speert_is_Bot($agent) {
	$bots = array(
		'rambler','googlebot','aport','yahoo','msnbot','turtle','mail.ru','omsktele',
		'yetibot','picsearch','sape.bot','sape_context','gigabot','snapbot','alexa.com',
		'megadownload.net','askpeter.info','igde.ru','ask.com','qwartabot','yanga.co.uk',
		'scoutjet','similarpages','oozbot','shrinktheweb.com','aboutusbot','followsite.com',
		'dataparksearch','google-sitemaps','appEngine-google','feedfetcher-google',
		'liveinternet.ru','xml-sitemaps.com','agama','metadatalabs.com','h1.hrn.ru',
		'googlealert.com','seo-rus.com','yaDirectBot','yandeG','yandex',
		'yandexSomething','Copyscape.com','AdsBot-Google','domaintools.com',
		'Nigma.ru','bing.com','dotnetdotcom'
	);
	foreach ($bots as $bot) {
		if (stripos($agent, $bot) !== false) {
			$botname = $bot;
			return true;
		}
	}
	return false;
}