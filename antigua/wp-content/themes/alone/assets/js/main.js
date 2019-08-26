!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		//Back top
		function BearsthemeBackTop() {
			$('#bt-backtop').on('click', function() {
				$('html,body').animate({
					scrollTop: 0
				}, 400);
				return false;
			});

			if ($(window).scrollTop() > 300) {
				$('#bt-backtop').addClass('bt-show');
			} else {
				$('#bt-backtop').removeClass('bt-show');
			}

			$(window).on('scroll', function() {

				if ($(window).scrollTop() > 300) {
					$('#bt-backtop').addClass('bt-show');
				} else {
					$('#bt-backtop').removeClass('bt-show');
				}
			});
		}
		BearsthemeBackTop();
		//Date picker
		function BearsthemeDatePicker() {
			if ($('.ro-date-picker').length) {
				$('.ro-date-picker').datepicker();
			}
		}
		BearsthemeDatePicker();
		//useful var
		var $window = $(window);
		var mainMenuHeight = $('#bt-main-menu').height();
		/* Make easing scroll when click a link in page */
		function BearsthemeEasingMoving() {
			var $root = $('html, body');
			$('.bt-demo-select').on('click', function() {
				var href = $.attr(this, 'href');
				$root.animate({
					scrollTop: ($(href).offset().top - mainMenuHeight)
				}, 500, function() {
					window.location.hash = href;
				});
				return false;
			});
		}
		BearsthemeEasingMoving();
		//Video popup
		function Bearsthemeheadervideo() {
			$("#bt-play-button").on("click", function(e){
				e.preventDefault();
					$.fancybox({
					'padding' : 0,
					'autoScale': false,
					'transitionIn': 'none',
					'transitionOut': 'none',
					'title': this.title,
					'width': 720,
					'height': 405,
					'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type': 'swf',
					'swf': {
					'wmode': 'transparent',
					'allowfullscreen': 'true'
					}
				});
			});
		}
		Bearsthemeheadervideo();
		/* Open the hide mini search */
		function BearsthemeOpenMiniSearchSidebar() {
			$('.bt-share-search-icon > li > a.search-icon').on('click', function() {
				$('#bt_header .widget_search').toggle();
			});
		}
		BearsthemeOpenMiniSearchSidebar()
		/* Open the hide social share */
		function BearsthemeOpenMiniSocialShareSidebar() {
			$('.bt-share-search-icon > li > a.share-icon').on('click', function() {
				$('#bt_header .bt-social-share').toggle();
			});
		}
		BearsthemeOpenMiniSocialShareSidebar();
		/* Open the hide mini cart */
		function BearsthemeOpenMiniCartSidebar() {
			$('.bt_widget_mini_cart .bt-cart-header > a.bt-icon').on('click', function() {
				$('.bt_widget_mini_cart .bt-cart-content').toggle();
			});
		}
		BearsthemeOpenMiniCartSidebar();
		/* Open the hide menu canvas */
		function BearsthemeOpenMenuSidebar() {
			$('.bt-menu-sidebar > a').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
			$('.bt-menu-canvas-overlay').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
		}
		BearsthemeOpenMenuSidebar();
		/* Open the hide menu */
		function BearsthemeOpenMenu() {
			$('#bt-hamburger').on('click', function() {
				$('.bt-menu-list').toggleClass('hidden-xs');
				$('.bt-menu-list').toggleClass('hidden-sm');
			});
		}
		BearsthemeOpenMenu();
		/* Header Stick */
		function BearsthemeHeaderStick() {
			if($( '.bt-header-v1, .bt-header-v3' ).hasClass( 'bt-header-stick' )) {
				var header_offset = $('#bt_header .bt-header-menu').offset();
			
				if ($(window).scrollTop() > header_offset.top) {
					$('body').addClass('bt-stick-active');
				} else {
					$('body').removeClass('bt-stick-active');
				}

				$(window).on('scroll', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
				
				$(window).on('load', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
				$(window).on('resize', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
			}
		}
		BearsthemeHeaderStick();
		
		/* Header Fixed */
		function BearsthemeHeaderFixed() {
			if($( '.bt-header-v2' ).hasClass( 'bt-header-fixed' )) {
				var header_offset = $('#bt_header .bt-header-menu').offset();
			
				if ($(window).scrollTop() > header_offset.top) {
					$('body').addClass('bt-stick-active');
				} else {
					$('body').removeClass('bt-stick-active');
				}

				$(window).on('scroll', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
				
				$(window).on('load', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
				$(window).on('resize', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
			}
		}
		BearsthemeHeaderFixed();
		/* Active donaters carousel */
		function BearsthemeDonatersCarousel() {
			var $owlElem = $('.bt-donaters-carousel .owl-carousel');
			$owlElem.each( function() {
				var $this = $( this ),
					opts = {
						loop:true,
						smartSpeed: 500,
						margin:30,
						navText:['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
						dots:false,
						responsiveClass:true,
						responsive:{
							0:{
								items:1,
							},
							768:{
								items:2,
							},
							992:{
								items:3,
							},
							1200:{
								items:3,
								nav:true,
							}
						}
					};
					
				var owlObj = $this.owlCarousel( opts );
				
				$( window ).resize( function() {
					setTimeout( function() {
						owlObj.trigger('destroy.owl.carousel');
						owlObj.html(owlObj.find('.owl-stage-outer').html()).removeClass('owl-loaded');
						owlObj.owlCarousel(opts);
					}, 100 )
					
				} )
			} )
			/*$('.bt-donaters-carousel .owl-carousel').owlCarousel({
				loop:true,
				smartSpeed: 500,
				margin:30,
				navText:['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
				dots:false,
				responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					768:{
						items:2,
					},
					992:{
						items:3,
					},
					1200:{
						items:3,
						nav:true,
					}
				}
			});*/
		}
		BearsthemeDonatersCarousel();
		
		/* Active Doantion slider */
		function BearsthemeDonationSlider() {
			$('.tbdonations_slider_wrap .owl-carousel').owlCarousel({
				items: 1,
				loop:true,
				smartSpeed: 500,
				margin:30,
				nav: true,
				navText:['<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'],
				dots:false
			});
		}
		BearsthemeDonationSlider();
		
		/* Active Events carousel */
		function BearsthemeEventsCarousel() {
			$('.bt-events_slider .owl-carousel').owlCarousel({
				items: 1,
				loop:true,
				smartSpeed: 500,
				nav: true,
				navText:['<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'],
				dots:false
			});
		}
		BearsthemeEventsCarousel();
		
		/* Active Testimonial slider */
		function BearsthemeTestimonialSlider() {
			$('.bt-testimonial-slider  .owl-carousel').owlCarousel({
				items: 1,
				loop:true,
				smartSpeed: 500,
				margin:30,
				nav: false,
				navText:['<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'],
				dots:true
			});
		}
		BearsthemeTestimonialSlider();
		
		/* Blog Special */
		function BearsthemesBlogSpecial() {
			$('.bt-blog-special').each(function() {
				var $btPost = $(this).find('.bt-post .bt-post-items'),
					$btPostDetail = $(this).find('.bt-post-detail');
				
				$btPost.children('article').hover(function() {
					var _index = $(this).index();
					$(this).addClass('active').siblings().removeClass('active');
					
					$btPostDetail
					.children('article')
					.eq(_index)
					.addClass('active')
					.siblings()
					.removeClass('active');
				})
			})
		}
		BearsthemesBlogSpecial();
		
		/* Story Special */
		function BearsthemesStorySpecial() {
			$('.bt-story-special').each(function() {
				var $btPost = $(this).find('.bt-post'),
					$btPostDetail = $(this).find('.bt-story-items');
				
				$btPost.children('article').hover(function() {
					var _index = $(this).index();
					$(this).addClass('active').siblings().removeClass('active');
					
					$btPostDetail
					.children('article')
					.eq(_index)
					.addClass('active')
					.siblings()
					.removeClass('active');
				})
			})
		}
		BearsthemesStorySpecial();
		
		/* Events Special */
		function BearsthemesEventSpecial() {
			$('.bt-events-special').each(function() {
				var $btPost = $(this).find('.tribe_events');
				$('.bt-events-special .tribe_events').hover(function() {
					$(this).addClass('active').siblings().removeClass('active');
				})
			})
		}
		BearsthemesEventSpecial();
		
		/* Active blog carousel */
		function BearsthemeBlogCarousel() {
			$('.bt-blog-carousel .owl-carousel').owlCarousel({
				loop:true,
				smartSpeed: 500,
				margin:30,
				nav:false,
				dots:true,
				responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					768:{
						items:1,
					},
					992:{
						items:2,
					},
					1200:{
						items:2,
					}
				}
			});
		}
		BearsthemeBlogCarousel();
		
		function BearsthemeCountDownClock() {
			$('.bt-countdown-clock').each(function() {
				var countdownTime = $(this).attr('data-countdown');
				$(this).countdown({
					until: countdownTime,
					format: 'ODHMS',
					padZeroes: true
				});
			});
		}
		BearsthemeCountDownClock();
		
		/*Count up*/
		function BearsthemeCountUp() {
			if($( ".bt-number" ).length > 0) {
				$('.bt-number').counterUp({
					delay: 10,
					time: 1000
				});
			}
		}
		BearsthemeCountUp();
		
		/* Disable scrolling zoom on maps */
		$('#map').addClass('scrolloff');
		$('.overlay_map').on("mouseup",function(){
			$('#map').addClass('scrolloff'); 
		});
		$('.overlay_map').on("mousedown",function(){
			$('#map').removeClass('scrolloff');
		});
		$("#map").mouseleave(function () { 
			$('#map').addClass('scrolloff');
		});
		/*Shop*/
		$('.woocommerce-info .ro-checkout-title > a').on('click', function(event) {
			$( event.target ).closest('.woocommerce-info').toggleClass('ro-active');
		});
		
		function eventToggleHandle() {
			var $el = $( '.tb-event-segment' );
			$el.each( function() {
				var $this = $( this ),
					$btnToggle = $( '<span class="btn-event-toggle"><i class="fa fa-minus"></i></span>' );
				
				$this.prepend( $btnToggle );
				$btnToggle.on( 'click', function() {
					$this.toggleClass( 'minus' );
					$( this ).find( 'i' ).toggleClass( 'fa-minus fa-plus' );
				} )
			} )
		}
		eventToggleHandle();
	});
})(jQuery);