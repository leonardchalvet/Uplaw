$(window).on('load', function() {

	function animSectionHome(){

		var wrapLineTransitionDuration = $('.wrapLine span').css('transition-duration');
		var wrapLineTransitionDelay = $('.wrapLine span').css('transition-delay');

		var countLineH1 = $('#section-cover .container-text h1.wrapLine span').length;
		var countLineP = $('#section-cover .container-text p.wrapLine span').length;

		var delayH1 = (wrapLineTransitionDelay.replace('s', '') * countLineH1) * 1000;
		var delayP = (wrapLineTransitionDelay.replace('s', '') * countLineP) * 1000;

		setTimeout(function() {
			$('#section-cover').addClass('anim');
			$('#section-cover .container-text h1.wrapLine').addClass('anim');

			setTimeout(function() {

				$('#section-cover .container-text p.wrapLine').addClass('anim');

				setTimeout(function() {

					

				}, delayP);

			}, delayH1);

		}, 50);

	}
	animSectionHome();




	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-features .obj-1').attr('data-parallax', '{"y": -160, "rotateZ": -80, "smoothness": 40}');

	};


})