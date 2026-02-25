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
<?php if (get_post_type() !== 'landing_page') : ?>
<div class="site__below-content">
  <?php get_template_part('templates/sidebar-below-content'); ?>
</div>
<?php endif; ?>
<div class="site__footer-content">
  <?php get_template_part('templates/snippets/sidebar-footer-content'); ?>
</div>
<footer class="site__footer" id="colophon"  role="contentinfo">
  <div class="footer--master" >
    <div class="grid">
      <div class="footer--master__site-info">
        <nav class="nav-footer">
          <?php
          if ( has_nav_menu('footer_notices') ) :
            echo wp_nav_menu( ['theme_location' => 'footer_notices', 'menu_class' => 'nav'] );
          endif;
          ?>
        </nav>

        <div class="site-info">
          <span style="margin-bottom:0.5em; display:block">Cathedral Dental Clinic is a trading name of Odonto Limited, registered in England & Wales with number 08368763</span>
          <span class="copyright"><?php _e('© 2012 Cathedral Dental Clinic', 'ac_inuk'); ?></span> |
            <?php _e('Website design by <a href="http://ambercouch.co.uk">Ambercouch</a>', 'ac_inuk'); ?>
        </div><!-- .site-info -->
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
