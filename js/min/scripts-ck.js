function getScrollBarWidth(){var e=document.createElement("p");e.style.width="100%",e.style.height="200px";var t=document.createElement("div");t.style.position="absolute",t.style.top="0px",t.style.left="0px",t.style.visibility="hidden",t.style.width="200px",t.style.height="150px",t.style.overflow="hidden",t.appendChild(e),document.body.appendChild(t);var i=e.offsetWidth;t.style.overflow="scroll";var n=e.offsetWidth;return i==n&&(n=t.clientWidth),document.body.removeChild(t),i-n}window.getComputedStyle||(window.getComputedStyle=function(e,t){return this.el=e,this.getPropertyValue=function(t){var i=/(\-([a-z]){1})/g;return"float"==t&&(t="styleFloat"),i.test(t)&&(t=t.replace(i,function(){return arguments[2].toUpperCase()})),e.currentStyle[t]?e.currentStyle[t]:null},this}),jQuery(document).ready(function($){$("[data-toggle=offcanvas]").click(function(){$(".row-offcanvas").toggleClass("active")})}),jQuery(document).ready(function($){$("select").chosen({no_results_text:"Oops, nothing found!",width:"99.5%"}),$.fn.iCheck&&$("input").iCheck({checkboxClass:"icheckbox_square",radioClass:"iradio_square",increaseArea:"20%"});var e=$("iframe[src*='youtube'], iframe[src*='hulu'], iframe[src*='revision3'], iframe[src*='vimeo'], iframe[src*='blip'], iframe[src*='dailymotion'], iframe[src*='funnyordie'], object, embed").wrap("<figure></figure>"),t=$("figure");e.each(function(){$(this).attr("data-aspectRatio",this.height/this.width).css({"max-width":this.width+"px","max-height":this.height+"px"}).removeAttr("height").removeAttr("width")}),$(window).resize(function(){var i=t.width();e.each(function(){var e=$(this);e.width(i).height(i*e.attr("data-aspectRatio"))})}).resize();var i=$(window).width()+getScrollBarWidth(),n=$("#main-navigation > ul");if($(".navbar-toggle").on("click",function(e){$("body").toggleClass("menu-open")}),$(".menu-item > .menu-button").on("click",function(e){$(this).next(".sub-menu").addClass("sub-menu-open")}),$(".sub-menu .menu-back-button").on("click",function(e){$(this).parent("li").parent("ul").removeClass("sub-menu-open")}),$(window).resize(function(e){Modernizr&&Modernizr.touch?e.preventDefault():(i=$(window).width()+getScrollBarWidth(),i>=768?$("body").removeClass("menu-open"):768>i&&!n.is(":hidden")&&$("body").removeClass("menu-open"))}),481>i&&!$("body").hasClass("home")){var o=jQuery("#main").offset();"undefined"!=typeof o&&jQuery("html, body").animate({scrollTop:o.top},2e3)}i>=767&&$(".comment img[data-gravatar]").each(function(){$(this).attr("src",$(this).attr("data-gravatar"))}),$("#back-top").hide(),$(function(){$(window).scroll(function(){$(this).scrollTop()>300?$("#back-top").fadeIn():$("#back-top").fadeOut()}),$("#back-top a").click(function(){return $("body,html").animate({scrollTop:0},800),!1})})}),function(e){function t(){a.setAttribute("content",c),u=!0}function i(){a.setAttribute("content",s),u=!1}function n(n){m=n.accelerationIncludingGravity,l=Math.abs(m.x),d=Math.abs(m.y),h=Math.abs(m.z),!e.orientation&&(l>7||(h>6&&8>d||8>h&&d>6)&&l>5)?u&&i():u||t()}if(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1){var o=e.document;if(o.querySelector){var a=o.querySelector("meta[name=viewport]"),r=a&&a.getAttribute("content"),s=r+",maximum-scale=1",c=r+",maximum-scale=10",u=!0,l,d,h,m;a&&(e.addEventListener("orientationchange",t,!1),e.addEventListener("devicemotion",n,!1))}}}(this),jQuery(window).resize(function(){var e=71,t=jQuery(".page-title h1").outerHeight();t>=e&&(jQuery(".page-title h1").removeClass(),jQuery(".page-title h1").addClass(function(){return"height-"+t}),jQuery(".page-header-placeholder").attr("class","page-header-placeholder"),jQuery(".page-header-placeholder").addClass(function(){return"height-"+t}))}),jQuery(window).load(function(){if(document.querySelector("#masonry"))var e=document.querySelector("#masonry"),t=new Masonry(e,{itemSelector:".masonry-item",columnWidth:".masonry-item"})});