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

        // The tile list won't work to wrap the ul elements, so adding it directly in the WYSIWYG code
		// [
		// 	'title'   => '.tile-list',
		// 	'block'  => 'div',
		// 	'classes' => 'tile-list',
		// 	'wrapper' => true,
        // ],
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


/**
 * Custom shortcode for displaying the social links
 * [accordion_content]
 */

add_shortcode( 'accordion_content', function( $atts ) {
    if ( true === is_page() ) :
        $accordion_content = get_field('accordion_content');

        if ( false === empty( $accordion_content ) ) :
            ob_start();
            ?>
            <div class="page-accordion-content">
                <?php foreach ( $accordion_content as $content ) : ?>
                    <div class="main-item">
                        <div class="title"><?php echo $content['title']; ?></div>

                        <?php if ( false === empty( $content['items'] ) ) : ?>
                            <div class="items">
                                <?php foreach ( $content['items'] as $item ) : ?>
                                    <div class="item">
                                        <div class="item-title">
                                            <?php if ( false === empty( $item['link'] ) ) : ?>
                                                <a href="<?php echo $item['link']; ?>">
                                                    <?php echo $item['item_title']; ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo $item['item_title']; ?>
                                            <?php endif; ?>
                                        </div>

                                        <div class="values">
                                            <?php if ( false === empty( $item['values'] ) ) : ?>
                                                <?php foreach ( $item['values'] as $value ) : ?>
                                                    <div class="value">
                                                        <?php if ( false === empty( $value['prefix_text'] ) ) : ?>
                                                            <div class="prefix-text"><?php echo $value['prefix_text']; ?></div>
                                                        <?php endif; ?>

                                                        <?php if ( false === empty( $value['value'] ) ) : ?>
                                                            <div class="value-text"><?php echo $value['value']; ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
            return ob_get_clean();
        endif;
    endif;

    return '';
} );

/*
 * Temporary JavaScript file (awaiting compilation process)
 */

add_action( 'wp_enqueue_scripts', function() {
    $version_timestamp = filemtime( get_stylesheet_directory() . '/assets/js/temp-rob.js' );

    wp_enqueue_script('temp-rob.js', get_stylesheet_directory_uri() . '/assets/js/temp-rob.js', ['jquery'], $version_timestamp, true);
} );


/*
 * Widget Names plugin
 */

// Add a field to all widgets in WordPress
function add_custom_widget_field($instance, $widget_class) {
    // Add your custom field HTML here
    ?>
  <p>
    <label for="<?php echo $widget_class->get_field_id('custom_field'); ?>">Custom Field:</label>
    <input class="widefat" id="<?php echo $widget_class->get_field_id('custom_field'); ?>" name="<?php echo $widget_class->get_field_name('custom_field'); ?>" type="text" value="<?php echo esc_attr($instance['custom_field']); ?>" />
  </p>
    <?php
}

function save_custom_widget_field($instance, $new_instance) {
    $instance['custom_field'] = sanitize_text_field($new_instance['custom_field']);
    return $instance;
}

// Hook into the widget form and update processes
add_action('widget_form_callback', 'add_custom_widget_field', 10, 2);
add_filter('widget_update_callback', 'save_custom_widget_field', 10, 2);
