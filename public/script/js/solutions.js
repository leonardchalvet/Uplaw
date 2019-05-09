$(window).on('load', function() {

	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-cover .obj').attr('data-parallax', '{"y": -50, "smoothness": 20}');

		$('#section-cta .obj').attr('data-parallax', '{"y": -160, "smoothness": 40}');

	};

})