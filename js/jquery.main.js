(function($){

$(function(){
	$('.btn-menu').click(function(event) {
		$('.main-navigation-mobile').slideToggle(500);
		return false;
	});
});

})(jQuery);