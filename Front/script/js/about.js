$(window).on('load', function() {

	if (window.matchMedia("(min-width: 700px)").matches) {

		$('#section-origin .obj-1').attr('data-parallax', '{"y": -50, "smoothness": 40}');

		$('#section-team .obj').attr('data-parallax', '{"y": -150, "smoothness": 60}');

		$('#section-press .obj').attr('data-parallax', '{"y": -60, "rotateZ": 40, "smoothness": 40}');

	};

	let interval;
	let right, left = false;
	let widthSection = $('#section-photos').width();
	let containerPhoto = $('#section-photos .container-photo');
	$( "#section-photos" ).mousemove(function( event ) {
		let posX = event.pageX;

		if(posX >= 0 && posX <= widthSection / 5) {
			if(!right) {
				interval = setInterval(function(){
					let move = parseInt(getTransformX()) - 30;
					if(move > - (( ($('#section-photos .container-photo .photo').width()+20) * $('#section-photos .container-photo .photo').length) + 20 - widthSection) ) {
						containerPhoto.css({'transform':'translateX(' + move + 'px)'});
					}
					else {
						clearInterval(interval);
					}
				}, 50);

				right = true;
				left = false;
			}
		}
		else if(posX >= widthSection - widthSection / 5 && posX < widthSection) {
			if(!left) {
				interval = setInterval(function(){
					let move = parseInt(getTransformX()) + 30;
					if(move < 20) {
						containerPhoto.css({'transform':'translateX(' + move + 'px)'});
					}
					else {
						clearInterval(interval);
					}
				}, 50);

				left = true;
				right = false;
			}
		}
		else {
			left = false;
			right = false;
		}

		if(!right && !left) {
			clearInterval(interval);
		}
	})

	let middle = (widthSection - widthSection / 2) / 2;
	containerPhoto.css({'transform':'translateX(-' + middle + 'px)'})

	function getTransformX() {
		let transformMatrix = containerPhoto.css("transform");
		let matrix = transformMatrix.replace(/[^0-9\-.,]/g, '').split(',');
		return matrix[12] || matrix[4];
	}

})