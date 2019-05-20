$(window).on('load', function() {

	function animSectionHome(){

		var wrapLineTransitionDuration = $('.wrapLine span').css('transition-duration');
		var wrapLineTransitionDelay = $('.wrapLine span').css('transition-delay');

		var countLineH1 = $('#section-home .container-text h1.wrapLine span').length;
		var countLineP = $('#section-home .container-text p.wrapLine span').length;

		var delayH1 = (wrapLineTransitionDelay.replace('s', '') * countLineH1) * 1000;
		var delayP = (wrapLineTransitionDelay.replace('s', '') * countLineP) * 1000;

		setTimeout(function() {
			$('#section-home .container-text h1.wrapLine').addClass('anim');

			setTimeout(function() {

				$('#section-home .container-text p.wrapLine').addClass('anim');

				setTimeout(function() {

					$('#section-home .container-text a').addClass('anim');

					var animation = bodymovin.loadAnimation({
					  container: document.getElementById('obj-desktop-1'),
					  renderer: 'svg',
					  loop: false,
					  autoplay: true,
					  path: 'script/animations/sectionCover-obj-desktop-1.json'
					})


					setTimeout(function() {

						var animation = bodymovin.loadAnimation({
						  container: document.getElementById('obj-desktop-2'),
						  renderer: 'svg',
						  loop: false,
						  autoplay: true,
						  path: 'script/animations/sectionCover-obj-desktop-2.json'
						})


						setTimeout(function() {

							var animation = bodymovin.loadAnimation({
							  container: document.getElementById('obj-desktop-3'),
							  renderer: 'svg',
							  loop: false,
							  autoplay: true,
							  path: 'script/animations/sectionCover-obj-desktop-3.json'
							})

							/* SECTION LOGO */
							$('#section-logos').addClass('ready');
							sectionLogosCaroussel(
								'#section-logos', 
								'.container-el .el', 
								2000
							);
						
						}, 500);

					}, 500);

				}, delayP);

			}, delayH1);

		}, 50);

	}
	animSectionHome();


	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-features .obj-1').attr('data-parallax', '{"y": 60, "smoothness": 50}');
		$('#section-features .obj-2').attr('data-parallax', '{"y": -160, "rotateZ": 40, "smoothness": 40}');

		$('#section-pres .obj-1').attr('data-parallax', '{"y": 160, "smoothness": 40}');

	};


	


	/* SECTION QUOTES */
	sectionQuotesCaroussel(
		5000,
		'#section-quotes',  
		".container-quotes .quote", 
		".container-pp .pp", 
		'.nav .btn-nav'
	);
	
})


/* SECTION QUOTES */
	
function sectionQuotesCaroussel(Delay, Section, El, Pp, Nav){

	El = Section + ' ' + El;
	Pp = Section + ' ' + Pp;
	Nav = Section + ' ' + Nav;

	var valDelay = 0;
	var numberEl = $(El).length;
	var countEl;
	
	var drtc;

	var state;

	function prg(drtc){

		state = false;

		var elPp = Pp;

		if (drtc === 'next') {
			countEl++;
		} else if (drtc === 'prev') {
			countEl--;
		};

		if (countEl <= numberEl && countEl >= 1) {

			$(El + '.active').removeClass('active').hide();

			$(El + ':nth-child('+countEl+')').show();

			setTimeout(function() {

				$(El + ':nth-child('+countEl+')').addClass('active');
				
				
				$(elPp + '.active').removeClass('active').addClass('hide').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',   
				    function(e) {

				    $(elPp + '.hide').removeClass('hide').addClass('wait');
				    state = true;

				});

				$('.' + $(El + '.active').data('pp')).removeClass('wait').addClass('active');

			}, 50);


			clearInterval(interval);
			interval = setInterval(function() {
		      prg('next');
		    }, valDelay);

		} else if (countEl < 1) {
			countEl = numberEl;
			prg();
		} else {
			countEl = 1;
			prg();
		};
		
	};

	function init(){	    
		$(El + ':nth-child(1)').show().addClass('active');
		$(Pp + ':nth-child(2)').addClass('active');
		$(Pp + ':not(:nth-child(2))').addClass('wait');
	};

	$(Nav + ':nth-child(1)').click(function(){
		if (state === true) {
			clearInterval(interval);
			prg('next');
		}
		
	})
	$(Nav + ':nth-child(2)').click(function(){
		if (state === true) {
			clearInterval(interval);
			prg('prev');
		}
	})

	$(document).keydown(function (e) {
	  var arrow = { left: 37, right: 39 };

	  switch (e.which) {
	    case arrow.left:
	      	if (state === true) {
				clearInterval(interval);
				prg('prev');
			}
	      break;
	    case arrow.right:
	      	if (state === true) {
				clearInterval(interval);
				prg('prev');
			}
	      break;
	  }
	});

	init();

	var interval = setInterval(function() {
    	prg('next');
    }, valDelay);

    valDelay = Delay;

};


/* SECTION LOGO */

function sectionLogosCaroussel(Section, El, Delay){
	
	var El = Section + ' ' + El;
	var Img = El + ":nth-child(1) img";

	var numberEl = document.querySelectorAll(El).length;
	var countEl = 1;

	var numberImg = document.querySelectorAll(Img).length;
	var countImg = 1;

	function prg(){

		document.querySelector(El).classList.remove('active');
		

		function selectEl(){
			var sEl = El + ':nth-child(' + countEl + ')';
			document.querySelector(sEl).classList.add('active');
		}
		function selectImg(){
			var sImg = El + ':nth-child(' + countEl + ')' + ' ' + 'img';
			var sImgNew = El + ':nth-child(' + countEl + ')' + ' ' + 'img:nth-child(' + countImg + ')';

			[].forEach.call(document.querySelectorAll(sImg), function(el) {
			  el.classList.remove('active');
			});
			document.querySelector(sImgNew).classList.add('active');
		}
		
		if (countEl >= numberEl) {
			countEl = 1;
		} else {
			countEl++;
		}

		if (countImg >= numberImg) {
			countImg = 1;
		} else {
			countImg ++;
		}

		selectImg();
		selectEl();

		clearInterval(interval);
		interval = setInterval(function() {
	      prg();
	    }, Delay);

	}

	function init(){
		$(El + ':nth-child(1) img:nth-child(1)').addClass('active');
		$(El + ':nth-child(2) img:nth-child(2)').addClass('active');
		$(El + ':nth-child(3) img:nth-child(3)').addClass('active');
		$(El + ':nth-child(4) img:nth-child(4)').addClass('active');
		$(El + ':nth-child(5) img:nth-child(5)').addClass('active');
		$(El + ':nth-child(6) img:nth-child(6)').addClass('active');
	};

	init();

	var interval = setInterval(function() {
    	prg();
    }, Delay);

}









