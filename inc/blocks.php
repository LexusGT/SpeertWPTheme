<?php

function speert_share_btn() {
	// add_action('wp_enqueue_scripts', 'speert_share_btn_scripts');

	$html = '<ul class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter">';
	$html .= '<li><a href="#" class="icon-share icon-vkontakte"></a></li>';
	$html .= '<li><a href="#" class="icon-share icon-twitter"></a></li>';
	$html .= '<li><a href="#" class="icon-share icon-facebook"></a></li>';
	$html .= '<li><a href="#" class="icon-share icon-odnoklassniki"></a></li>';
	$html .= '<li><a href="#" class="icon-share icon-gplus"></a></li>';
	$html .= '</ul>';

	echo $html;
}
// function speert_share_btn_scripts() {
// 	wp_enqueue_scripts( 'speert-share-1', '//yastatic.net/es5-shims/0.0.2/es5-shims.min.js', '', null, true);
// 	wp_enqueue_scripts( 'speert-share-2', '//yastatic.net/share2/share.js', array('speert-share-1'), null, true);
// }

function speert_the_excerpt($post) {
	if ( !has_excerpt($post) ) return false;

	$excerpt = get_the_excerpt($post);
	
	echo '<div class="page-desc">'. $excerpt .'</div>';
}

function speert_the_next_post($post) {
	$html = '<a href="#" class="page-next-img" style="background-image: url('. get_bloginfo('template_url') .'/img/preview/next.jpg)"></a>';
	$html .= '<div class="page-next-link"><a href="#">There’s much more in store for Laura Muir, says Kelly</a></div>';
	$html .= '<div class="page-next-btn"><a href="#">Next →</a></div>';
	echo $html;
}
?>