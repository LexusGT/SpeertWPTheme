<?php

add_theme_support( 'editor-styles' );
add_editor_style( '/inc/edit_buttons/style-editor.css' );


add_action( 'init', 'speert_btn_buttons' );
function speert_btn_buttons() {
    add_filter( "mce_external_plugins", "speert_btn_add_buttons" );
    add_filter( 'mce_buttons', 'speert_btn_register_buttons' );
}
function speert_btn_add_buttons( $plugin_array ) {
    $plugin_array['speert_btn'] = get_template_directory_uri() . '/inc/edit_buttons/buttons.js';
    return $plugin_array;
}
function speert_btn_register_buttons( $buttons ) {
    array_push( $buttons, 'alert', 'attention', 'question' );
    return $buttons;
}