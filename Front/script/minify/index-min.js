function sectionQuotesCaroussel(t,e,n,a,o){n=e+" "+n,a=e+" "+a,o=e+" "+o;var i=0,s=$(n).length,c,l,d;function r(t){d=!1;var e=a;"next"===t?c++:"prev"===t&&c--,c<=s&&c>=1?($(n+".active").removeClass("active").hide(),$(n+":nth-child("+c+")").show(),setTimeout(function(){$(n+":nth-child("+c+")").addClass("active"),$(e+".active").removeClass("active").addClass("hide").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(t){$(e+".hide").removeClass("hide").addClass("wait"),d=!0}),$("."+$(n+".active").data("pp")).removeClass("wait").addClass("active")},50),clearInterval(u),u=setInterval(function(){r("next")},i)):c<1?(c=s,r()):(c=1,r())}function h(){$(n+":nth-child(1)").show().addClass("active"),$(a+":nth-child(2)").addClass("active"),$(a+":not(:nth-child(2))").addClass("wait")}$(o+":nth-child(1)").click(function(){!0===d&&(clearInterval(u),r("next"))}),$(o+":nth-child(2)").click(function(){!0===d&&(clearInterval(u),r("prev"))}),$(document).keydown(function(t){var e=37,n=39;switch(t.which){case e:case n:!0===d&&(clearInterval(u),r("prev"))}}),h();var u=setInterval(function(){r("next")},i);i=t}function sectionLogosCaroussel(t,e,n){var e,a=(e=t+" "+e)+":nth-child(1) img",o=document.querySelectorAll(e).length,i=1,s=document.querySelectorAll(a).length,c=1;function l(){function t(){var t=e+":nth-child("+i+")";document.querySelector(t).classList.add("active")}function a(){var t=e+":nth-child("+i+") img",n=e+":nth-child("+i+") img:nth-child("+c+")";[].forEach.call(document.querySelectorAll(t),function(t){t.classList.remove("active")}),document.querySelector(n).classList.add("active")}document.querySelector(e).classList.remove("active"),i>=o?i=1:i++,c>=s?c=1:c++,a(),t(),clearInterval(r),r=setInterval(function(){l()},n)}function d(){$(e+":nth-child(1) img:nth-child(1)").addClass("active"),$(e+":nth-child(2) img:nth-child(2)").addClass("active"),$(e+":nth-child(3) img:nth-child(3)").addClass("active"),$(e+":nth-child(4) img:nth-child(4)").addClass("active"),$(e+":nth-child(5) img:nth-child(5)").addClass("active"),$(e+":nth-child(6) img:nth-child(6)").addClass("active")}d();var r=setInterval(function(){l()},n)}$(window).on("load",function(){function t(){var t=$(".wrapLine span").css("transition-duration"),e=$(".wrapLine span").css("transition-delay"),n=$("#section-home .container-text h1.wrapLine span").length,a=$("#section-home .container-text p.wrapLine span").length,o=e.replace("s","")*n*1e3,i=e.replace("s","")*a*1e3;setTimeout(function(){$("#section-home .container-text h1.wrapLine").addClass("anim"),setTimeout(function(){$("#section-home .container-text p.wrapLine").addClass("anim"),setTimeout(function(){$("#section-home .container-text a").addClass("anim");var t=bodymovin.loadAnimation({container:document.getElementById("obj-desktop-1"),renderer:"svg",loop:!1,autoplay:!0,path:"script/animations/sectionCover-obj-desktop-1.json"});setTimeout(function(){var t=bodymovin.loadAnimation({container:document.getElementById("obj-desktop-2"),renderer:"svg",loop:!1,autoplay:!0,path:"script/animations/sectionCover-obj-desktop-2.json"});setTimeout(function(){var t=bodymovin.loadAnimation({container:document.getElementById("obj-desktop-3"),renderer:"svg",loop:!1,autoplay:!0,path:"script/animations/sectionCover-obj-desktop-3.json"});$("#section-logos").addClass("ready"),sectionLogosCaroussel("#section-logos",".container-el .el",2e3)},500)},500)},i)},o)},50)}t(),window.matchMedia("(min-width: 700px)").matches&&($("#section-features .obj-1").attr("data-parallax",'{"y": 60, "smoothness": 50}'),$("#section-features .obj-2").attr("data-parallax",'{"y": -160, "rotateZ": 40, "smoothness": 40}'),$("#section-pres .obj-1").attr("data-parallax",'{"y": 160, "smoothness": 40}')),sectionQuotesCaroussel(5e3,"#section-quotes",".container-quotes .quote",".container-pp .pp",".nav .btn-nav")});