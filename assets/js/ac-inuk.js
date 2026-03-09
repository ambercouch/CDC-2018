ACINUK = {
  common: {
    init: function () {
      console.log('gallery test');

        try {
            Typekit.load();
        } catch (e) {
        }

        var palmWidth = 480;
        var mq = "(min-width: " + palmWidth + "px)"
        // media query event handler
        if (matchMedia) {
            var mq = window.matchMedia(mq);
            mq.addListener(WidthChange);
            WidthChange(mq);
        }

        $('[data-control]:not([data-control-radio])').each(function () {

            var controlId = $(this).attr('data-control')
            if (controlId != ''){
                var showButton = $('[data-control='+controlId+']');
                var container = $('[data-container='+controlId+']');
                var containerParent = container.parent()
                ACINUK.fn.actStateToggle(container, showButton, containerParent, false);
            }
        })


            document.querySelectorAll(".c-gallery__description").forEach(description => {
                // Create a new <ul> element
                const ul = document.createElement("ul");

                // Process child nodes (text and elements)
                [...description.childNodes].forEach(node => {
                    if (node.nodeType === Node.TEXT_NODE) {
                        // Split text into words and wrap each word in <li>
                        node.textContent.trim().split(/\s+/).forEach(word => {
                            if (word) {
                                const li = document.createElement("li");
                                li.textContent = word;
                                ul.appendChild(li);
                            }
                        });
                    } else if (node.nodeType === Node.ELEMENT_NODE) {
                        // Wrap existing elements in <li>
                        const li = document.createElement("li");
                        li.appendChild(node.cloneNode(true));
                        ul.appendChild(li);
                    }
                });

                // Replace the original content with the new <ul>
                description.innerHTML = ""; // Clear original content
                description.appendChild(ul);
            });




// media query change
        function WidthChange(mq) {
            var $fithtService = jQuery('#menu-services .wp-post-image:eq(4)');
            if (mq.matches) {
                $fithtService.removeClass('palm-last');
                console.log('no palm');
                console.log($fithtService);
            } else {
                //palm view
                $fithtService.addClass('palm-last');
                console.log('palm');
                console.log($fithtService);
            }

        }

        $(document).on('change', '.form--referral__select--referral-reason', function () {
            var selected = $(this).val();
            var $target  = $('[data-select-control="referral-reason"]');
            var trigger  = $target.data('select-value'); // "Implant Placement & Restoration"

            console.log('changed 12345');
            console.log(selected, trigger);

            if (selected === trigger) {
                $target.show('slow');
            } else {
                $target.hide('slow');
            }
        });


        //hide all inputs except the first one
        $('.form--referral__a--file').each(function () {
            $('p.hide', this).not(':eq(0)').hide();
        });

        //functionality for add-file link
        $('.form--referral__a--file').on('click', 'a.add_file', function(e){
            //show by click the first one from hidden inputs
            $(this).closest('.form--referral__a--file').find('p.hide:not(:visible):first' ).show('slow');

            e.preventDefault();
        });

        //functionality for del-file link
        $('a.del_file').on('click', function(e){
            //var init
            var input_parent = $(this).parent();
            var input_wrap = input_parent.find('span');

            //reset field value
            input_wrap.html(input_wrap.html());

            //hide by click
            input_parent.hide('slow');

            e.preventDefault();
        });


      if (jQuery('#nav-main').data('responsive-clone')) {
        $clone_nav = jQuery('#nav-main').clone();
        jQuery('#nav-main').clone();
        $clone_nav.attr('id', 'nav-responsive');

        $clone_nav.prependTo('body');

        els = jQuery('#nav-responsive *').each(function () {
          if (jQuery(this).attr('id')) {
            id = jQuery(this).attr('id');
            jQuery(this).attr('id', id + '-clone');
          }
        });
        var $menu = jQuery('#nav-responsive .menu--site__container'),
                $menulink = jQuery('#site_menu_toggle-clone'),
                $container = jQuery('#nav-main'),
                container_height = $container.height();
      } else {
        var $menu = jQuery('#nav-main .menu--site__container'),
                $menulink = jQuery('#site_menu_toggle'),
                $container = jQuery('#nav-main'),
                container_height = $container.height();
      }

      jQuery('body').addClass('js');



      if ($container.css('position') == 'absolute') {
        jQuery('body').css('margin-top', container_height);
      }

      $menulink.click(function () {
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        var height = jQuery('.menu-main-container.active').height();
        console.log(height);
        return false;
      });

        jQuery('p').each(function () {
            if (jQuery.trim(jQuery(this).html()) === '') {
                console.log('empty p test');
                console.log(this);
                jQuery(this).addClass('is-empty');
            }
        });

      //jQuery('.widget_nav_menu .widget__header').append('<a class="menu--responsive-toggle__toggle" href="#menu">Menu</a>');

      ACINUK.fn.initLogoMenuCarousel();

    }
  },
  page: {
    init: function () {

      console.log('page');
      var ac_window = jQuery(window);
      var $menu = jQuery('.menu--responsive');



      $menu.each(function (i, el) {
        console.log('element');
        console.log(jQuery(el));

        var widgetTite = jQuery('.title--widget', this).text()

        jQuery('.title--widget', this).after('<a class="menu__toggle--page">'+widgetTite+' Menu</a>');
        //var toggle = jQuery(this)
        jQuery(this).on('click', '.menu__toggle--page', function () {
          jQuery(this).toggleClass('active');
          jQuery('.menu', el).toggleClass('active');
          jQuery('.widget__header', el).toggleClass('active');
        });
      });


      console.log(ac_window.width());

      var page_title = jQuery('.title--article').text();
      console.log(page_title);

      jQuery('[name=page-name]').val(page_title);
        ACINUK.gaq.video();
        ACINUK.gaq.tel();
        ACINUK.gaq.contact();
    },
      testimonials: function () {
          var q = jQuery('.comments ol li');
          if (!q.length) return;

          // Build the new markup
          var splitList = '<ol class="testimonials__list">';

          // Show first 3 testimonials (or fewer if not enough)
          var visibleCount = Math.min(4, q.length);
          for (var i = 0; i < visibleCount; i++) {
              splitList += '<li class="testimonials__testimonial">' + jQuery(q[i]).html() + '</li>';
          }
          splitList += '</ol>';

          // If there are more testimonials, add a single toggle + drawer
          if (q.length > visibleCount) {
              var drawerId = 'testimonials-drawer';

              splitList += '' +
                  '<a class="fadeNext closed testimonials__toggle" href="#" ' +
                  'aria-expanded="false" aria-controls="' + drawerId + '">' +
                  '<span class="show">Show </span><span class="hide">Hide </span>more testimonials' +
                  '</a>' +
                  '<ol id="' + drawerId + '" class="testimonials__drawer">';

              for (var i = visibleCount; i < q.length; i++) {
                  splitList += '<li class="testimonials__testimonial">' + jQuery(q[i]).html() + '</li>';
              }
              splitList += '</ol>';
          }

          jQuery('.testimonials').html(splitList);

          // Toggle the single drawer
          jQuery('.fadeNext').on('click', function (e) {
              e.preventDefault();
              var $btn = jQuery(this);
              var $drawer = $btn.next();

              $drawer.toggleClass('open');
              var isOpen = $drawer.hasClass('open');

              $btn.toggleClass('open', isOpen).toggleClass('closed', !isOpen);
              $btn.attr('aria-expanded', isOpen ? 'true' : 'false');
              return false;
          });
      },


      testimonialsAlt: function () {

      var q = jQuery('.comments ol li');
      var thisYear;
      var nextYear;
      var thisYearClass;
      var nextID;
      var splitList = '<ol class="testimonials__year testimonials__this-year" >';

      q.each(function (i, el) {

        if (i == 0) {
          thisYear = jQuery('[data-js_year]', this).data('js_year');
          currentYearClass = 'y-' + thisYear;
        }

        splitList = splitList + '<li class="testimonials__testimonial">' + jQuery(el).html() + '</li>';

        if (i < q.length - 1)
        {
          nextID = q[i + 1].id
          thisYear = jQuery('[data-js_year]', this).data('js_year');
          thisYearClass = 'y-' + thisYear;
          nextYear = jQuery('#' + nextID + ' [data-js_year]').data('js_year');
          nextYearClass = 'y-' + nextYear;

          if (thisYear != nextYear)
          {
            splitList = splitList + '</ol><a class="fadeNext closed testimonials__year-toggle" href=""><span class="show">Show </span><span class="hide">Hide </span>' + nextYear + ' Testimonials </a><ol class="testimonials__year ' + nextYearClass + ' " >'
          }
        }
      }
      );

      splitList = splitList + '</ol>';

      jQuery('.testimonials').html(splitList);

      jQuery('.thisyear').addClass(currentYearClass);


      jQuery(".fadeNext").click(function (e) {
        e.preventDefault();
        jQuery(this).next().toggleClass('open');
        if (jQuery(this).next().hasClass('open')) {
          jQuery(this).addClass('open');
          jQuery(this).removeClass('closed');

        }
        else {
          jQuery(this).addClass('closed');
          jQuery(this).removeClass('open');
        }
        return false;
      });

    },
      emergency_dentist_cardiff: function () {
      var mins = new Date().getMinutes(),
              hrs = new Date().getHours(),
              day = new Date().getDay(),
              open = false;

      open = (day > 0 && day < 6) && ((hrs == 8 && mins > 14) || (hrs > 8 && hrs < 17)) ? true : false;

      jQuery('#opening-times tr').each(function (i) {
        count = i + 1;
        jQuery(this).addClass('day--' + count);
      });



      if (open == true) {
        jQuery('#opening-times .day--' + day).addClass('open-highlight');
        jQuery('.open-highlight').attr('title', 'We are currently open.');
      }
      console.log('emergency_dentist_cardiff');
    },
      payment_plan: function () {
console.log("this is the payment_plan")
          // Targeting .item-title with <a> tags
          document.querySelectorAll('.page-accordion-content .item-title a').forEach(el => {
              el.innerHTML = el.innerHTML.replace(/\(([^)]+)\)/, '<small>($1)</small>');
          });

          // Targeting .item-title without <a> tags
          document.querySelectorAll('.page-accordion-content .item-title:not(:has(a))').forEach(el => {
              el.innerHTML = el.innerHTML.replace(/\(([^)]+)\)/, '<small>($1)</small>');
          });
      }


  },
  post: {
    init: function () {
      console.log('all posts');
    }
  },
    error404: {
      init: function(){
          console.log('Error 404');
          // Ensure the DOM is ready

              // Select the elements
              const $controlElement = $('.c-search-form__control');
              const $formElement = $('.c-search-form__form');
              const $searchElement = $('.c-search-form');

              // Set the data-state attribute to "on"
              if ($controlElement.length) {
                  console.log('has controlEle');
                  $controlElement.attr('data-state', 'on');
              } else {
                  console.log("NO ControlEle");
              }
          // Set the data-state attribute to "on"
          if ($searchElement.length) {
              console.log('has $search');
              $searchElement.attr('data-state', 'on');
          } else {
              console.log("NO $search");
          }


              if ($formElement.length) {
                  console.log("has form");
                  $formElement.attr('data-state', 'on');
                  // Add the class "is-on" to .c-search-form__form
                  $formElement.addClass('is-on');
              } else {
                  console.log("NO form");
              }


          console.log(controlElement.getAttribute('data-state'));
          console.log(formElement.getAttribute('data-state'));
          console.log(formElement.classList.contains('is-on'));
      },
    },
  gaq :{
        video : function(){

            jQuery(document).on('open','.remodal', function(e) {
                console.log('clicked');
                console.log(e);

                var title = jQuery(e.target.innerHTML).find('.title').text();
                var current_url = e.currentTarget.baseURI;
                console.log(current_url);
                console.log(title);
                if (typeof __gaTracker != "undefined") {
                    console.log('__gaTracker');
                    __gaTracker('send', 'event', 'videos', 'open ' + current_url, title);
                }else{
                    console.log('__gaTracker undefined');
                }
            });

        },//gaq.video
        tel : function(){

            jQuery(document).on('click','[href^="tel:"]', function(e) {
                console.log('tel clicked');
                console.log(e);
                var current_url = e.currentTarget.baseURI;
                var tel = $(this).attr('href');
                var parent = $(this).parent().attr('class') || $(this).parent().parent().attr('class');
                console.log(current_url);

                if (typeof __gaTracker != "undefined") {
                    console.log('__gaTracker');
                    __gaTracker('send', 'event', tel, 'clicked ' + parent, current_url);
                }else{
                    console.log('__gaTracker undefined');
                    console.log(tel);
                    console.log(parent);


                }
            });

        },//gaq.tel
        contact : function(){

            jQuery(document).on('mailsent.wpcf7',  function(e) {
                var current_url = e.currentTarget.baseURI;

                if (typeof __gaTracker != "undefined") {
                    console.log('__gaTracker');
                    __gaTracker('send', 'event', 'contact', 'submit' , current_url);
                }else{
                    console.log('__gaTracker undefined');
                    console.log(current_url);
                }
            });

        }//gaq.tel
    },
    fn:{

        initLogoMenuCarousel: function () {
            if (typeof jQuery.fn.flickity !== 'function') return;

            jQuery('.logo-menu--carousel').each(function () {
                var $widget = jQuery(this);

                // This matches your actual markup
                var $menu = $widget.find('ul.menu').first();

                if (!$menu.length || $menu.data('flickity')) return;

                $menu.flickity({
                    cellSelector: 'li',     // be explicit
                    cellAlign: 'center',
                    contain: true,
                    wrapAround: true,
                    prevNextButtons: true,
                    pageDots: true,
                    imagesLoaded: true,
                    groupCells: '25%'
                });
            });
        },
        actStateToggle: function (container, showButton, parent, listParent) {
            var elState = showButton.attr('data-state');
            var eventActOpen = new Event('actOpen');
            var eventActClose = new Event('actClose');
            showButton.on('click', function(e){
                e.preventDefault();
                elState = $(this).attr('data-state');
                console.log('elState');
                console.log(this);

                console.log(elState);

                if ('off' === elState ) {
                    console.log('click on');
                    console.log($(container));
                    $(this).attr('data-state', 'on');
                    $(container).attr('data-state', 'on');
                    $(parent).attr('data-state', 'on');
                    $(container).addClass('is-on');
                    document.body.className += ' ' + 'container-'+ $(container).attr('data-container') +'-is-open';
                    window.dispatchEvent(eventActOpen);

                } else {
                    console.log('click off');
                    $(this).attr('data-state', 'off');
                    $(container).attr('data-state', 'off');
                    $(parent).attr('data-state', 'off');
                    $(container).removeClass('is-off');
                    document.querySelector('body').classList.remove('container-'+ $(container).attr('data-container') +'-is-open');

                    window.dispatchEvent(eventActClose);
                }
            });
        },
    }
};
UTIL = {
  exec: function (template, handle) {
    var ns = ACINUK,
            handle = (handle === undefined) ? "init" : handle;

    if (template !== '' && ns[template] && typeof ns[template][handle] === 'function') {
      ns[template][handle]();
    }
  },
  init: function () {
    var body = document.body,
            template = body.getAttribute('data-post-type'),
            handle = body.getAttribute('data-post-slug');

    UTIL.exec('common');
    UTIL.exec(template);
    UTIL.exec(template, handle);
  }
};
jQuery(window).load(UTIL.init);





