<?php
/**
 * Plugin Name: AC Staff Order Touch
 * Description: After staff reordering, "touch" the Staff list page and all its WPML translations to purge cached HTML immediately.
 * Author: AmberCouch
 * Version: 1.1.0
 */

if (!defined('ABSPATH')) exit;

// ===== CONFIG =====
const AC_STAFF_CPT           = 'staff-member';
const AC_STAFF_LIST_PAGE_ID  = 23804;
const AC_ENABLE_NOCACHE_HDRS = false; // set to true to send no-cache headers for those pages

// --- tiny logger (requires WP_DEBUG_LOG true) ---
function ac_staff_log($msg){
    if (defined('WP_DEBUG') && WP_DEBUG) error_log('[AC Staff] ' . $msg);
}

// --- get all WPML translation IDs for a page (including the original) ---
function ac_staff_get_all_page_ids(){
    $ids = [ (int) AC_STAFF_LIST_PAGE_ID ];
    if (function_exists('apply_filters') && function_exists('icl_object_id') || has_filter('wpml_element_trid')){
        // Get translation group (trid)
        $trid = apply_filters('wpml_element_trid', null, AC_STAFF_LIST_PAGE_ID, 'post_page');
        if ($trid){
            $translations = apply_filters('wpml_get_element_translations', null, $trid, 'post_page');
            if (is_array($translations)){
                foreach ($translations as $t){
                    if (!empty($t->element_id)) $ids[] = (int) $t->element_id;
                }
            }
        }
    }
    // de-duplicate
    return array_values(array_unique(array_filter($ids)));
}

// --- touch a page (like pressing "Update") and purge caches ---
function ac_staff_touch_and_purge_pages(array $page_ids){
    $urls = [];
    foreach ($page_ids as $pid){
        if ($pid <= 0) continue;
        // "touch" page -> bumps post_modified, triggers many cache integrations
        wp_update_post(['ID' => (int) $pid]);
        clean_post_cache((int) $pid);
        $url = get_permalink((int) $pid);
        if ($url) $urls[] = $url;
    }

    // Purge common layers
    if (function_exists('breeze_clear_cache')) breeze_clear_cache();
    if (function_exists('breeze_purge_cache')) breeze_purge_cache();
    do_action('wphb_clear_page_cache'); // Hummingbird (no-op if inactive)

    // Try Cloudflare WP plugin, if installed & connected
    foreach ($urls as $u){
        // Official CF plugin listens to this action in recent versions
        do_action('cloudflare_purge_by_url', $u);
    }

    if (function_exists('wp_cache_flush')) wp_cache_flush();

    ac_staff_log('Touched & purged pages: ' . implode(', ', array_map('strval', $page_ids)));
}

// --- schedule a touch at the end of the request (to batch multiple saves) ---
function ac_staff_schedule_touch(){
    static $scheduled = false;
    if ($scheduled) return;
    $scheduled = true;
    add_action('shutdown', function(){
        $ids = ac_staff_get_all_page_ids();
        ac_staff_touch_and_purge_pages($ids);
    });
}

// 1) When a staff-member is saved (including menu_order changes), schedule touch
add_action('save_post', function($post_id, $post, $update){
    if ($post instanceof WP_Post){
        if ($post->post_type === AC_STAFF_CPT){
            ac_staff_log("save_post for {$post->post_type} (ID {$post_id}), menu_order={$post->menu_order}");
            ac_staff_schedule_touch();
        }
    }
}, 10, 3);

// 2) Catch the Nested Pages sort AJAX action used on your site (npsort) and friends
add_action('init', function(){
    if (defined('DOING_AJAX') && DOING_AJAX){
        $action = isset($_REQUEST['action']) ? sanitize_text_field($_REQUEST['action']) : '';
        if ($action){
            ac_staff_log("AJAX action detected: {$action}");
            $looks_like_sort = in_array($action, [
                'npsort', // <-- observed on your site
                'np_sort',
                'nestedpages_update_menu_order',
                'nestedpages_update_post_order',
                'np_update_menu_order',
                'np_update_post_order',
            ], true);
            if ($looks_like_sort){
                ac_staff_schedule_touch();
            }
        }
    }
});

// 3) (Optional) Send no-cache headers for those pages at runtime to force freshness at edge layers
if (AC_ENABLE_NOCACHE_HDRS){
    add_action('template_redirect', function(){
        $ids = ac_staff_get_all_page_ids();
        if (is_page($ids)){
            if (!defined('DONOTCACHEPAGE')) define('DONOTCACHEPAGE', true); // many WP caches honor this
            nocache_headers();
            // Stronger hint for CDNs:
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            header('Pragma: no-cache');
        }
    });
}

// Marker so you can see it loaded
ac_staff_log('acstaff-order-touch MU loaded');
