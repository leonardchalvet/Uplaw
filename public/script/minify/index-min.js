function sectionQuotesCaroussel(t,e,n,a,i){n=e+" "+n,a=e+" "+a,i=e+" "+i;var c=0,s=$(n).length,o,l,d;function h(t){d=!1;var e=a;"next"===t?o++:"prev"===t&&o--,o<=s&&o>=1?($(n+".active").removeClass("active").hide(),$(n+":nth-child("+o+")").show(),setTimeout(function(){$(n+":nth-child("+o+")").addClass("active"),$(e+".active").removeClass("active").addClass("hide").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(t){$(e+".hide").removeClass("hide").addClass("wait"),d=!0}),$("."+$(n+".active").data("pp")).removeClass("wait").addClass("active")},50),clearInterval(v),v=setInterval(function(){h("next")},c)):o<1?(o=s,h()):(o=1,h())}function r(){$(n+":nth-child(1)").show().addClass("active"),$(a+":nth-child(2)").addClass("active"),$(a+":not(:nth-child(2))").addClass("wait")}$(i+":nth-child(1)").click(function(){!0===d&&(clearInterval(v),h("next"))}),$(i+":nth-child(2)").click(function(){!0===d&&(clearInterval(v),h("prev"))}),$(document).keydown(function(t){var e=37,n=39;switch(t.which){case e:case n:!0===d&&(clearInterval(v),h("prev"))}}),r();var v=setInterval(function(){h("next")},c);c=t}function sectionLogosCaroussel(t,e,n){var e,a=(e=t+" "+e)+":nth-child(1) img",i=document.querySelectorAll(e).length,c=1,s=document.querySelectorAll(a).length,o=1;function l(){function t(){var t=e+":nth-child("+c+")";document.querySelector(t).classList.add("active")}function a(){var t=e+":nth-child("+c+") img",n=e+":nth-child("+c+") img:nth-child("+o+")";[].forEach.call(document.querySelectorAll(t),function(t){t.classList.remove("active")}),document.querySelector(n).classList.add("active")}document.querySelector(e).classList.remove("active"),c>=i?c=1:c++,o>=s?o=1:o++,a(),t(),clearInterval(h),h=setInterval(function(){l()},n)}function d(){$(e+":nth-child(1) img:nth-child(1)").addClass("active"),$(e+":nth-child(2) img:nth-child(2)").addClass("active"),$(e+":nth-child(3) img:nth-child(3)").addClass("active"),$(e+":nth-child(4) img:nth-child(4)").addClass("active"),$(e+":nth-child(5) img:nth-child(5)").addClass("active"),$(e+":nth-child(6) img:nth-child(6)").addClass("active")}d();var h=setInterval(function(){l()},n)}$(window).on("load",function(){window.matchMedia("(min-width: 700px)").matches&&($("#section-features .obj-1").attr("data-parallax",'{"y": 60, "smoothness": 50}'),$("#section-features .obj-2").attr("data-parallax",'{"y": -160, "rotateZ": 40, "smoothness": 40}'),$("#section-pres .obj-1").attr("data-parallax",'{"y": 160, "smoothness": 40}')),sectionLogosCaroussel("#section-logos",".container-el .el",2e3),sectionQuotesCaroussel(5e3,"#section-quotes",".container-quotes .quote",".container-pp .pp",".nav .btn-nav")});