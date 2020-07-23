<div class="site__navigation--main" id="nav-main"   role="navigation" <?php echo(AC_MENU_ABOVE_HEADER === FALSE) ? 'data-responsive-clone="true"' : ''; ?>>
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
                <a href="https://www.facebook.com/cathedraldentalclinic" target="_blank" class="a--icon"><svg class="icon icon-facebook2 icon--header"><use xlink:href="#icon-facebook2"></use></svg></a>
                <span class="c-sep"> | </span>
                <a href="https://www.instagram.com/cathedraldentalclinic166/" target="_blank" class="a--icon"><svg class="icon icon-instagram icon--header"><use xlink:href="#icon-instagram"></use></svg></a>
                <span class="c-sep"> | </span>
                <?php echo  langSwitch(); ?>
              </div>
              <div class="header--master__tel">
                <a href="tel:02920382671">
                  <svg preserveAspectRatio="none" class="icon header--master__tel__call ">
                  <use xlink:href="#icon-call" />
                  </svg>
                  029 2038 2671
                </a>
              </div>
            </div><!-- /.branding -->
            <a id="site_menu_toggle" class="menu--responsive-toggle__toggle" href="#menu">Menu</a>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'menu--site__container', 'menu_class' => 'menu--site__menu-list')); ?>
          </div>
          <!-- menu -->
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- #site-navigation -->
</div>
