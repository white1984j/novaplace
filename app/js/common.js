$(function() {


	$('.b-sidebar-path__btn').on("click", function() {
		$(this).closest('.b-sidebar-path').toggleClass('active').find('.b-sidebar-path__body').slideToggle()
	});



	//sliders
	$('.b-catalog-item-img-slider').each(function(){
		if( $(this).next('.b-catalog-item-img-slider__numbers').length ){
			var $numbers = $(this).next('.b-catalog-item-img-slider__numbers');
			$numbers.find('.b-catalog-item-img-slider__numbers--max').text( $(this).children().length );
		}
		$(this)
			.slick({
				prevArrow: '<button class="slider-arrow slider-arrow--prev"><i class="icon icon-arrow-white"></i></button>',
				nextArrow: '<button class="slider-arrow slider-arrow--next"><i class="icon icon-arrow-white"></i></button>'
			})
			.on('afterChange', (event, slick, currentSlide) => {
				if( $numbers ){
					$numbers
						.find('.b-catalog-item-img-slider__numbers--max').text( slick.$slides.length ).end()
						.find('.b-catalog-item-img-slider__numbers--curent').text( currentSlide+1 );
				}
			})
	})

	$('.b-detailed-slider').slick({
		prevArrow: '<button class="slider-arrow slider-arrow--prev"><i class="icon icon-arrow-white"></i></button>',
		nextArrow: '<button class="slider-arrow slider-arrow--next"><i class="icon icon-arrow-white"></i></button>'
	})

	function relatedProductsSlider(){
		$('.related-products-slider').slick({
			slidesToShow: 4,
			prevArrow: '<button class="slider-arrow slider-arrow--prev"><i class="icon icon-arrow-white"></i></button>',
			nextArrow: '<button class="slider-arrow slider-arrow--next"><i class="icon icon-arrow-white"></i></button>',
			responsive: [
				{
					breakpoint: 1500,
					settings: {
						slidesToShow: 3
					}
				},{
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
				},{
					breakpoint: 576,
					settings: {
						slidesToShow: 1,
						arrows: false,
						dots: true,
					}
				}
			]
		})
	}
	relatedProductsSlider();



	function productGridSlider(){
		if( $(window).width() < 1500 ){
			if( $('.b-products--grid-slider').hasClass('slick-initialized') )
				return;
			$('.b-products--grid-slider').slick({
				slidesToShow: 4,
				arrows: false,
				dots: true,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3
						}
					},{
						breakpoint: 767,
						settings: {
							slidesToShow: 2
						}
					},{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			})
		}else if( $('.b-products--grid-slider').hasClass('slick-initialized') ){
			$('.b-products--grid-slider').slick('unslick');
		}
	}
	productGridSlider()
	$(window).resize(function() {
		productGridSlider();
	})


	// metro scroll
	$('.metro-stations').each( function() {
		var $wrap = $(this),
				//wrapWidth = Math.ceil( $wrap.width() ),
				$body =  $wrap.find('.metro-stations__body'),
				bodyWidth = Math.ceil( $body.width() ),
				maxScroll = $body[0].scrollWidth,
				scrollLeft = 0;

		function calcProp(){
			bodyWidth = Math.ceil( $body.width() ),
			maxScroll = $body[0].scrollWidth,
			scrollLeft = 0;
		}

		$wrap.find('.metro-stations__scroll-l').on('click', function() {
			$body.animate({ scrollLeft: scrollLeft - 100 }, 200)
		});
		$wrap.find('.metro-stations__scroll-r').on('click', function() {
			$body.animate({ scrollLeft: scrollLeft + 100 }, 200)
		});

		function checkScroll(){
			scrollLeft = Math.ceil( $body.scrollLeft() );
			//console.log( wrapWidth, bodyWidth, scrollLeft, maxScroll );
			( bodyWidth + scrollLeft + 7 < maxScroll ) ? $wrap.addClass('right-scroll') : $wrap.removeClass('right-scroll');
			( scrollLeft > 7 ) ? $wrap.addClass('left-scroll') : $wrap.removeClass('left-scroll');
		}

		checkScroll()

		$body.on('scroll', function() {
			calcProp();
			checkScroll();
		});

		$(window).on('scroll', function() {
			calcProp();
		});
	});


	$('.js-toggle-mob-menu').on("click", function() {
		$(this).toggleClass('open');
		$('.b-mob-menu').slideToggle();
	})




	// select styler
	$('.js-select-styler').select2({
		placeholder: "Выбрать",
		closeOnSelect: false
	});
	$('.b-filter').on('scroll', function() {
		$('.js-select-styler').select2("close");
	});




	// filter
	$('.btn--filter').on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.b-filter').slideToggle();
	});

	$('.b-filter__back').on("click", function() {
		$('.b-filter').slideUp()
	});



	//change view catalog
	$('.b-change-catalog__item--line').on("click", function() {
		$('.b-products').removeClass('b-products--grid');
		$('.slick-slider').slick('setPosition');
	});
	$('.b-change-catalog__item--grid').on("click", function() {
		$('.b-products').addClass('b-products--grid');
		$('.slick-slider').slick('setPosition');
	});



	//tabs
	$(".b-tab-content__item").not(":first").hide();
	$(".b-tabs__item").click(function() {
		$(".b-tabs__item").removeClass("active").eq($(this).index()).addClass("active");
		$(".b-tab-content__item").hide().eq($(this).index()).fadeIn();
		$('.related-products-slider').slick('unslick');
		relatedProductsSlider();
	}).eq(0).addClass("active");

});
