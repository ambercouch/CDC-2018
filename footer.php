<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ac inuk
 */
?>
</div><!-- .content -->
</div><!-- .site__content-->
<div class="site__below-content">
  <?php get_template_part('templates/sidebar-below-content'); ?>
</div>
<div class="site__footer-content">
  <?php get_template_part('templates/snippets/sidebar-footer-content'); ?>
</div>
<footer class="site__footer" id="colophon"  role="contentinfo">
  <div class="footer--master" >
    <div class="grid">
      <div class="footer--master__site-info" >
        <div class="site-info">
          <small><?php _e('© 2012 Cathedral Dental Clinic', 'ac_inuk'); ?></small><br/>
          <small><?php _e('Website design by <a href="http://ambercouch.co.uk"><strong>Ambercouch', 'ac_inuk'); ?></strong></a></small>

        </div><!-- .site-info -->
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<link type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>?v=20210305" rel="stylesheet" >
<?php wp_footer(); ?>

</body>
</html>
