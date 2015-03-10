//Virkni á mynd á upphafsíðu
$(document).ready(function(){
	$window = $(window);
	var jumboHeight = $('.jumbotron').outerHeight();
	//Fall sem notar jQuery til þess að láta slideshow/mynd á forsíðu scrollast hægar en restin af síðunni
	function parallax(){
	    var scrolled = $(window).scrollTop();
	    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
	}
	//Þegar glugga er scrollað er kallað á parallax fallið
	$(window).scroll(function(e){
	    parallax();
	});

	
});