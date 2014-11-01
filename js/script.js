// see https://www.drupal.org/node/1446420
(function ($, Drupal) {
  $(document).ready(function() {
    // mobile menu toggle functionality
    // @johncionci

    // toggle on that element
    $('.burger').toggle(
     function () {
      $( ".mobile-menu-wrapper" ).animate({
        left: "0px"
      }, 300);
     },
     function () {
      $( ".mobile-menu-wrapper" ).animate({
        left: "-250px"
      }, 300);
    });

  });
})(jQuery, Drupal);
