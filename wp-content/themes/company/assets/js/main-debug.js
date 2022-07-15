(function ($) {

  // Menu event behavior
  $('a.btn-menu-open, a.btn-menu-close, .overlay').on('click', function (e) {
    // Prevent default anchor click behavior
    e.preventDefault();

    // Add and remove class on
    $('nav, .overlay').toggleClass('on');
  });

  // Add smooth scrolling to all links
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        // window.location.hash = hash;
      });
    } // End if
  });

  // Make scroll behavior
  $(window).on('scroll', () => {
    let windowScroll = $(this).scrollTop();
  });

  // tab change category
  $('.category a').on('click', function (e) {
    e.preventDefault();

    let isActive = $(this).hasClass('active');
    $('.category a').removeClass('active');
    if (isActive) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
  })

  // set width for category list
  let widthCategory = 0;
  $('.category li').each(function(index) {
    widthCategory += $(this).width();
  })
  $('.category ul').css('width', widthCategory);

}(jQuery));
