$(window).on('load', function() {

	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-origin .obj-1').attr('data-parallax', '{"y": -50, "smoothness": 40}');

		$('#section-team .obj').attr('data-parallax', '{"y": -150, "smoothness": 60}');

		$('#section-press .obj').attr('data-parallax', '{"y": -60, "rotateZ": 40, "smoothness": 40}');

	};

})