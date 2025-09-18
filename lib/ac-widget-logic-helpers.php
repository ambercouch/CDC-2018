<?php
/**
 * /wp-content/mu-plugins/ac-widget-logic-helpers.php
 */

if ( ! function_exists('ac_is_page_or_descendant') ) {
    /**
     * True if current queried object is in $ids or is a descendant of any $ids.
     */
    function ac_is_page_or_descendant( $ids ) {
        $ids = array_map('intval', (array) $ids);

        // Current object ID is reliable here (works on front-end WL checks).
        $qid = get_queried_object_id();
        if ( ! $qid ) {
            return false;
        }

        if ( in_array( $qid, $ids, true ) ) {
            return true;
        }

        // Check any ancestor match.
        $ancestors = get_post_ancestors( $qid );
        return ! empty( array_intersect( $ids, $ancestors ) );
    }
}

if ( ! function_exists('ac_is_direct_child_of') )
{
    function ac_is_direct_child_of($ids)
    {
        $ids = array_map('intval', (array)$ids);
        $qid = get_queried_object_id();
        if (!$qid) return false;
        $parent = (int)wp_get_post_parent_id($qid);
        return $parent && in_array($parent, $ids, true);
    }
}

/**
 * Allow our helper to be called from the Widget Logic field in 6.0.6+
 * (WL now restricts callable functions from that field).
 */
add_filter('widget_logic_allowed_functions', function( $allowed ) {
    $allowed[] = 'ac_is_page_or_descendant';
    $allowed[] = 'ac_is_direct_child_of';
    // `is_page` is already allowed by default per 6.0.6 docs.
    return $allowed;
});