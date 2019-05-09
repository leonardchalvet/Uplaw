$(window).on('load', function() {
	
	$window = $(window);

	$window.scroll(function() {

	    if ( $window.scrollTop() >= 1 ) {
	        $('#header-desktop').addClass('scroll');
	        $('#header-mobile').addClass('scroll');
	    } else {
	    	$('#header-desktop').removeClass('scroll');
	    	$('#header-mobile').removeClass('scroll');
	    };
	});

	if (window.matchMedia("(min-width: 1000px)").matches) {
		$('#header-mobile .container-nav .wrapper .burger').click(function (){
			$('#header-mobile').toggleClass('active');
			$('body').toggleClass('block');
		})
		$('#header-mobile .container-menu .wrapper .container-link li:first-child a').click(function (){
			$('#header-mobile .container-menu .wrapper .container-link .dropdown').toggleClass('active');
		})
	}

	/*=================================
	=            WRAP LINE            =
	=================================*/

	(function($){

	/**
	 * Creates a temporary clone
	 *
	 * @param element element The element to clone
	 */
		function _createTemp(element) {
			return element.clone().css({position: 'relative', width: '98%'});
		};

	/**
	 * Splits contents into words, keeping their original Html tag. Note that this
	 * tags *each* word with the tag it was found in, so when the wrapping begins
	 * the tags stay intact. This may have an effect on your styles (say, if you have
	 * margin, each word will inherit those styles).
	 *
	 * @param node contents The contents
	 */
		function _splitHtmlWords(contents) {
			var words = [];
			var splitContent;
			for (var c=0; c<contents.length; c++) {
				if (contents[c].nodeType == 3) {
					splitContent = _splitWords(contents[c].textContent || contents[c].toString());
				} else {
					var tag = $(contents[c]).clone();
					splitContent = _splitHtmlWords(tag.contents());
					for (var t=0; t<splitContent.length; t++) {
						tag.empty();
						splitContent[t] = tag.html(splitContent[t]).wrap('<p></p>').parent().html();
					}
				}
				for (var w=0; w<splitContent.length; w++) {
					words.push(splitContent[w]);
				}
			}
			return words;
		};

	/**
	 * Splits words by spaces
	 *
	 * @param string text The text to split
	 */
		function _splitWords(text) {
			return text.split(/\s+/);
		}

	/**
	 * Formats html with tags and wrappers.
	 *
	 * @param tag
	 * @param html content wrapped by the tag
	 */
		function _markupContent(tag, html) {
			// wrap in a temp div so .html() gives us the tags we specify
			tag = '<div>' + tag;
			// find the deepest child, add html, then find the parent
			return $(tag)
				.find('*:not(:has("*"))')
				.html(html)
				.parentsUntil()
				.slice(-1)
				.html();
		}

	/**
	 * The jQuery plugin function. See the top of this file for information on the
	 * options
	 */
		$.fn.splitLines = function(options) {
			var settings = {
				width: 'auto',
				tag: '<div>',
				wrap: '',
				keepHtml: true
			};
			if (options) {
				$.extend(settings, options);
			}
			var newHtml = _createTemp(this);
			var contents = this.contents();
			var text = this.text();
			this.append(newHtml);
			newHtml.text('42');
			var maxHeight = newHtml.height()+2;
			newHtml.empty();

			var tempLine = _createTemp(newHtml);
			if (settings.width !== 'auto') {
				tempLine.width(settings.width);
			}
			this.append(tempLine);
			var words = settings.keepHtml ? _splitHtmlWords(contents) : _splitWords(text);
			var prev;
			for (var w=0; w<words.length; w++) {
				var html = tempLine.html();
				tempLine.html(html+words[w]+' ');
				if (tempLine.html() == prev) {
					// repeating word, it will never fit so just use it instead of failing
					prev = '';
					newHtml.append(_markupContent(settings.tag, tempLine.html()));
					tempLine.html('');
					continue;
				}
				if (tempLine.height() > maxHeight) {
					prev = tempLine.html();
					tempLine.html(html);
					newHtml.append(_markupContent(settings.tag, tempLine.html()));
					tempLine.html('');
					w--;
				}
			}
			newHtml.append(_markupContent(settings.tag, tempLine.html()));

			this.html(newHtml.html());

		};
	})(jQuery);

	/* ACTIVE */
	$('.wrapLine').each(function (index) {
	    $(this).splitLines({tag:'<span>'});
	});


	/*=====  End of WRAP LINE  ======*/


	/*===================================
	=            	HEADER              =
	====================================*/

	$('#header-desktop .wrapper .container-link ul li:first-child').mouseenter(function(){
		let pointer = $('#header-desktop .wrapper .container-link ul');
		pointer.addClass('block');
		setTimeout(function(){
			pointer.addClass('show');
		}, 50);
	})

	$('#header-desktop .wrapper .container-link ul .dropdown').mouseleave(function(){
		closeDropdownLinkHeader();
	})
	$('#header-desktop .wrapper .container-link .logo').mouseenter(function(){
		closeDropdownLinkHeader();
	})
	$('#header-desktop .wrapper .container-link ul li:not(:first-child)').mouseenter(function(){
		closeDropdownLinkHeader();
	})
	$('#header-desktop .wrapper .container-action').mouseenter(function(){
		closeDropdownLinkHeader();
	})

	function closeDropdownLinkHeader() {
		let pointer = $('#header-desktop .wrapper .container-link ul');
		pointer.removeClass('show');
		setTimeout(function(){
			pointer.removeClass('block');
		}, 100);
	}


	/****************/


	$('#header-desktop .wrapper .container-action .login').click(function(){
		openLogin('#header-desktop .wrapper .container-action .lg-log-in');
	})

	$('#header-mobile .container-nav .wrapper .cta-log-in').click(function(){
		$('body').addClass('block');
		openLogin('#header-mobile .lg-log-in');
	})
	$('#header-mobile .container-menu .wrapper .container-action .login').click(function(){
		$('body').addClass('block');
		openLogin('#header-mobile .lg-log-in');
	})

	function openLogin(link) {
		let pointer = $(link);
		pointer.addClass('block');
		setTimeout(function(){
			pointer.addClass('show');
		}, 50);
	}

	$('#header-desktop .wrapper .container-action .lg-log-in .cross').click(function(){
		closeLogin('#header-desktop .wrapper .container-action .lg-log-in');
	})
	$('#header-mobile .lg-log-in .cross').click(function(){
		$('body').removeClass('lightbox');
		closeLogin('#header-mobile .lg-log-in');
	})

	function closeLogin(link) {
		let pointer = $(link);
		pointer.removeClass('show');
		setTimeout(function(){
			pointer.removeClass('block');
		}, 100);
	}

	$('body').on('click', function(event) { 
	    if (!$(event.target).closest('#header-desktop .wrapper .container-action .lg-log-in').length) {
	    	if($('#header-desktop .wrapper .container-action .lg-log-in').hasClass('show'))
	    		$('#header-desktop .wrapper .container-action .lg-log-in .cross').click();
	    }
	})

	/***************/

	$('#header-desktop .wrapper .container-action .contact').click(function () {
		$('body').addClass('lightbox');
		openContact();
	})

	$('#header-mobile .container-menu .wrapper .container-action .contact').click(function(){
		openContact();
	})

	function openContact() {
		let pointer = $('.container-lg');
		$('body').addClass('block');
		pointer.addClass('block');
		setTimeout(function(){
			pointer.addClass('show');
		}, 50);
	}

	$('.lg-contact .cross').click(function (){
		let pointer = $('.container-lg');
		$('body').removeClass('block');
		$('body').removeClass('lightbox');
		pointer.removeClass('show');
		setTimeout(function(){
			pointer.removeClass('block');
		}, 100);
	})
	$('body').on('click', function(event) {
	    if (!$(event.target).closest('.container-lg .lg-contact').length) {
	    	console.log(event.target);
	    	if($('.container-lg').hasClass('show'))
	    		$('.lg-contact .cross').click();
	    }
	})

	/*========  End of HEADER  =========*/


	/*===================================
	=            	FOOTER              =
	====================================*/

	$('footer .wrapper .container-lang>.lg').click(function(){
		let pointer = $('footer .wrapper .container-lang');
		if(!pointer.hasClass('block')) {
			pointer.addClass('block');
			setTimeout(function(){
				pointer.addClass('show');
			}, 50);
		}
		else {
			pointer.removeClass('show');
			setTimeout(function(){
				pointer.removeClass('block');
			}, 100);	
		}
	})

	$('body').on('click', function(event) { 
	    if (!$(event.target).closest('footer .wrapper .container-lang.show .dropdown').length) {
	    	if($('footer .wrapper .container-lang').hasClass('show'))
	    		$('footer .wrapper .container-lang >.lg').click();
	    }
	})

	/*========  End of FOOTER  =========*/
})




