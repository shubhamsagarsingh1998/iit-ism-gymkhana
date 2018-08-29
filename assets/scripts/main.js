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

	$("#awards").click(function(){
		$("#awards").removeClass("active");
		$("#newsletters").removeClass("active");
		$("#awards").addClass("active");
	});

	$("#newsletters").click(function(){
		$("#awards").removeClass("active");
		$("#newsletters").removeClass("active");
		$("#newsletters").addClass("active");
	});
});
