(function() {
	'use strict';

	/*----------------------------------------
		Detect Mobile
	----------------------------------------*/
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};


	/*----------------------------------------
		Animate Scroll
	----------------------------------------*/

	var contentWayPoint = function() {
		var i = 0;
		$('.probootstrap-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('probootstrap-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .probootstrap-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn probootstrap-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft probootstrap-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight probootstrap-animated');
							} else {
								el.addClass('fadeInUp probootstrap-animated');
							}
							el.removeClass('item-animate');
						},  k * 100, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};

	var navbarState = function() {

		var lastScrollTop = 0;
		$(window).scroll(function(){

			var $this = $(this),
				 	st = $this.scrollTop(),
				 	navbar = $('.probootstrap-navbar');

			if ( st > 200 ) {
				navbar.addClass('scrolled');
				$(".logo-toggle").hide();
				$(".logo, .iconCart").show();
			} else {
				navbar.removeClass('scrolled awake');
				

				$(".logo, .iconCart").show();
				$(".logo-toggle").hide();
			}

			if ( navbar.hasClass('scrolled') && st > 300 ) {
		   	if (st > lastScrollTop){
		      // if (navbar.hasClass('scrolled')) {
		      	// navbar.removeClass('awake');
		      	navbar.addClass('awake');
		      	$(".logo-toggle, .iconCart").hide();
				$(".logo, .iconCart").show();
		      // }
		   	} else {
		      // if (navbar.hasClass('scrolled')) {
		      	navbar.addClass('awake');
		      	navbar.removeClass('sleep');
		  //     	$(".logo").hide();
				// $(".logo-toggle").show();
		      // }
		   	}
		   	lastScrollTop = st;
		  }

		});
	};

	
	
	
	var stellarInit = function() {
		if( !isMobile.any() ) {
			$(window).stellar();
		}
	};

	var smoothScroll = function() {
		var $root = $('html, body');

		$('.smoothscroll').click(function () {
			$root.animate({
		    scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
			return false;
		});
	};
	
	var magnificPopupControl = function() {


		$('.image-popup').magnificPopup({
			type: 'image',
			removalDelay: 300,
			mainClass: 'mfp-with-zoom',
			gallery:{
				enabled:true
			},
			zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});

		$('.with-caption').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
				}
			},
			zoom: {
				enabled: true
			}
		});


		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });
	};

	$(function(){
		contentWayPoint();
		navbarState();
		stellarInit();
		magnificPopupControl();
		smoothScroll();
	});

})();