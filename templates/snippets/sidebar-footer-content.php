<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ac inuk
 */
?>
<div class="content__widget-area--footer sidebar" role="complementary">
  <div class="widget-area" >
    <?php if (!dynamic_sidebar('footer-aside')) : ?><?php endif; // end sidebar widget area ?>
  </div>
</div><!-- #secondary -->
