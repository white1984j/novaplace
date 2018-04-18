$(function() {

	$('.b-sidebar-path__btn').on("click", function() {
		$(this).closest('.b-sidebar-path').toggleClass('active').find('.b-sidebar-path__body').slideToggle()
	});

});
