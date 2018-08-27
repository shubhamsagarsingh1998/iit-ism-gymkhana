$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		loop: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			}
		}
	});
});
