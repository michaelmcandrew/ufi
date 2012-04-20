(function ($) {
Drupal.behaviors.respondr_imgLink = {
  attach: function (context, settings) {
    $('.block img').parent('a:not(.imgLink-processed)', context).addClass('imgLink-processed').each(function () {
      // IE7 and IE8 compatibility requires another wrapper around the link-icon space
      // See http://stackoverflow.com/questions/1156985/jquery-cycle-ie7-transparent-png-problem
      $(this).addClass('img-link').append('<span class="wrap-img-link-icon"><span class="img-link-icon"> </span></span>');
      $(this).filter(function() {
        return /(jpg|gif|png)$/.test($(this).attr('href'));
      }).addClass('img-link-zoom');
    });
  }
};
})(jQuery);