$(window).on("load",function(){function e(){let e=$("#header-desktop .wrapper .container-link ul");e.removeClass("show"),setTimeout(function(){e.removeClass("block")},100)}$window=$(window),$window.scroll(function(){$window.scrollTop()>=1?($("#header-desktop").addClass("scroll"),$("#header-mobile").addClass("scroll")):($("#header-desktop").removeClass("scroll"),$("#header-mobile").removeClass("scroll"))}),window.matchMedia("(min-width: 1000px)").matches&&($("#header-mobile .container-nav .wrapper .burger").click(function(){$("#header-mobile").toggleClass("active"),$("body").toggleClass("block")}),$("#header-mobile .container-menu .wrapper .container-link li:first-child a").click(function(){$("#header-mobile .container-menu .wrapper .container-link .dropdown").toggleClass("active")})),function(e){function o(e){return e.clone().css({position:"relative",width:"98%"})}function t(e){return e.split(/\s+/)}function n(o,t){return e(o="<div>"+o).find('*:not(:has("*"))').html(t).parentsUntil().slice(-1).html()}e.fn.splitLines=function(a){var l={width:"auto",tag:"<div>",wrap:"",keepHtml:!0};a&&e.extend(l,a);var r=o(this),i=this.contents(),s=this.text();this.append(r),r.text("42");var c=r.height()+2;r.empty();var d=o(r);"auto"!==l.width&&d.width(l.width),this.append(d);for(var p,h=l.keepHtml?function o(n){for(var a,l=[],r=0;r<n.length;r++){if(3==n[r].nodeType)a=t(n[r].textContent||n[r].toString());else{var i=e(n[r]).clone();a=o(i.contents());for(var s=0;s<a.length;s++)i.empty(),a[s]=i.html(a[s]).wrap("<p></p>").parent().html()}for(var c=0;c<a.length;c++)l.push(a[c])}return l}(i):t(s),u=0;u<h.length;u++){var w=d.html();d.html(w+h[u]+" "),d.html()!=p?d.height()>c&&(p=d.html(),d.html(w),r.append(n(l.tag,d.html())),d.html(""),u--):(p="",r.append(n(l.tag,d.html())),d.html(""))}r.append(n(l.tag,d.html())),this.html(r.html())}}(jQuery),$(".wrapLine").each(function(e){$(this).splitLines({tag:"<span>"})}),$("#header-desktop .wrapper .container-link ul li:first-child").mouseenter(function(){let e=$("#header-desktop .wrapper .container-link ul");e.addClass("block"),setTimeout(function(){e.addClass("show")},50)}),$("#header-desktop .wrapper .container-link ul .dropdown").mouseleave(function(){e()}),$("#header-desktop .wrapper .container-link .logo").mouseenter(function(){e()}),$("#header-desktop .wrapper .container-link ul li:not(:first-child)").mouseenter(function(){e()}),$("#header-desktop .wrapper .container-action").mouseenter(function(){e()}),$("#header-desktop .wrapper .container-action .signin").click(function(){let e=$("#header-desktop .wrapper .container-action .lg-log-in");e.addClass("block"),setTimeout(function(){e.addClass("show")},50)}),$("#header-desktop .wrapper .container-action .lg-log-in .cross").click(function(){let e=$("#header-desktop .wrapper .container-action .lg-log-in");e.removeClass("show"),setTimeout(function(){e.removeClass("block")},100)}),$("body").on("click",function(e){$(e.target).closest("#header-desktop .wrapper .container-action .lg-log-in").length||$("#header-desktop .wrapper .container-action .lg-log-in").hasClass("show")&&$("#header-desktop .wrapper .container-action .lg-log-in .cross").click()}),$("#header-desktop .wrapper .container-action .signup").click(function(){let e=$(".container-lg");$("body").addClass("block"),$("body").addClass("lightbox"),e.addClass("block"),setTimeout(function(){e.addClass("show")},50)}),$(".lg-contact .cross").click(function(){let e=$(".container-lg");$("body").removeClass("block"),$("body").removeClass("lightbox"),e.removeClass("show"),setTimeout(function(){e.removeClass("block")},100)}),$("body").on("click",function(e){$(e.target).closest(".container-lg .lg-contact").length||(console.log(e.target),$(".container-lg").hasClass("show")&&$(".lg-contact .cross").click())}),$("footer .wrapper .container-lang>.lg").click(function(){let e=$("footer .wrapper .container-lang");e.hasClass("block")?(e.removeClass("show"),setTimeout(function(){e.removeClass("block")},100)):(e.addClass("block"),setTimeout(function(){e.addClass("show")},50))}),$("body").on("click",function(e){$(e.target).closest("footer .wrapper .container-lang.show .dropdown").length||$("footer .wrapper .container-lang").hasClass("show")&&$("footer .wrapper .container-lang >.lg").click()})});