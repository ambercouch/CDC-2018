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
function add_widget_name_widget_field($instance, $widget_class) {
    // Check if the "widget_name" index exists and provide a default value
    $widget_name_value = isset($instance['widget_name']) ? esc_attr($instance['widget_name']) : '';

    // Add your widget name HTML here
    ?>
  <p>
    <label for="<?php echo $widget_class->get_field_id('widget_name'); ?>">Widget Name:</label>
    <input class="widefat" id="<?php echo $widget_class->get_field_id('widget_name'); ?>" name="<?php echo $widget_class->get_field_name('widget_name'); ?>" type="text" value="<?php echo $widget_name_value; ?>" />
  </p>
    <?php
    return $instance; // This line is needed to update the widget instance

}

function save_widget_name_widget_field($instance, $new_instance) {
    // Sanitize and save the widget name value
    $instance['widget_name'] = sanitize_text_field($new_instance['widget_name']);
    return $instance;
}

// Hook into the widget form and update processes
add_action('widget_form_callback', 'add_widget_name_widget_field', 10, 2);
add_filter('widget_update_callback', 'save_widget_name_widget_field', 10, 2);

function enqueue_admin_script() {
    wp_enqueue_script('ac-admin', get_template_directory_uri() . '/assets/js/ac-admin.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'enqueue_admin_script');

// Test functions file
//add_action('wp_head', function() {
//    echo '<!-- test WP HEAD 123 -->' . "\n";
//});

function modify_canonical_tags() {

//    add_action('wp_head', function() {
//        echo '<!-- modify_canonical_tags() 123 -->' . "\n";
//    });

    // Array of slugs and their canonical URLs
    $canonical_urls = array(
        'dental-implants-cardiff' => 'https://dentalimplantscardiff.com/',
        'orthodontist-cardiff' => 'https://orthodontistcardiff.com/',
        // Add more slugs and URLs as needed
    );



    // Check if it's the custom post type
    if (is_singular('landing_page')) {
        $post_name = get_queried_object()->post_name;
//        add_action('wp_head', function() {
//            echo '<!-- is_singular(landing_page) -->' . "\n";
//        });
        if (array_key_exists($post_name, $canonical_urls)) {
//            add_action('wp_head', function() {
//                echo '<!-- array_key_exists -->' . "\n";
//            });
            // Remove the default canonical tag
            remove_action('wp_head', 'rel_canonical');

            // Add the custom canonical tag
            add_action('wp_head', function() use ($canonical_urls, $post_name) {
                echo '<link class="ac-canonical" rel="canonical" href="' . esc_url($canonical_urls[$post_name]) . '" />' . "\n";
            });

            // Add the custom canonical tag for WPSEO YOAST
            add_filter('wpseo_canonical', function() use ($canonical_urls, $post_name){
              return $canonical_urls[$post_name];
            });
        }else{
//            add_action('wp_head', function() use ($canonical_urls, $post_name) {
//                echo '<!-- NOT array_key_exists -->' . "\n";
//            });
        }
    }else{
//        add_action('wp_head', function() {
//            echo '<!-- NOT is_singular(landing_page) -->' . "\n";
//        });
    }
}
add_action('wp', 'modify_canonical_tags');

/*
 * Search function
 */

function custom_search_filter($query) {
    if ( !is_admin() && $query->is_search ) {
        // Limit the search to pages only
        $query->set('post_type', 'page');

        // Add a meta query to check if ACF field 'make_page_searchable' is true
        $meta_query = array(
            array(
                'key' => 'make_page_searchable',
                'value' => '1', // ACF stores true as '1'
                'compare' => '='
            )
        );
        $query->set('meta_query', $meta_query);
    }
    return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');

function scroll_to_primary() {
    if ( is_search() ) {
        ?>
      <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', function() {
              // Check if this is a search results page
              if (window.location.href.indexOf('?s=') !== -1) {
                  // Append #primary to the URL
                  if (!window.location.href.includes('#primary')) {
                      window.location.href += '#primary';
                  }
              }
          });
      </script>
        <?php
    }
}
add_action('wp_footer', 'scroll_to_primary');


function set_acf_field_for_pages_and_children() {
    // List of page IDs for which we want to set the ACF field to true
    $parent_page_ids = array(1154, 19411, 8, 10, 12, 25, 28, 4603, 5367);

    // Loop through each parent page and set the ACF field
    foreach ( $parent_page_ids as $parent_page_id ) {
        // Set ACF field to true for the parent page
        update_field('make_page_searchable', true, $parent_page_id);

        // Get the children of the parent page
        $child_pages = get_pages(array(
            'child_of' => $parent_page_id,
            'post_type' => 'page',
            'post_status' => 'publish'
        ));

        // Set ACF field to true for each child page
        foreach ( $child_pages as $child_page ) {
            update_field('make_page_searchable', true, $child_page->ID);
        }
    }
}
//add_action('init', 'set_acf_field_for_pages_and_children');



