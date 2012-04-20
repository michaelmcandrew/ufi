/**
 * Based on UItoTop jQuery Plugin 1.1
 * http://www.mattvarone.com/web-design/uitotop-jquery-plugin/
 */



(function($){
	$.fn.UItoTop = function(options) {

 		var defaults = {
			text: 'To Top',
			min: 200,
			inDelay:600,
			outDelay:400,
  			containerID: 'toTop',
			scrollSpeed: 1200,
			easingType: 'linear',
      layoutID: '#page',
      offset: 45
 		};

 		var settings = $.extend(defaults, options);
		var containerIDhash = '#' + settings.containerID;
    var layoutWidth = $(settings.layoutID).width();

    // Only proceed if there is enough margin for the link to appear
    if ($(window).width() > (settings.offset + 50 + layoutWidth)) {
      $('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');

      var pull = layoutWidth/2+settings.offset;
      $(containerIDhash).css({"marginLeft" : pull, "left" : "50%"});

      $(containerIDhash).hide().click(function(){
        $('html, body').animate({scrollTop:0}, settings.scrollSpeed, settings.easingType);
        $('#'+settings.containerHoverID, this).stop().animate({'opacity': 0 }, settings.inDelay, settings.easingType);
        return false;
      })
      .prepend('<span id="'+settings.containerHoverID+'"></span>')
      .hover(function() {
          $(containerHoverIDHash, this).stop().animate({
            'opacity': 1
          }, 600, 'linear');
        }, function() {
          $(containerHoverIDHash, this).stop().animate({
            'opacity': 0
          }, 700, 'linear');
        });

      $(window).scroll(function() {
        var sd = $(window).scrollTop();
        if(typeof document.body.style.maxHeight === "undefined") {
          $(containerIDhash).css({
            'position': 'absolute',
            'top': $(window).scrollTop() + $(window).height() - 50
          });
        }
        if ( sd > settings.min )
          $(containerIDhash).fadeIn(settings.inDelay);
        else
          $(containerIDhash).fadeOut(settings.Outdelay);
      });
    }

};
})(jQuery);

/**
 * Invoke UltraTop
 */

$(document).ready(function() {
  $().UItoTop({ easingType: 'swing', scrollSpeed: 400 });
});