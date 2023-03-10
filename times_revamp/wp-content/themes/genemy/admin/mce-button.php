<?php
/*Include functions */
global $perch_editor_buttons;
$perch_editor_buttons = array(
     "dropcap",
    "leadtext",
    "colortext",
    "colorbg",
    "highlights",
    "bpbutton",
    "perchbreak" 
);
add_action( 'init', 'genemy_add_editor_buttons' );
function genemy_add_editor_buttons( ) {
    add_filter( 'mce_external_plugins', 'genemy_add_editor_btn_tinymce_plugin' );
    add_filter( 'mce_buttons_2', 'genemy_register_editor_buttons' );
}
function genemy_register_editor_buttons( $buttons ) {
    global $perch_editor_buttons;
    array_push( $buttons, implode( ",", $perch_editor_buttons ) );
    return $buttons;
}
function genemy_add_editor_btn_tinymce_plugin( $plugin_array ) {
    global $perch_editor_buttons;
    foreach ( $perch_editor_buttons as $btn ) {
        $plugin_array[ $btn ] = GENEMY_URI . '/admin/editor-buttons/editor-plugin.js';
    } //$perch_editor_buttons as $btn
    return $plugin_array;
}