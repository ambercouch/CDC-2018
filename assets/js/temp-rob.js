(function($) {
  // Page content accordion
  $('.page-accordion-content .main-item > .title').on('click', function() {
    // Get the sibling item to slide
    var $siblings = $(this).siblings('.items');

    if ( false === $(this).hasClass('active') ) {
      var $title = $(this);

      $siblings.stop().slideDown(400, function() {
        $title.addClass('active');
      });

    } else {
      var $title = $(this);

      $siblings.stop().slideUp(400, function() {
        $title.removeClass('active');
      });
    }
  });
})(jQuery);
