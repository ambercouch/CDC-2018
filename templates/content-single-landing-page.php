<?php
/**
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
    <?php
  /*
  * ACF option to remove the page header
  */
  if (get_field('hide_page_title')) :?>
  <!-- .page__header is hidden -->
  <?php else : ?>
  <header class="page__header">
    <div class="header--article">
        <?php
        /*
         * Change the heading markup to H2 if is home page
         */
        if (is_front_page()) : ?>
      <h1 class="header__title">
        <span class="title--article" ><?php the_title(); ?></span>
      </h1>
        <?php else: ?>
      <h2 class="header__title">
        <span class="title--article" ><?php the_title(); ?></span>
      </h2>
        <?php endif ?>
    </div>
  </header><!-- /.page__header -->
    <?php endif ?>

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
