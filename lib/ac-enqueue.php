<?php

function ac_remove_scripts() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');

        wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), false, '1.11.0', true);
        wp_register_script('jquery-migrate', ("http://code.jquery.com/jquery-migrate-1.2.1.min.js"), array('jquery'), '1.2.1', true);
        wp_enqueue_script('jquery');
        wp_dequeue_script('jquery.cookie');
        wp_dequeue_script('wpml-browser-redirect');
        wp_dequeue_script( 'language-selector');
        wp_dequeue_style( 'language-selector');


        //wp_enqueue_script('jquery-migrate');
    }
}

add_action('wp_print_scripts', 'ac_remove_scripts', 100);

/**
 * Enqueue scripts and styles
 */
function ac_inuk_scripts() {

    wp_enqueue_script('jquery.cookie', ICL_PLUGIN_URL . '/res/js/jquery.cookie.js', array('jquery'), ICL_SITEPRESS_VERSION, true);
    wp_enqueue_script('wpml-browser-redirect', ICL_PLUGIN_URL . '/res/js/browser-redirect.js', array('jquery', 'jquery.cookie'), ICL_SITEPRESS_VERSION, true);

    wp_enqueue_script( 'language-selector', ICL_PLUGIN_URL . '/res/js/language-selector.js', ICL_SITEPRESS_VERSION, true );

    wp_enqueue_script('cdc_fonts', '//use.typekit.net/kmf8utp.js', array(), '0.1', true);
   wp_enqueue_script('ac_inuk', get_template_directory_uri() . '/assets/js/dist/main.js', array('jquery'), '201610202', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {

      wp_enqueue_script('comment-reply');
    }
  if (is_singular() && wp_attachment_is_image()) {
    wp_enqueue_script('ac_inuk-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array('jquery'), '20120202');
  }
}

add_action('wp_enqueue_scripts', 'ac_inuk_scripts');

function ac_remove_plugins(){
    wp_dequeue_style('contact-form-7');
    wp_dequeue_style( 'language-selector' );
    wp_dequeue_script('wpml-legacy-dropdown-0');
    wp_dequeue_style('wpml-legacy-dropdown-0');
}
add_action('wp_enqueue_scripts', 'ac_remove_plugins');


function ac_css_footer() {
    wp_enqueue_style('contact-form-7');
    //wp_enqueue_style( 'language-selector', ICL_PLUGIN_URL . '/res/css/language-selector-click.css', ICL_SITEPRESS_VERSION );
}

add_action('wp_footer', 'ac_css_footer');

function wpdocs_dequeue_extras() {
    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');
    wp_deregister_script( 'admin-bar' );
    wp_deregister_style( 'admin-bar' );
    wp_deregister_script( 'wp-embed' );
    remove_action('wp_footer','wp_admin_bar_render',1000);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_extras' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );