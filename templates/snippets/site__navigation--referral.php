<?php
// Check if the custom field has a value
$image = false;
$cssClass = 'no-background-image';
if (get_field('banner_image')) :
// Get the image array
    $image = get_field('landing_page_banner_image');
    $cssClass = 'has-background-image';
    else :
        $image = get_field('landing_page_banner_image');
        $cssClass = 'test-background-image';
    ?>
<?php endif; ?>

<div class="site__navigation--main <?php echo $cssClass; ?>" id="nav-main"   role="navigation" <?php echo(AC_MENU_ABOVE_HEADER === FALSE) ? 'data-responsive-clone="true"' : ''; ?>>

  <div class="navigation--main" >
    <div class="grid">
      <div class="navigation--main__menu">
        <div class="menu--site ">
          <div class="menu--site__branding">
            <div class="branding">
              <?php if (is_home() || is_front_page()) : ?>
                <h1 class="branding__site-title">
                  <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <svg role="img" aria-label="<?php echo esc_attr(get_bloginfo('name', 'display')); ?> <?php echo esc_attr(get_bloginfo('description', 'display')); ?>" preserveAspectRatio="none" class="icon site-title__icon--mobile ">
                    <title><?php echo esc_attr(get_bloginfo('name', 'display')); ?></title>
                    <desc><?php echo esc_attr(get_bloginfo('description', 'display')); ?></desc>
                    <use xlink:href="<?php //echo '/content/themes/ac-inuk/assets/images/defs.svg';                ?>#icon-cdc_logo_large_text" />
                    </svg>
                  </a>
                  <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <svg role="img" aria-label="<?php echo esc_attr(get_bloginfo('name', 'display')); ?> <?php echo esc_attr(get_bloginfo('description', 'display')); ?>" preserveAspectRatio="none" class="icon site-title__icon--desk ">
                    <title><?php echo esc_attr(get_bloginfo('name', 'display')); ?></title>
                    <desc><?php echo esc_attr(get_bloginfo('description', 'display')); ?></desc>
                    <use xlink:href="<?php //echo '/content/themes/ac-inuk/assets/images/defs.svg';                ?>#icon-cdc_logo_large_text" />
                    </svg>
                  </a>
                </h1>
                <h2 class="branding__description"><?php bloginfo('description'); ?></h2>
              <?php else : ?>
                <div class="branding__site-title">
                  <a  class="site-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                      <svg role="img" aria-label="<?php echo esc_attr(get_bloginfo('name', 'display')); ?> <?php echo esc_attr(get_bloginfo('description', 'display')); ?>" preserveAspectRatio="none" class="icon site-title__icon--mobile ">
                      <title><?php echo esc_attr(get_bloginfo('name', 'display')); ?></title>
                      <desc><?php echo esc_attr(get_bloginfo('description', 'display')); ?></desc>
                      <use xlink:href="<?php //echo '/content/themes/ac-inuk/assets/images/defs.svg';                ?>#icon-cdc_logo_large_text" />
                      </svg>
                    </a>
                    <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                      <svg role="img" aria-label="<?php echo esc_attr(get_bloginfo('name', 'display')); ?> <?php echo esc_attr(get_bloginfo('description', 'display')); ?>" preserveAspectRatio="none" class="icon site-title__icon--desk ">

                      <title><?php echo esc_attr(get_bloginfo('name', 'display')); ?></title>
                      <desc><?php echo esc_attr(get_bloginfo('description', 'display')); ?></desc>
                      <use xlink:href="<?php //echo '/content/themes/ac-inuk/assets/images/defs.svg';                ?>#icon-cdc_logo_large_text" />
                      </svg>
                    </a>
                  </a>
                </div>
                <span class="branding__description"><?php bloginfo('description'); ?></span>
              <?php endif; ?>

              <div class="header--master__lang-switch">
                <div class="social-nav--header">
                  <a href="tel:02920382671" target="_blank" class="a--icon"><svg class="icon icon-phone icon--header"><use xlink:href="#icon-phone"></use></svg><span class="c-link__lable--tel">029 2038 2671</span></a>

                <a href="https://www.facebook.com/cathedraldentalclinic" target="_blank" class="a--icon"><svg class="icon icon-facebook2 icon--header"><use xlink:href="#icon-facebook2"></use></svg></a>

                <a href="https://www.instagram.com/cathedraldentalclinic166/" target="_blank" class="a--icon"><svg class="icon icon-instagram icon--header"><use xlink:href="#icon-instagram"></use></svg></a>

                </div>
                <?php echo  langSwitch(); ?>
              </div>
            </div><!-- /.branding -->
            <a id="site_menu_toggle" class="menu--responsive-toggle__toggle" href="#menu">Menu</a>
              <?php wp_nav_menu(array('theme_location' => 'primary_referrals', 'container' => 'nav', 'container_class' => 'menu--site__container', 'menu_class' => 'menu--site__menu-list')); ?>

          </div>
          <!-- menu -->
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- #site-navigation -->
    <?php
    // Check if the custom field has a value
    if (get_field('banner_image')) :
        // Get the image array
        $image = get_field('banner_image');
        ?>
      <div  class="c-background-image" >
          <?php echo '<img class="c-background-image__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" width="' . esc_attr($image['width']) . '" height="' . esc_attr($image['height']) . '">'; ?>
      </div>
    <?php endif; ?>
</div>
