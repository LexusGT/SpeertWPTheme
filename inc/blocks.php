<?php

function speert_share_btn() {
	$url = '';
	if ( isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on') ) {
		$url .= 'https://';
	} else {
		$url .= 'http://';
	}
	$url .= $_SERVER['SERVER_NAME'];
	$url .= $_SERVER['REQUEST_URI'];


	$html = '<ul class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter">';
	$html .= '<li><a rel="nofollow noopener" target="_blank" href="https://vk.com/share.php?url='. $url .'" class="icon-share icon-vkontakte"></a></li>';
	$html .= '<li><a rel="nofollow noopener" target="_blank" href="https://twitter.com/share?url='. $url .'" class="icon-share icon-twitter"></a></li>';
	$html .= '<li><a rel="nofollow noopener" target="_blank" href="https://www.facebook.com/sharer.php?u='. $url .'" class="icon-share icon-facebook"></a></li>';
	$html .= '<li><a rel="nofollow noopener" target="_blank" href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&service=odnoklassniki&st.shareUrl='. $url .'" class="icon-share icon-odnoklassniki"></a></li>';
	$html .= '<li><a rel="nofollow noopener" target="_blank" href="https://plus.google.com/share?url='. $url .'" class="icon-share icon-gplus"></a></li>';
	$html .= '</ul>';

	echo $html;
}

function speert_the_excerpt($post) {
	if ( !has_excerpt($post) ) return false;

	$excerpt = get_the_excerpt($post);
	
	echo '<div class="page-desc">'. $excerpt .'</div>';
}

function speert_the_next_post($post) {
	$post = get_adjacent_post(false, '', false);
	if ( !$post ) {
		$posts = get_posts(array('numberposts' => 1, 'order' => 'ASC'));
		$post = $posts[0];
	}
	$link = get_permalink($post);
	$title = get_the_title($post);
	$thumb = get_the_post_thumbnail_url( $post, 'x-x' );

	$html = '<a href="'. $link .'" class="page-next-img" style="background-image: url('. $thumb .')"></a>';
	$html .= '<div class="page-next-link"><a href="'. $link .'">'. $title .'</a></div>';
	$html .= '<div class="page-next-btn"><a href="'. $link .'">'. __('Next').' →</a></div>';
	echo $html;
}

function speert_social_network() {
	$html = '';

	$sn = array('fb', 'gl', 'inst', 'ok', 'tg', 'tw', 'vk', 'yt');
	foreach ($sn as $value) {
		$url = get_field('social_' . $value, 'option');
		if ( !empty($url) )
			$html .= '<li><a rel="nofollow noopener" href="'. $url .'" target="_blank" class="footer-social-icon '.$value.'"></a></li>';
	}

	if ( !empty($html) )
		$html = '<ul>'. $html .'</ul>';

	echo $html;
}
?>