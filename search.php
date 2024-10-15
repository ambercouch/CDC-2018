<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
    <?php get_sidebar(); ?>
  <div id="primary" class="content__single-page">
    <div id="content" class="single-page" role="main">

      <?php if (have_posts()) : ?>

      <header class="page__header">
        <div class="header--article">
          <h2 class="header__title">
            <span class="title--article" ><?php printf(__('Your results for: <strong> %s </strong>', 'ac_inuk'), '<span class="search-list__term">' . get_search_query() . '</span>'); ?></span>
          </h2>
        </div>
      </header>


        <?php /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

          <?php get_template_part('templates/content', 'search-result'); ?>

        <?php endwhile; ?>

        <?php ac_inuk_content_nav('nav-below'); ?>

      <?php else : ?>

        <?php get_template_part('templates/no-results', 'search'); ?>

      <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->


  <?php get_sidebar(); ?>

</div><!-- /.grid -->
<?php get_footer(); ?>
