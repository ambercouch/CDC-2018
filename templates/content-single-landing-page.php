<?php
/**
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >

  <div class="page__content">
    <?php the_content(); ?>
    <?php
    // Check if the custom field has a value
    if (get_field('landing_page_footer_content')) :
    // Get the image array
    the_field('landing_page_footer_content');
    ?>
    <?php endif; ?>
    <?php
    wp_link_pages(array(
        'before' => '<div class="page-links">' . __('Pages:', 'ac_inuk'),
        'after' => '</div>',
    ));
    ?>
  </div><!-- .entry-content -->


</article><!-- #post-## -->
