$(window).on('load', function() {

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


	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-features .obj-1').attr('data-parallax', '{"y": 60, "smoothness": 50}');
		$('#section-features .obj-2').attr('data-parallax', '{"y": -160, "rotateZ": -80, "smoothness": 40}');

	};


})


$(document).ready(function() {

	var stickyElement = $('#section-demo .wrapper .container-text');
	var stickyElementPosition = stickyElement.offset().top;
	var headerHeight = $('#header-desktop').height();
	var sectionElementPadding = parseInt($('#section-demo').css('padding-top'));

	var positionSticky = stickyElementPosition +headerHeight + sectionElementPadding;


	  $(window).scroll(function() {
	    var windowTop = $(window).scrollTop();
	   if (windowTop > positionSticky) {
	   		stickyElement.addClass('sticky');
	   } else {
	   		stickyElement.removeClass('sticky');
	   }
	  });

});