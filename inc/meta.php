<?php

if ( ! function_exists( 'speert_category' ) ) {

	/**
	 * @param bool $post
	 * @param string $classes
	 * @param bool $micro
	 * @param bool $link
	 * @return bool|string
	 */
	function speert_category( $post = false, $classes = '', $micro = true, $link = true ) {

		if ( ! $post = get_post( $post ) )
			return false;

		$classes_out = '';
		if ( ! empty( $classes ) ) $classes_out = ' class="' . $classes . '"';

		$category = get_the_category( $post->ID );
		$cat_id = $category[0]->cat_ID;

		if ( class_exists( 'WPSEO_Primary_Term' ) ) {
			$primary_cat = new WPSEO_Primary_Term('category', $post->ID);
			$primary_cat = $primary_cat->get_primary_term();
			if ( $primary_cat ) {
				$cat_id = $primary_cat;
			}
		}

		if ( $micro ) {
			$micro_out = ' itemprop="articleSection"';
		} else {
			$micro_out = '';
		}

		if ( $link ) {
			return '<a href="' . get_category_link($cat_id) . '"' . $micro_out . $classes_out . '>' . get_cat_name($cat_id) . '</a>';
		} else if ( $link === null ) {
			return get_cat_name($cat_id);
		} else {
			return '<span' . $micro_out . $classes_out . '>' . get_cat_name($cat_id) . '</span>';
		}

	}

}

function speert_get_count_posts_archive($taxonomy) {
	$obj = get_queried_object();
	$term = get_term( $obj->term_id, $taxonomy );
	return $term->count;
}

function speert_the_count_posts_archive($taxonomy) {
	$count = speert_get_count_posts_archive($taxonomy);
	$text = $count > 1 ? 'Arcticles' : 'Arcticle';
	echo $count . ' ' . $text;
}

function speert_meta($post) {
	$html = '<div class="page-content-crumb">'. speert_category($post) .'</div>';
	$html .= '<div class="page-content-author">'. get_the_author() .'</div>';
	$html .= '<div class="page-content-date">'. get_the_date( '', $post ) .'</div>';
	echo $html;
}