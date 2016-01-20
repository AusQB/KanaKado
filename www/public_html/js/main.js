
var	isSafari  = false,
	iOSXS	  = 0,
	_window	  = $(window),
	_document = $(document),
	_html 	  = $('html'),
	_body	  = $('body'),
	_htmlbody = $('html, body'),
	ratio     = _window.width() / _window.height();

_document.ready(function() {
	
	var heightQuart = _window.height() / 4,
		widthQuart  = _window.width() / 4,
		heightThird = _window.height() / 3,
		widthThird  = _window.width() / 3;
	
	$('#gears').css({
		'height' : ratio > 1 ? heightThird + 'px' : widthThird + 'px',
		'width' : ratio > 1 ? heightThird + 'px' : widthThird + 'px'
	}).css({
		'margin-top' : '-' + $('#gears').height() / 2 + 'px',
		'margin-left' : '-' + $('#gears').height() / 2 + 'px'
	});
	
	$('#cog1').css({
		'font-size' : ($('#gears').height() / 100) * 70 + 'px'
	});
	
	$('#cog2').css({
		'font-size' : ($('#gears').height() / 100) * 50 + 'px'
	});
	
	$('#cog3').css({
		'font-size' : ($('#gears').height() / 100) * 40 + 'px'
	});
	
	$('#menu-btn i').on('click', function() {
		if($('#menu').hasClass('closed')) {
			$('#menu').removeClass('closed').addClass('open');
			$('#menu-btn').addClass('active');
			$('.page').addClass('menu-open');
		} else if($('#menu').hasClass('open')) {
			$('#menu').removeClass('open').addClass('closed');
			$('#menu-btn').removeClass('active');	
			$('.page').removeClass('menu-open');
		}
	});
	
	$('.chart-btn').on('click', function() {
		if(!$(this).hasClass('active')) {
			$('.chart-btn').removeClass('active');
			var chart = $(this).data('chart');
			$('.page.active').fadeOut(1000, function() {
				$(this).removeClass('active');
			});
			$('#'+chart).fadeIn(1000, function() {
				$(this).addClass('active')
			});
			resizeChars();
			$(this).addClass('active');
		}
	});
	
	$('.charset-btn').on('click', function() {
		if(!$(this).hasClass('active')) {
			$('.charset-btn').removeClass('active')
			var charset = $(this).data('charset');
			$('.deck section > div').each(function() {
				var card = $(this);
				if(card.data(charset)) {
					card.children('span').fadeOut(500, function() {
						$(this).html(card.data(charset)).fadeIn(500);
					});
				}
			});
			resizeChars();
			$(this).addClass('active')
		}
	});
	
	$('.theme-btn').on('click', function() {
		if(!$(this).hasClass('active')) {
			$('.theme-btn').removeClass('active');
			$('body').removeClass('black white parchment').addClass($(this).data('card-theme'));
			$(this).addClass('active');
		}
	});
	
	$('.font-btn').on('click', function() {
		if(!$(this).hasClass('active')) {
			$('.font-btn').removeClass('active');
			$('body').removeClass('hiragino osaka meiryo gothic').addClass($(this).data('font'));
			$(this).addClass('active');
		}
	});
	
	$('#sakura').on('click', function() {
		if(!$(this).hasClass('active')) {
			$('body').addClass('sakura');
			sakura();
			$('#sakura-music').get(0).volume = 0;
			$('#sakura-music').get(0).play();
			$('#sakura-music').animate({volume: 1}, 2000);
			$(this).addClass('active');
		} else {
			$('#sakura-music').animate({volume: 0}, 2000, function() {
				$(this).get(0).pause();	
			});
			$('body').removeClass('sakura');
			$(this).removeClass('active');
		}
	});
	
	$('section > div').not('.header, .empty').on('click', function() {
		if(!$(this).hasClass('active')) {
			$('section > div').removeClass('active');
			var el = '<p class="kana">'+$(this).html()+'</p><p class="romaji">'+$(this).attr('id')+'</p>';
			if($('.card').length) {
				$('.card').html(el);
			} else {
				var card = $('<div class="card">'+el+'</div>').appendTo('#card-overlay').hide();
				$('#card-overlay').fadeIn(400);
				card.fadeIn(400);
				resizeCards();
			}
			$(this).addClass('active');
		} else {
			$('#card-overlay').fadeOut(400);
			$('.card').fadeOut(400, function() {
				$(this).remove();	
			});
			$(this).removeClass('active');
		}
	});
	
	$('#card-overlay').on('click', '.card', function() {
		$('#card-overlay').fadeOut(400);
		$(this).fadeOut(400, function() {
			$(this).remove();	
		});
		$('section > div').removeClass('active');
	});
	
	$('#sakura-music').on('ended', function() {
		$(this).get(0).play();
	});
	
	/*$('.header').hover(
		function() {
			$('#'+$(this).html()).addClass('hover');
			console.log('#'+$(this).html());
		},
		function() {
			$('.header').removeClass('hover');
		}
	);*/
	
	_window.resize(function() {
		resizeChars();
		resizeCards();
	});
	
});
	
_window.on('load', function() {
	
	resizeChars();
	
	setTimeout(function() {
		$('#loading').fadeOut(1000);
	}, 1000);
	
});


function resizeChars() {
	
	ratio = _window.width() / _window.height();
	
	if(ratio > 1) { // landscape
	
		$('body').removeClass('portrait').addClass('landscape');
	
		$('.deck section').each(function() {
			$(this).removeClass('row').addClass('column');
		});
		
		$('.page').each(function() {
			$(this).find('.column').css({
				'width' : _window.width() / $(this).find('section').length
			});
			
			$(this).find('.column > div').css({
				'height' : _window.height() / $(this).find('.vowels > div').length
			});
			
		});
		
	} else { // portrait
	
		$('body').removeClass('landscape').addClass('portrait');
	
		$('.deck section').each(function() {
			$(this).removeClass('column').addClass('row');
		});
		
		$('.page').each(function() {
			$(this).find('.row').css({
				'height' : _window.height() / $(this).find('section').length
			});
		
			$(this).find('.row > div').css({
				'width' : _window.width() / $(this).find('.vowels > div').length
			})
			
		});
		
	}
	
	$('.page').each(function() {
		
		var charRatio = $(this).find('section > div').width() / $(this).find('section > div').height();
		
		if(charRatio > 1) {
			$(this).find('section > div').css({
				'line-height' : $(this).find('section > div').height() + 'px',
				'font-size'   : $(this).find('section > div').height() / 2 + 'px'
			});
		} else {
			$(this).find('section > div').css({
				'line-height' : $(this).find('section > div').height() + 'px',
				'font-size'   : $(this).find('section > div').width() / 2 + 'px'
			});
		}
		
	});
	
}

function resizeCards() {

	ratio = _window.width() / _window.height();
	
	if(ratio > 1) { // landscape
	
		$('.card').css({
			'max-width' : $('.card').outerHeight(),
			'max-height' : 'none'
		});
		
	} else { // portrait
	
		$('.card').css({
			'max-height' : $('.card').outerWidth(),
			'max-width' : 'none'
		});
		
	}
	
	$('.card').css({
		'left' : (_window.width() - $('.card').outerWidth()) / 2 + 'px',
		'top' : (_window.height() - $('.card').outerHeight()) / 2 + 'px'
	});
	
	$('.card .kana').css({
		'font-size'   : $('.card .kana').outerHeight() / 1.2 + 'px',
		'line-height' : $('.card .kana').outerHeight() + 'px'
	});
	
	$('.card .romaji').css({
		'font-size'   : $('.card .romaji').outerHeight() / 2.5 + 'px',
		'line-height' : $('.card .romaji').outerHeight() + 'px'
	});
	
}

function sakura() {
	
	var interval = setInterval(function() {
	
		if($('body').hasClass('sakura')) {
			
			var duration = getRandomInt(3000, 6000),
				origin = getRandomInt(0, _window.width()) + 'px',
				destination = getRandomInt(-100, _window.width()) + 'px',
				depth = getRandomInt(0, 1000) + 'px';
			$('<i class="icon-leaf"></i>').appendTo('#sakura-start').addClass(getRandomInt(0, 1) ? 'icon-flip-horizontal' : '').addClass(getRandomInt(0, 1) ? 'icon-flip-vertical' : '').css({
				'left' : origin,
				'font-size' : getRandomInt(15, 40) + 'px',
				'-webkit-transition' : 'all ' + duration + 'ms ease',
				'-moz-transition' : 'all ' + duration + 'ms ease',
				'-o-transition' : 'all ' + duration + 'ms ease',
				'-ms-transition' : 'all ' + duration + 'ms ease',
				'transition' : 'all ' + duration + 'ms ease'
			}).css({
				'-webkit-transform': 'translate3d('+destination+', '+(_window.height() + 200) + 'px, 0)',
				'-moz-transform': 'translate3d('+destination+', '+(_window.height() + 200) + 'px, 0)',
				'-o-transform' : 'translate3d('+destination+', '+(_window.height() + 200) + 'px, 0)',
				'-ms-transform' : 'translate3d('+destination+', '+(_window.height() + 200) + 'px, 0)',
				'transform' : 'translate3d('+destination+', '+(_window.height() + 200) + 'px, 0)'
			}).delay(duration).hide(function() {
				$(this).remove();	
			});
			
			/*setTimeout(function() {
				leaf.remove();
			}, duration);*/
			
		} else {
			clearInterval(interval);	
		}
	
	}, getRandomInt(0, 1000));
	
}

function getRandomInt(min, max) {
 	return Math.floor(Math.random() * (max - min + 1) + min);
}