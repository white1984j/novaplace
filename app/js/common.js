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
		infinite: false,
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
	$('.js-mg-pp').magnificPopup()



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


});





$(document).ready(function(){ 
   var polygonOptions = {
	  strokeColor: '#0000ff',
	  fillColor: '#8080ff',
	  interactivityModel: 'default#transparent',
	  strokeWidth: 4,
	  opacity: 0.7
	};

	var canvasOptions = {
	  strokeStyle: '#0000ff',
	  lineWidth: 4,
	  opacity: 0.7
	};

	if( $('#map').length ){
		ymaps.ready(['Map', 'Polygon']).then(function() {
	  var map = new ymaps.Map('map', { center: [55.75, 37.62], zoom: 8 });
	  var polygon = null;

	  var drawButton = document.querySelector('#draw');

	  drawButton.onclick = function() {
	    drawButton.disabled = true;

	    drawLineOverMap(map)
	      .then(function(coordinates) {
	        // Переводим координаты из 0..1 в географические.
	        var bounds = map.getBounds();
	        coordinates = coordinates.map(function(x) {
	          return [
	            // Широта (latitude).
	            // Y переворачивается, т.к. на canvas'е он направлен вниз.
	            bounds[0][0] + (1 - x[1]) * (bounds[1][0] - bounds[0][0]),
	            // Долгота (longitude).
	            bounds[0][1] + x[0] * (bounds[1][1] - bounds[0][1]),
	          ];
	        });

	        // Тут надо симплифицировать линию.
	        // Для простоты я оставляю только каждую третью координату.
	        coordinates = coordinates.filter(function (_, index) {
	          return index % 3 === 0;
	        });

	        // Удаляем старый полигон.
	        if (polygon) {
	          map.geoObjects.remove(polygon);
	        }

	        // Создаем новый полигон
	        polygon = new ymaps.Polygon([coordinates], {}, polygonOptions);
	        map.geoObjects.add(polygon);

	        drawButton.disabled = false;
	      });
		  };
		});

		function drawLineOverMap(map) {
		  var canvas = document.querySelector('#draw-canvas');
		  var ctx2d = canvas.getContext('2d');
		  var drawing = false;
		  var coordinates = [];

		  // Задаем размеры канвасу как у карты.
		  var rect = map.container.getParentElement().getBoundingClientRect();
		  canvas.style.width = rect.width + 'px';
		  canvas.style.height = rect.height + 'px';
		  canvas.width = rect.width;
		  canvas.height = rect.height;

		  // Применяем стили.
		  ctx2d.strokeStyle = canvasOptions.strokeStyle;
		  ctx2d.lineWidth = canvasOptions.lineWidth;
		  canvas.style.opacity = canvasOptions.opacity;

		  ctx2d.clearRect(0, 0, canvas.width, canvas.height);

		  // Показываем канвас. Он будет сверху карты из-за position: absolute.
		  canvas.style.display = 'block';

		  canvas.onmousedown = function(e) {
		    // При нажатии мыши запоминаем, что мы начали рисовать и координаты.
		    drawing = true;
		    coordinates.push([e.offsetX, e.offsetY]);
		  };

		  canvas.onmousemove = function(e) {
		    // При движении мыши запоминаем координаты и рисуем линию.
		    if (drawing) {
		      var last = coordinates[coordinates.length - 1];
		      ctx2d.beginPath();
		      ctx2d.moveTo(last[0], last[1]);
		      ctx2d.lineTo(e.offsetX, e.offsetY);
		      ctx2d.stroke();

		      coordinates.push([e.offsetX, e.offsetY]);
		    }
		  };

		  return new Promise(function(resolve) {
		    // При отпускании мыши запоминаем координаты и скрываем канвас.
		    canvas.onmouseup = function(e) {
		      coordinates.push([e.offsetX, e.offsetY]);
		      canvas.style.display = 'none';
		      drawing = false;

		      coordinates = coordinates.map(function(x) {
		        return [x[0] / canvas.width, x[1] / canvas.height];
		      });

		      resolve(coordinates);
		    };
		  });
		}
	}

});
