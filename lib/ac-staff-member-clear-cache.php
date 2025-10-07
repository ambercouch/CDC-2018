<?php
// Auto-purge caches when a Staff post changes (including re-order via menu_order)
add_action('save_post_staff-member', function($post_id, $post, $update){
    if ( wp_is_post_revision($post_id) ) return;

    // If menu_order changed (helps avoid purging on trivial edits)
    $prev = get_post_meta($post_id, '_last_menu_order', true);
    $curr = (string) $post->menu_order;
    if ($prev !== $curr) {
        update_post_meta($post_id, '_last_menu_order', $curr);

        // Breeze / Varnish
        if (function_exists('breeze_clear_cache')) breeze_clear_cache();
        if (function_exists('breeze_purge_cache')) breeze_purge_cache();

        // Hummingbird (if enabled)
        do_action('wphb_clear_page_cache');

        // Fallback: flush object cache
        if (function_exists('wp_cache_flush')) wp_cache_flush();
    }
}, 10, 3);