<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ac inuk
 */
get_header();
?>

<div class="grid" >
  <div id="primary" class="content__404error">
    <div id="content" class="single-post single-landing-page" role="main">

    <article id="post-0" class="error404 not-found">
      <header class="post__header">
        <div class="header--article">
        <h1 class="header__title"><?php _e('The page you are looking for can not be found.', 'ac_inuk'); ?></h1>
        </div>
      </header><!-- .entry-header -->

      <div class="404error__content">
        <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ac_inuk'); ?></p>
        <p>Visit the <a href="/" title="Cathedral Dental Clinic" >Cathedral Dental home page</a> To find out more information about the dental services we offer. </p>
        <p>Alternatively, you can use the search form below to search our website for the dental service you require</p>

        <h2 class=""><?php _e('Search', 'ac_inuk'); ?></h2>

        <?php get_search_form(); ?>

      </div><!-- .entry-content -->
    </article><!-- #post-0 .post .error404 .not-found -->

  </div><!-- #content -->
</div><!-- #primary -->
</div>

<?php get_footer(); ?>
