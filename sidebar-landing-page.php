<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ac inuk
 */
?>
<div id="secondary" class="content__widget-area--main sidebar" role="complementary">
<?php if(get_field('landing_page_video_ID')) : ?>
  <div class="c-video--landing-page-sidebar">
      <?php
      $title_att = 'title="'.get_field('landing_page_video_title').'"';
      $vbsc = '[video-block '.$title_att.' ids="'. get_field('landing_page_video_ID') . '" ]';
      ?>
  <?php echo do_shortcode($vbsc) ?>
  </div>
  <?php endif; ?>
  <div class="widget-area" >
    <?php do_action('before_sidebar'); ?>
    <?php if (!dynamic_sidebar('landing-page-aside')) : ?><?php endif; // end sidebar widget area ?>
  </div>
</div><!-- #secondary -->
