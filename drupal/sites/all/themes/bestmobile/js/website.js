/**
 * @package Website_Template
 * @since Website 1.0
 */

// -----------------------------------------------------------------------------

(function($) {
	
	// -------------------------------------------------------------------------
	
	$.fn.responsiveImage = function(timTumbPath, side) {
		return this.filter('img[data-src]').each(function() {
			if (typeof side != 'undefined') {
				var _side = side;
			} else {
				var _side = typeof $(this).data('side') != 'undefined' ? $(this).data('side') : 'width';
			}
			var src = $(this).data('src');
			var w = _side == 'both' || _side == 'width'  ? '&w='+$(this).width() : '';
			var h = _side == 'both' || _side == 'height' ? '&h='+$(this).height() : '';
			$(this).attr('src', w == 0 && h == 0 ? src : timTumbPath+'?src='+src+w+h);
		});
	};
	
	// -------------------------------------------------------------------------
	
	$.fn.responsiveVideo = function(ratio, padding) {
		if (typeof padding == 'undefined') {
			padding = 0;
		}
		this.filter('iframe, object, embed').filter('[width][height]').each(function() {
			var _this = $(this);
			$(window).resize(function() {
				var width  = _this.width() === 0 ? _this.parent().width() : _this.width();
				var _ratio = typeof ratio != 'undefined' ? ratio : _this.attr('width') / _this.attr('height');
				_this.css('height', Math.round((width / _ratio) + padding)+'px');
			});
		});
		$(window).trigger('resize');
		return this;
	};
	
	// -------------------------------------------------------------------------
	
	$.fn.responsiveFancybox = function(options, mobile) {
		return this.each(function() {
			var _this = $(this);
			_this.fancybox($.extend({}, options, {
				onStart: function() {
					switch (typeof mobile) {
						case 'undefined': var _mobile = true; break;
						case 'function':  var _mobile = mobile.call(this); break;
						case 'number':    var _mobile = $(window).width() < mobile; break;
						default:		  var _mobile = mobile;
					}
					if (_mobile) {
						window.location = _this.attr('href');
						return false;
					} else {
						return 'onStart' in options ? options.onStart.call() : true;
					}
				}
			}));
		});
	};
	
})(jQuery);

// -----------------------------------------------------------------------------
