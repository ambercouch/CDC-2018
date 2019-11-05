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

        <?php include_once($path); ?>
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
  </head>

  <body <?php body_class(defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : ''); ?> <?php ac_body_data(); ?>>
    <div style="display:none;">
      <?php include_once("assets/images/defs.svg"); ?>
    </div>
    <a class="site__tel" href="tel:02920382671">
      <svg preserveAspectRatio="none" class="icon header--master__tel__call ">
        <use xlink:href="#icon-call" />
      </svg>
      <span>029 2038 2671</span>
    </a>
    <?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
    <div id="page" class="hfeed site remodal-bg">
      <?php do_action('before'); ?>
      <header class="site__header--master" id="masthead"   role="banner">
        <?php get_template_part('templates/snippets/sidebar-banner'); ?>
      </header><!-- /.site__header -->
      <?php get_template_part('templates/snippets/site__navigation--services'); ?>
      <div class="site__content" id="main" >
        <div class="content">
