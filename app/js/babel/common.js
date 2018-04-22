'use strict';

$(function () {

	$('.b-sidebar-path__btn').on("click", function () {
		$(this).closest('.b-sidebar-path').toggleClass('active').find('.b-sidebar-path__body').slideToggle();
	});

	$('.b-catalog-item-img-slider').each(function () {
		if ($(this).next('.b-catalog-item-img-slider__numbers').length) {
			var _$numbers = $(this).next('.b-catalog-item-img-slider__numbers');
			_$numbers.find('.b-catalog-item-img-slider__numbers--max').text($(this).children().length);
		}
		$(this).slick({
			prevArrow: '<button class="slider-arrow slider-arrow--prev"><i class="icon icon-arrow-white"></i></button>',
			nextArrow: '<button class="slider-arrow slider-arrow--next"><i class="icon icon-arrow-white"></i></button>'
		}).on('afterChange', function (event, slick, currentSlide) {
			if ($numbers) {
				$numbers.find('.b-catalog-item-img-slider__numbers--max').text(slick.$slides.length).end().find('.b-catalog-item-img-slider__numbers--curent').text(currentSlide + 1);
			}
		});
	});

	$('.metro-stations').each(function () {
		var $wrap = $(this),

		//wrapWidth = Math.ceil( $wrap.width() ),
		$body = $wrap.find('.metro-stations__body'),
		    bodyWidth = Math.ceil($body.width()),
		    maxScroll = $body[0].scrollWidth,
		    scrollLeft = 0;

		$wrap.find('.metro-stations__scroll-l').on('click', function () {
			$body.animate({ scrollLeft: scrollLeft - 100 }, 300);
		});
		$wrap.find('.metro-stations__scroll-r').on('click', function () {
			$body.animate({ scrollLeft: scrollLeft + 100 }, 300);
		});

		function checkScroll() {
			scrollLeft = Math.ceil($body.scrollLeft());
			//console.log( wrapWidth, bodyWidth, scrollLeft, maxScroll );
			bodyWidth + scrollLeft + 7 < maxScroll ? $wrap.addClass('right-scroll') : $wrap.removeClass('right-scroll');
			scrollLeft > 7 ? $wrap.addClass('left-scroll') : $wrap.removeClass('left-scroll');
		}

		checkScroll();

		$body.on('scroll', function () {
			checkScroll();
		});
	});

	$('.js-toggle-mob-menu').on("click", function () {
		$(this).toggleClass('open');
		$('.b-mob-menu').slideToggle();
	});
});