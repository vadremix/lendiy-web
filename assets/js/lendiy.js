
// Animates navbar when user scrolls

$('.wrapper').waypoint(function(direction) {
	console.log('hit ' + direction);
	if(direction == 'down') {
		$('.navbar').animate({ marginTop: '0px' }, 150);
	} else if(direction == 'up') {
		$('.navbar').animate({ marginTop: '10px' }, 100);
	}
}, {
	offset: -10
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