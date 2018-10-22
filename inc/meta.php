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