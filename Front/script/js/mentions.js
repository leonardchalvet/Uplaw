$(window).on('load', function() {

	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-mentions .obj-1').attr('data-parallax', '{"y": -100, "smoothness": 80}');

	}
	else {

		$('#section-mentions .wrapper .container-text .container-el .el:first-child').addClass('active');
		
		$('#section-mentions .wrapper .container-text .container-el .el h2').click(function(){
			$(this).parent().toggleClass('active');
		})
	}

})