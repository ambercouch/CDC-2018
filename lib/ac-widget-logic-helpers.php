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

/**
 * Allow our helper to be called from the Widget Logic field in 6.0.6+
 * (WL now restricts callable functions from that field).
 */
add_filter('widget_logic_allowed_functions', function( $allowed ) {
    $allowed[] = 'ac_is_page_or_descendant';
    // `is_page` is already allowed by default per 6.0.6 docs.
    return $allowed;
});