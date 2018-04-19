'use strict';

$(function () {

	console.log(1);

	$('.b-sidebar-path__btn').on("click", function () {
		$(this).closest('.b-sidebar-path').toggleClass('active').find('.b-sidebar-path__body').slideToggle();
	});

	$('.b-catalog-item-img-slider').each(function () {
		if ($(this).next('.b-catalog-item-img-slider__numbers').length) {
			var $numbers = $(this).next('.b-catalog-item-img-slider__numbers');
			$numbers.find('.b-catalog-item-img-slider__numbers--max').text($(this).children().length);
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
		    $body = $wrap.find('.metro-stations__body');
		$wrap.scroll(function () {});
	});
});