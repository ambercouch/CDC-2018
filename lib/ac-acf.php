<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_612e81b850f73',
        'title' => 'Price Guide',
        'fields' => array(
            array(
                'key' => 'field_60eb0b8fac8c9',
                'label' => 'Accordion Content',
                'name' => 'accordion_content',
                'type' => 'repeater',
                'instructions' => 'Output the content for this accordion within the content by using the shortcode [accordion_content]',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_60eb0bafac8ca',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_price_guide_notes',
                        'label' => 'Notes',
                        'name' => 'price_guide_notes',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_60eb0bbeac8cb',
                        'label' => 'Items',
                        'name' => 'items',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'table',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60eb0bcdac8cc',
                                'label' => 'Item Title',
                                'name' => 'item_title',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_60eb0bd7ac8cd',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_60eb0bdbac8ce',
                                'label' => 'Values',
                                'name' => 'values',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_60eb0bf6ac8cf',
                                        'label' => 'Prefix Text',
                                        'name' => 'prefix_text',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_60eb0bfdac8d0',
                                        'label' => 'Value',
                                        'name' => 'value',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_63ce964714883',
        'title' => 'Staff Info',
        'fields' => array(
            array(
                'key' => 'field_63ce9655b6bcb',
                'label' => 'Staff Member Role',
                'name' => 'staff_member_role',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_63ce9674b6bcc',
                'label' => 'Staff Member Qualifications',
                'name' => 'staff_member_qualifications',
                'type' => 'textarea', // ← changed from 'text' to 'textarea'
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '2', // Optional: define number of rows visible in the textarea
                'new_lines' => 'br', // Optional: 'wpautop' or 'br' for how new lines are handled when output
            ),
            array(
                'key' => 'field_63ce968fb6bcd',
                'label' => 'Staff Member Name',
                'name' => 'staff_member_name',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_staff_member_interest',
                'label' => 'Staff Member Interest',
                'name' => 'staff_member_interest',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_63ce969fb6bce',
                'label' => 'Staff Member Bio',
                'name' => 'staff_member_bio',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'staff-member',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_page_settings)',
        'title' => 'Page Settings',
        'fields' => array(
            array(
                'key' => 'field_hide_page_title',
                'label' => 'Hide Page Title',
                'name' => 'hide_page_title',
                'type' => 'true_false',
                'instructions' => 'If Hide is selected then then page title will be removed',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Hide',
                'ui_off_text' => 'Show',
            ),
            array(
                'key' => 'field_make_page_searchable',
                'label' => 'Make Page Searchable',
                'name' => 'make_page_searchable',
                'type' => 'true_false',
                'instructions' => 'If True then the page will show in search results',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'True',
                'ui_off_text' => 'False',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_menu_items',
        'title' => 'Menu Items',
        'fields' => array(
            array(
                'key' => 'field_menu_icon',
                'label' => 'Menu Icon',
                'name' => 'menu_icon',
                'type' => 'text',
                'instructions' => 'add the id of an svg icon eg. icon-twitter',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '#',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_show_label',
                'label' => 'Show Label',
                'name' => 'show_label',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_menu_icon',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_icon_position',
                'label' => 'Icon Position',
                'name' => 'icon_position',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_show_label',
                            'operator' => '==',
                            'value' => '1',
                        ),
                        array(
                            'field' => 'field_menu_icon',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'left' => 'Left',
                    'right' => 'Right',
                ),
                'allow_null' => 0,
                'default_value' => 'left',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'nav_menu_item',
                    'operator' => '==',
                    'value' => 'all',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

    acf_add_local_field_group( array(
        'key'                   => 'group_page_common_name',
        'title'                 => 'Page Common Name',
        'fields'                => array(
            array(
                'key'               => 'field_common_name',
                'label'             => 'Common Name',
                'name'              => 'common_name',
                'type'              => 'text',
                'instructions'      => 'Add a common name for this dental practice page (e.g. "Root Canal").',
                'required'          => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
            ),
            array(
                'key'               => 'field_common_name_priority',
                'label'             => 'Common Name Takes Priority',
                'name'              => 'common_name_priority',
                'type'              => 'true_false',
                'instructions'      => 'When enabled, use the common name instead of the medical name.',
                'required'          => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'message'           => 'Use Common Name instead of Medical Name',
                'default_value'     => 1, // ON by default
                'ui'                => 1,
                'ui_on_text'        => 'Common name',
                'ui_off_text'       => 'Medical name',
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'page',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'acf_after_title', // shows just under the page title
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
        'show_in_rest'          => 0,
    ) );

endif;

add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key' => 'group_landing_page_settings',
        'title' => 'Landing Page Settings',
        'fields' => array(
            array(
                'key' => 'field_landing_page_banner_image',
                'label' => 'Landing page banner image',
                'name' => 'landing_page_banner_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => 'Banner image to be used at the top of the site',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_landing_page_video_ID',
                'label' => 'Landing page video ID',
                'name' => 'landing_page_video_ID',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => 'Medivision video ID number',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_landing_page_video_title',
                'label' => 'Landing page video title',
                'name' => 'landing_page_video_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => 'The title for the video that appears on the play thumbnail and above the video in the popup.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_landing_page_footer_content',
                'label' => 'Landing page footer content',
                'name' => 'landing_page_footer_content',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => 'Area at the bottom of the page suitable for a call to action. Defaults to the main contact form short code.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '<h2>Contact Us </h2>
Fill out our contact form today so we can help you get started on your new smile.
[contact-form-7 id="0f194c5" title="Contact form 1"]',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_landing_page_sidebar',
                'label' => 'Landing page sidebar',
                'name' => 'landing_page_sidebar',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => 'Additional content that is displayed as a side bar.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'landing_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );
} );



// Helper: build the combined title using ACF fields.
function cdc_get_common_name_title( $title, $post_id ) {

    // Bail if ACF isn't available.
    if ( ! function_exists( 'get_field' ) ) {
        return $title;
    }

    $common_name = trim( (string) get_field( 'common_name', $post_id ) );
    if ( $common_name === '' ) {
        // Nothing set, fall back to normal title.
        return $title;
    }

    $common_name_priority = (bool) get_field( 'common_name_priority', $post_id );

    if ( $common_name_priority ) {
        // Common name first: Dentures (Prosthodontics)
        return sprintf(
            '%s <small>(%s)</small>',
            $common_name,
            $title
        );
    }

    // Medical name first: Prosthodontics (Dentures)
    return sprintf(
        '%s <small>(%s)</small>',
        $title,
        $common_name
    );
}

/**
 * 1) Filter page title on the front end.
 */
add_filter( 'the_title', 'cdc_page_common_name_title_filter', 10, 2 );
function cdc_page_common_name_title_filter( $title, $post_id ) {

    // Don't affect admin screens.
    if ( is_admin() ) {
        return $title;
    }

    $post = get_post( $post_id );
    if ( ! $post || $post->post_type !== 'page' ) {
        return $title;
    }

    // Only on singular page views in the main loop.
    if ( ! is_page( $post_id ) || ! in_the_loop() || ! is_main_query() ) {
        return $title;
    }

    return cdc_get_common_name_title( $title, $post_id );
}

/**
 * 2) Filter menu item titles for page links.
 *    Only override when the menu label matches the page title
 *    (so custom labels in menus are left alone).
 */
add_filter( 'wp_nav_menu_objects', 'cdc_page_common_name_menu_titles', 10, 2 );
function cdc_page_common_name_menu_titles( $items, $args ) {

    foreach ( $items as $item ) {

        // Only for menu items that link to pages.
        if ( $item->type === 'post_type' && $item->object === 'page' ) {

            $page_id    = (int) $item->object_id;
            $page_title = get_the_title( $page_id );

            // Only override if the menu label is still the default page title.
            if ( $item->title === $page_title ) {
                $item->title = cdc_get_common_name_title( $page_title, $page_id );
            }
        }
    }

    return $items;
}


add_filter( 'widget_title', 'cdc_wrap_widget_brackets_in_small', 10, 3 );

function cdc_wrap_widget_brackets_in_small( $title, $instance, $id_base ) {
    // Only act if we have a bracket pair
    if ( strpos( $title, '(' ) === false || strpos( $title, ')' ) === false ) {
        return $title;
    }

    // Replace "Title (Something)" → "Title <small>(Something)</small>"
    $title = preg_replace(
        '/\s*\((.+?)\)/',
        ' <small>($1)</small>',
        $title,
        1 // only first pair
    );

    return $title;
}


