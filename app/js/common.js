$(function() {


	$('.b-sidebar-path__btn').on("click", function() {
		$(this).closest('.b-sidebar-path').toggleClass('active').find('.b-sidebar-path__body').slideToggle()
	});



	//sliders

	(function() {
		if( !$('.b-catalog-item-img-slider').length ) return;
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
				.on('afterChange', function(event, slick, currentSlide) {
					if( $numbers ){
						$numbers
							.find('.b-catalog-item-img-slider__numbers--max').text( slick.$slides.length ).end()
							.find('.b-catalog-item-img-slider__numbers--curent').text( currentSlide+1 );
					}
				})
		})
	}());
	


	(function(){
		if( !$('.b-detailed-slider').length ) return;

		if( $('.b-detailed-slider').children().length < 4 )
			$('.b-detailed-slider--sm').addClass('slick-not-transform');

		$('.b-detailed-slider').slick({
			infinite: false,
			prevArrow: '<button class="slider-arrow slider-arrow--prev"><i class="icon icon-arrow-white"></i></button>',
			nextArrow: '<button class="slider-arrow slider-arrow--next"><i class="icon icon-arrow-white"></i></button>',
			asNavFor: '.b-detailed-slider--sm'
		})
		$('.b-detailed-slider--sm').slick({
			slidesToShow: 3,
			arrows: false,
			centerMode: true,
			focusOnSelect: true,
			asNavFor: '.b-detailed-slider'
		})
	}());
		

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
		closeOnSelect: false,
		templateSelection: formatTemplateSelection,
		templateResult: formatTemplateResult
	});
	$('.b-filter').on('scroll', function() {
		$('.js-select-styler').select2("close");
	});
	function formatTemplateResult(state){
		if (!state.id) {
			try{
				var $state = $(
					'<span class="select2-selection__choice__span-text" style="'+state.element.attributes.style.value+'">' + state.text + '</span>'
				);
				return $state;
			}catch(err){
				var $state = $(
					'<span class="select2-selection__choice__span-text">' + state.text + '</span>'
				);
				return $state;
			}
		}
		else{
			var $state = $(
				'<span>' + state.text + '</span>'
			);
			return $state;
		}
	}
	function formatTemplateSelection (state) {
		if (!state.id) {
			return state.text;
		}
		try{
			var $state = $(
				'<span class="select2-selection__choice__span-text" style="'+state.element.attributes.style.value+'">' + state.text + '</span>'
			);
			return $state;
		}catch(err){
			var $state = $(
				'<span class="select2-selection__choice__span-text">' + state.text + '</span>'
			);
			return $state;
		}
	};
	$('.metro-item input[type="checkbox"], .b-filter-region-list input[type="checkbox"]').on("click", function() {
		var $option = $('.js-select-styler:visible option[value="'+$(this).val()+'"]'),
				value = $(this).val();
		if( $(this).is(':checked') ){
			$option.prop("selected","selected");
			$('.js-select-styler:visible').trigger("change");
		}else{
			$option.prop("selected","selected");
			$('.js-select-styler:visible').val( $('.js-select-styler:visible').val().filter(function(elem) {
				if( elem !== value )
					return true
				return false
			})).trigger("change");
		}
	});



	// filter
	// $(document).on("click", function(e) {
	// 	if( (!$(e.target).closest('.b-filter').length || !$(e.target).closest('.select2-dropdown').length) && $('.b-filter:not(:animated):visible').length ){
	// 		$('.b-filter').slideUp();
	// 		$('.btn--filter').removeClass('active');
	// 	}
	// });
	$('.btn--filter').on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.b-filter').slideToggle('normal', function() {
			if( $(window).width() < 577 ){
				console.log( $(this).hasClass('b-filter--static') )
				if( !$(this).hasClass('b-filter--static') )
					$(this).css({height: window.innerHeight})
			}
		});

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
		$(this).closest('.b-tab-wrapper').find(".b-tabs__item").removeClass("active").eq($(this).index()).addClass("active");
		$(this).closest('.b-tab-wrapper').find(".b-tab-content__item").hide().eq($(this).index()).fadeIn();
		$('.related-products-slider').slick('unslick');
		relatedProductsSlider();
	}).eq(0).addClass("active");



	//reviews
	$('.b-review').each(function() {
		if( $(this).find('.b-review__text').height() > 80 )
			$(this).addClass('b-review--close')
	});
	$('.b-review-btn').on("click", function() {

		$(this).closest('.b-review').toggleClass('b-review--close')
	});



	//magnific popup
	(function(){
		var val;
		$('.js-mg-pp').magnificPopup({
			callbacks: {
		    elementParse: function(item) {
		      if( $(item.el).attr('data-modal-product-name') )
		      	val =  $(item.el).attr('data-modal-product-name');
		      else
		      	val = "";
		    },
		    open: function(item) {
		    	$(this.content).find('input[name="product-name"]').val(val);
				},
		  }
		})
	}());
		



	//togle mob menu
	$('.toggle-mob-search').on("click", function() {
		$(this).toggleClass('active');
		$('.b-search').slideToggle();
	});



	//.b-filter-region-header
	$('.b-filter-region-header input').on("change", function() {
		var value = $('.b-filter-region-header input:checked').val();
		$('.b-filter-region-global-list > li').hide().each(function() {
			if( $(this).attr('data-region-list') === value || value == "" )
				$(this).show();
		});
	});


	//lightgallery
	$('#lightgallery').lightGallery({
		selector: '.lightgallery-item'
	}); 


	$('.js-anchor').on("click", function(e) {
		var href = $(this).attr('href'),
			position = $(href).offset().top;
		$('html, body').animate({ scrollTop: position }, 700);
		e.preventDefault();
	});




	//scroll back top
	$('.b-back-top').on("click", function() {
		$('html, body').animate({ scrollTop: 0 }, 700);
	});
	$(window).scroll(function() {
		if( $(window).scrollTop() > 1000 )
			$('.b-back-top').addClass('b-back-top--visible');
		else
			$('.b-back-top').removeClass('b-back-top--visible');
	});


	// mask
	$('input[type="tel"]')
		.addClass('input-mask')
		.inputmask({ 
			"mask": "+7(999)999-99-99", 
			"cc": "RU", 
			"name_en": "Russia", 
			"desc_en": "", 
			"name_ru": "Россия", 
			"desc_ru": "" 
		})
		.on('input', function(e){
			if( isNumeric( $(this).val().slice(-1) ) )
				$(this).addClass('isValid');
			else
				$(this).removeClass('isValid');
		});
	$('input[type="email"]')
		.addClass('input-mask')
		.on('input', function() {
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if( re.test( $(this).val().toLowerCase() ))
				$(this).addClass('isValid')
			else
				$(this).removeClass('isValid')
		});


	function isNumeric(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	};



	//check form
	$('form').on('submit', function(e) {

		var err = false;

		$(this).find('input.required').each(function() {
			if( $(this).hasClass('input-check-agreement-data') && !$(this).is(':checked') )
				addError($(this))
			else if( $(this).hasClass('input-mask') && !$(this).hasClass('isValid') )
				addError($(this))
			else if( !$(this).val().length )
				addError($(this))
		})

		if(err)
			e.preventDefault();
		else{
			$.magnificPopup.close();
			$.magnificPopup.open({
				items: {
					src: '#success-dispatch'
				},
					type: 'inline'
			});
			e.preventDefault();
		}

		function addError(elem){
			elem.closest('.b-label').addClass('b-label--error');
			err = true;
		}
	});

	//remove label error
	$('.b-input, input.input-check-agreement-data').on('focus change', function() {
		if( $(this).closest('.b-label--error').length )
			$(this).closest('.b-label--error').removeClass('b-label--error')
	});


});


$(document).ready(function(){ 
	if( !$('#map-contacts').length ) return;

	ymaps.ready(init);

	function init () {

		var myMap = new ymaps.Map("map-contacts", {
            center: [55.764646, 37.633165],
            zoom: 18
        }),
        myPlacemark = new ymaps.Placemark([55.764646, 37.633165], {
            // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
            balloonContentBody: "<div style='font-size: 15px; margin: 10px'><p style='margin-bottom: 10px'>1010000, г. Москва,<br> Милютинский переулок 18A</p> пн.-пт. с 10:00 до 18:00 <br> 8 (495) 771-20-37<br>info@viparenda.ru</div>",
        });

    myMap.geoObjects.add(myPlacemark);

    myPlacemark.balloon.open(myMap.getCenter());
	}

});




