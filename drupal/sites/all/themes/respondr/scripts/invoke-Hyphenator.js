(function ($) {

Drupal.behaviors.respondrHyphenate = {
  attach: function (context, settings) {
    $('.region-preblocks, .region-postblocks', context).once('respondrHyphenate', function () {
      Hyphenator.config({
        classname: 'respondrHyphenate-processed',
        minwordlength : 4,
        // This means lang packages don't have to be downloaded #winning:
        useCSS3hyphenation: true
      });
      Hyphenator.run();
    });
  }
};

})(jQuery);