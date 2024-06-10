<div class="site__navigation--main has-background-image" id="nav-main"   role="navigation" <?php echo(AC_MENU_ABOVE_HEADER === FALSE) ? 'data-responsive-clone="true"' : ''; ?>>
    <?php
    // Check if the custom field has a value
    if (get_field('landing_page_banner_image')) :
        // Get the image array
        $image = get_field('landing_page_banner_image');
    ?>
    <div  class="c-background-image" >
        <?php echo '<img class="c-background-image__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" width="' . esc_attr($image['width']) . '" height="' . esc_attr($image['height']) . '">'; ?>
    </div>
        <?php endif; ?>
  <div class="navigation--main" >



    <div class="grid">
      <div class="navigation--main__menu">
        <div class="menu--site ">
          <div class="menu--site__branding">
            <div class="branding">

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
              <div class="header--master__lang-switch">
                <div class="social-nav--header">


                <a href="https://www.facebook.com/cathedraldentalclinic" target="_blank" class="a--icon"><svg class="icon icon-facebook2 icon--header"><use xlink:href="#icon-facebook2"></use></svg></a>

                <a href="https://www.instagram.com/cathedraldentalclinic166/" target="_blank" class="a--icon"><svg class="icon icon-instagram icon--header"><use xlink:href="#icon-instagram"></use></svg></a>

<!--                <a href="tel:02920382671" target="_blank" class="a--icon"><svg class="icon icon-phone icon--header"><use xlink:href="#icon-phone"></use></svg></a>-->
                </div>
                <?php echo  langSwitch(); ?>
              </div>

            </div><!-- /.branding -->
                      </div>
          <!-- menu -->
        </div>

      </div>

    </div><!-- /.container -->

  </div><!-- #site-navigation -->
  <div class="c-header__wrapper--landing-page" >
    <div class="c-header__container">
  <h1 class="c-header--landing-page"><?php the_title() ?></h1>
    </div>
  </div>
</div>
