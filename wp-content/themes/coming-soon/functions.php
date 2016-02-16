<?php

add_filter('show_admin_bar', '__return_false');

function theme_enqueue_style() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css', false );
    wp_enqueue_style( 'theme-css', get_template_directory_uri() .'/style.css', false );
}

function theme_enqueue_script() {
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', [], '', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', [], '', true );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', [], '', true );
    gravity_form_enqueue_scripts( 1, true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_script' );

function disable_wp_emojicons() {
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button btn btn-success btn-md' style='margin-left:auto;margin-right:auto;display: block' id='gform_submit_button_{$form['id']}'><span>GET A FREE QUOTE NOW</span></button>";
}
