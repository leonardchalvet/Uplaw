$(window).on("load",function(){$window=$(window),$window.scroll(function(){$window.scrollTop()>=1?$("#header-desktop").addClass("scroll"):$("#header-desktop").removeClass("scroll")}),function(t){function e(t){return t.clone().css({position:"relative",width:"98%"})}function n(t){return t.split(/\s+/)}function o(e,n){return t(e="<div>"+e).find('*:not(:has("*"))').html(n).parentsUntil().slice(-1).html()}t.fn.splitLines=function(l){var r={width:"auto",tag:"<div>",wrap:"",keepHtml:!0};l&&t.extend(r,l);var s=e(this),a=this.contents(),i=this.text();this.append(s),s.text("42");var h=s.height()+2;s.empty();var c=e(s);"auto"!==r.width&&c.width(r.width),this.append(c);for(var p,d=r.keepHtml?function e(o){for(var l,r=[],s=0;s<o.length;s++){if(3==o[s].nodeType)l=n(o[s].textContent||o[s].toString());else{var a=t(o[s]).clone();l=e(a.contents());for(var i=0;i<l.length;i++)a.empty(),l[i]=a.html(l[i]).wrap("<p></p>").parent().html()}for(var h=0;h<l.length;h++)r.push(l[h])}return r}(a):n(i),w=0;w<d.length;w++){var u=c.html();c.html(u+d[w]+" "),c.html()!=p?c.height()>h&&(p=c.html(),c.html(u),s.append(o(r.tag,c.html())),c.html(""),w--):(p="",s.append(o(r.tag,c.html())),c.html(""))}s.append(o(r.tag,c.html())),this.html(s.html())}}(jQuery),$(".wrapLine").each(function(t){$(this).splitLines({tag:"<span>"})}),$("#header-desktop .wrapper .container-link ul li:first-child").click(function(){let t=$("#header-desktop .wrapper .container-link ul");t.hasClass("block")?(t.removeClass("show"),setTimeout(function(){t.removeClass("block")},100)):(t.addClass("block"),setTimeout(function(){t.addClass("show")},50))}),$("body").on("click",function(t){$(t.target).closest("#header-desktop .wrapper .container-link ul.show .dropdown").length||$("#header-desktop .wrapper .container-link ul").hasClass("show")&&$("#header-desktop .wrapper .container-link ul li:first-child").click()}),$("footer .wrapper .container-lg>.lg").click(function(){let t=$("footer .wrapper .container-lg");t.hasClass("block")?(t.removeClass("show"),setTimeout(function(){t.removeClass("block")},100)):(t.addClass("block"),setTimeout(function(){t.addClass("show")},50))}),$("body").on("click",function(t){$(t.target).closest("footer .wrapper .container-lg.show .dropdown").length||$("footer .wrapper .container-lg").hasClass("show")&&$("footer .wrapper .container-lg >.lg").click()})});