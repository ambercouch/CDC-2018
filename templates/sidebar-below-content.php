<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ac inuk
 */
?>
<div id="Tritary" class="content__widget-area--below sidebar" role="complementary">
  <div class="widget-area" >
    <?php // Logo menu widget hooks: use `logo-menu--static` for Recommended By and `logo-menu--carousel` for Dental Brands. ?>
    <?php if (!dynamic_sidebar('below-content-aside')) : ?><?php endif; // end sidebar widget area ?>
  </div>
</div><!-- #secondary -->
