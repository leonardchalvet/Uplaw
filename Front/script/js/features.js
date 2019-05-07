$(window).on('load', function() {

	$window = $(window);
	function animScroll() {
		var windowHeight = $window.height() / 1.5;
	    $('#section-demo .el').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
	            if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
		

	function animSectionHome(){

		var wrapLineTransitionDuration = $('.wrapLine span').css('transition-duration');
		var wrapLineTransitionDelay = $('.wrapLine span').css('transition-delay');

		var countLineH1 = $('#section-cover .container-text h1.wrapLine span').length;

		var delayH1 = (wrapLineTransitionDelay.replace('s', '') * countLineH1) * 1000;


		$('#section-cover').addClass('anim');
		setTimeout(function() {
			$('#section-cover .container-text h1.wrapLine').addClass('anim');

			setTimeout(function() {

			
			}, delayH1);

		}, 50);

	}
	animSectionHome();

	$('#section-demo .wrapper .container-text').css('top', ($window.height()/2) - ($('#section-demo .wrapper .container-text').height()/2));


	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-features .obj-1').attr('data-parallax', '{"y": 60, "smoothness": 50}');
		$('#section-features .obj-2').attr('data-parallax', '{"y": -160, "rotateZ": -80, "smoothness": 40}');

	};



})