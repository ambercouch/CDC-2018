<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ac inuk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-KZFTX87"></script>
	  <!-- Google Tag Manager -->
    <!-- AC updated 20201012 -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MXR6Q28');</script>
    <!-- End Google Tag Manager -->
    <?php $path = dirname(__FILE__) . '/assets/css/critical.css'; ?>
    <?php if(realpath($path))  : ?>
      <style>

        .menu--services__menu-list {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
          font-size: .8em;
          margin: 0 auto;
          border: none;
          max-width: 100%;
        }

        <?php //include_once($path); ?>
      </style>
    <?php else: ?>
    <!-- No Critical CSS <?php echo $path ?> -->
    <?php endif; ?>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

      <!-- WP HEAD -->
    <?php wp_head(); ?>
      <!-- END WP HEAD -->

    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">

  </head>

  <body <?php body_class(defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : ''); ?> <?php ac_body_data(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXR6Q28"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div style="display:none;">
      <?php include_once("assets/images/defs.svg"); ?>
    </div>
    <a class="site__tel" href="tel:02920382671">
      <svg preserveAspectRatio="none" class="icon header--master__tel__call ">
        <use xlink:href="#icon-call" />
      </svg>
      <span>029 2038 2671</span>
    </a>
  <?php if (get_post_type() == 'landing_page') : ?>
      <?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--landing-page') : ''; ?>
  <?php elseif (is_page_template('page--referral-header-banner.php')) : ?>
      <?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--referral') : ''; ?>
  <?php else : ?>
      <?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
  <?php endif; ?>
  <div id="page" class="hfeed site remodal-bg">
      <?php do_action('before'); ?>
      <header class="site__header--master" id="masthead"   role="banner">
        <?php get_template_part('templates/snippets/sidebar-banner'); ?>
      </header><!-- /.site__header -->
    <!-- TrustBox widget - Micro Review Count -->
    <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5d95c761d2d30e00011ae879" data-style-height="24px" data-style-width="100%" data-token="a5efc09c-8da4-428b-945f-9baac784bbbf" data-min-review-count="0" data-style-alignment="center">
      <a href="https://uk.trustpilot.com/review/cathedraldentalclinic.com" target="_blank" rel="noopener">Trustpilot</a>
    </div>
    <!-- End TrustBox widget -->
        <?php if (get_post_type() == 'landing_page' || is_page_template('page--referral-header-banner.php') ) : ?>
        <?php else : ?>
      <?php get_template_part('templates/snippets/site__navigation--services'); ?>
        <?php endif; ?>
      <div class="site__content" id="main" >
        <div class="content">
