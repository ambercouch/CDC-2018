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
        $output .= '<span class="header--master__lang" ><a class=" header--master__lang-a '.$activeClass.' " href="'.$lang['url'].'" >'.$lang[native_name].'</a></span>';
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

