var lo = lo || {
  setup: function() {
    // only show homepage blast if admin desires it
    if ($('#showHomepageBlast').val() === "show") {
      lo.openBlast();
    }
  },

  openBlast: function() {
    var $blast = $('.homepageBlastContainer'),
    blastHeight = $blast.outerHeight();
    $blast.css('top', -blastHeight);
    $blast.transition({'top': 0, 'delay': 1000, 'duration': 1000}, 'ease', function() {
      $('.blastContent').fadeIn(300);
    });

    // link blast to news and events page
    $blast.click(function() {
      window.location = "/news.html";
    });
  }
};

lo.cakeMove = function() {
	var left = $('.cupcake').offset().left - 40;
	$(window).scroll(function() {
		if ($(window).scrollTop() > 550) {
			$('.cupcake').css({'left': left, 'position': 'fixed', 'opacity': 1, 'top': 50});			
		} else {
			$('.cupcake').css({'left': 'auto', 'position': 'absolute', 'opacity': 0, 'top': 500});
		}
	});
}

lo.slideshow = {
	testSetup : function() {
		$('.testBox div').click(function() {
			if ($(this).hasClass('test1')) {
				lo.slideshow.test('#73626E', '#F7E4BE', '#F0B49E', 'white');
				$.cookie("colors", "1", { expires: 3000, path: '/' });
				$.cookie("colors", "1", { expires: 3000, path: '/menu' });
			} 
			if ($(this).hasClass('test2')) {
				lo.slideshow.test('#D68189', '#F1EED9', '#C6A49A', 'white');
 				$.cookie("colors", "2", { expires: 3000, path: '/' });
				$.cookie("colors", "2", { expires: 3000, path: '/menu' });
			} 
			if ($(this).hasClass('test3')) {
				lo.slideshow.test('#17340a', '#F7DCB4', '#DAD5DA', 'white');
				$.cookie("colors", "3", { expires: 3000, path: '/' });
				$.cookie("colors", "3", { expires: 3000, path: '/menu' });
			}
			if ($(this).hasClass('test4')) {
				lo.slideshow.test('#68462B', '#91A398', '#E9E0D1', 'black');
				$.cookie("colors", "4", { expires: 3000, path: '/' });
				$.cookie("colors", "4", { expires: 3000, path: '/menu' });
			}
		});
		lo.slideshow.setColors();
	},
	test : function(body, top, hours, containerBack) {
		// console.log($.cookie("colors"));
		$('body').css('background', body);
		$('.topSection, .menu_header').css('background', top);
		$('.hoursBox, .footer').css('background', hours);
		if (containerBack) {
			$('.mainContainer').css('background', containerBack);
		}
	},
	setColors : function() {
		if ($.cookie('colors') === '1') {
			$('.test1').trigger('click');
		}
		else if ($.cookie('colors') === '2') {
			$('.test2').trigger('click');
		}
		else if ($.cookie('colors') === '3') {
			$('.test3').trigger('click');
		}
		else if ($.cookie('colors') === '4') {
			$('.test4').trigger('click');
		}
	},
	setup : function() {
		var playSlideshow = setInterval( "lo.slideshow.go()", 5000 );
		$('.mainPhotoContainer').click(function() {
				clearInterval(playSlideshow);
		});
		$('.bottomPhotos img').click(function() {
			var clickedImageIndex = $('.bottomPhotos img').index($(this));
			$('.mainPhotoContainer img').removeClass('active');
			$('.mainPhotoContainer img').eq(clickedImageIndex).addClass('active');
			clearInterval(playSlideshow);
		});

		$('.cake').click(function() {
			$('.muffin').animate({
				opacity: 1,
				right: '-120px',
				top: '50px' 
			}, 1000, function() {
				$('.muffin').animate({opacity: 0, right: '0px', top: '0px'}, 1000);
			});
		});

		$('.lowerRightImage').click(function() {
			$('.cupcake').animate({
				opacity: 1,
				right: '-120px',
				top: '400px' 
			}, 1000, function() {
				$('.cupcake').animate({opacity: 0, right: '0px', top: '500px'}, 1000);
			});
		});

		$('.scrollRight').click(function() {
			var positionLeft = $('.bottomPhotos').position().left;
			positionLeft = Math.abs(positionLeft);
			var indexOfImage = positionLeft / 78;
			indexOfImage = Math.round(indexOfImage) + 9;
			$('.bottomPhotos img').eq(indexOfImage).trigger('click');	
		});

		$('.scrollLeft, .scrollRight').click(function() {
			var positionLeft = $('.bottomPhotos').position().left;
			positionLeft = Math.abs(positionLeft);
			var indexOfImage = positionLeft / 78;
			if ($(this).hasClass('scrollLeft')) {
				indexOfImage = Math.round(indexOfImage);	
			} else {
				indexOfImage = Math.round(indexOfImage) + 9;			
			}
			$('.bottomPhotos img').eq(indexOfImage).trigger('click');			
		});

		$('.scrollRight').hover(function() {
				var duration = lo.slideshow.scrollSpeed('right');
				$('.bottomPhotosContainer').scrollTo(800, {duration:duration, axis:'x'});
			}, function() {
				$('.bottomPhotosContainer').stop();
			});
		$('.scrollLeft').hover(function() {
				var duration = lo.slideshow.scrollSpeed('left');
				$('.bottomPhotosContainer').scrollTo(0, {duration:duration, axis:'x'});
			}, function() {
				$('.bottomPhotosContainer').stop();
			});
	},
	scrollSpeed : function(direction) {
		var width = $('.bottomPhotos').width();
		if (direction === 'right') {
			var distanceLeft = 780 - $('.bottomPhotosContainer').scrollLeft();
		} else {
			var distanceLeft = $('.bottomPhotosContainer').scrollLeft();
		}
		var duration = distanceLeft + 2000;
		return duration;	
	},
	go : function() {
		var $active = $('.mainPhotoContainer img.active');
		if ( $active.length == 0 ) $active = $('.mainPhotoContainer img:last');
		var $next = $active.next().length ? $active.next() : $('.mainPhotoContainer img:first');
		$active.addClass('last-active');
		$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				$active.removeClass('active last-active');
			});
	}, 
	navSetup : function(pathname) {
		if (pathname.indexOf('menu') !== -1) {
			$('.navMenu').addClass('navOn');
		} else if (pathname.indexOf('news') !== -1) {
			$('.navNews').addClass('navOn');
		} else if (pathname.indexOf('location') !== -1) {
			$('.navLocation').addClass('navOn');
		} else if (pathname.indexOf('press') !== -1) {
			$('.navPress').addClass('navOn');
		} else {
			$('.navHome').addClass('navOn');
		}
	}
}

$(document).ready(function() {
  lo.setup();
	lo.slideshow.navSetup(location.pathname);
});