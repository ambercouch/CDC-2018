<?php
//Nice and simple
require( get_template_directory() . '/lib/ac-inuk.php' );
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );


function langSwitch(){

    $langs = array_reverse(icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str'));
   //unset($langs['ar']);

    $current_lang = ICL_LANGUAGE_CODE;

    $count = count($langs);


    $output = '';
    foreach ($langs as $key => $lang){
        $activeClass = ($current_lang == $key)? 'lang-active' : '';
        $output .= '<span class="header--master__lang" ><a class=" header--master__lang-a '.$activeClass.' " href="'.$lang['url'].'" >'.$lang['native_name'].'</a></span>';
        if ($count > 1)
        {
            $output .= '<span> | </span>';
        }
        $count -= 1;
    }
    return $output;
}

function wpa54064_inspect_scripts() {
    global $wp_scripts;
    global $wp_styles;
    echo '<!-- scripts --> ';
    foreach( $wp_scripts->queue as $handle ) :
        echo '<!-- '.$handle . ' --> ';
    endforeach;
    echo '<!-- styles --> ';
    foreach( $wp_styles->queue as $handle ) :
        echo '<!-- '.$handle . ' --> ';
    endforeach;

}
add_action( 'wp_print_scripts', 'wpa54064_inspect_scripts' , 1000);

/**
 * Enable TinyMCE style (format) select
 */

add_filter( 'mce_buttons_2', function( $buttons ) {
	array_unshift( $buttons, 'styleselect' );

	return $buttons;
} );

/**
 * Add TinyMCE style options
 */

add_filter( 'tiny_mce_before_init', function( $init_array ) {
	// Define the style_formats array
	$style_formats = [
		// Each array child is a format with it's own settings
		[
			'title'   => '.large-text',
			'block'  => 'div',
			'classes' => 'large-text',
			'wrapper' => true,
        ],
    ];

	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = wp_json_encode( $style_formats );

	return $init_array;
} );

/**
 * Add the default editor stylesheet
 */

add_action( 'after_setup_theme', function() {
    add_editor_style();
} );
