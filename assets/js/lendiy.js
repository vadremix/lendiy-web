
// Animates navbar when user scrolls

$('.wrapper').waypoint(function(direction) {
	if(direction == 'down') {
		$('.navbar').css({ marginTop: '0px' });
		$(".navbar").toggleClass("navbar-default navbar-inverse");
		$(".navbar").toggleClass("navbar-absolute-top navbar-fixed-top");
	} else if(direction == 'up') {
		$('.navbar').css({ marginTop: '15px' });
		$(".navbar").toggleClass("navbar-inverse navbar-default");
		$(".navbar").toggleClass("navbar-fixed-top navbar-absolute-top");
	}
}, {
	offset: -15
});


// Intercepts scroll wheel to make scrolling smooth

$(function(){	

	var $window = $(window);
	var scrollTime = 0.2;
	var scrollDistance = 100;

	$window.on("mousewheel DOMMouseScroll", function(event){

		event.preventDefault();	

		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);

		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,
				overwrite: 5							
			});

	});
});