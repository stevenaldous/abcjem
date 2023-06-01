// Add your custom JS here.
    /*! modernizr 3.5.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-objectfit-setclasses !*/
 !function(e,n,t){function r(e){var n=_.className,t=Modernizr._config.classPrefix||"";if(w&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),w?_.className.baseVal=n:_.className=n)}function o(e,n){return typeof e===n}function i(){var e,n,t,r,i,s,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],n=C[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(r=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=r:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=r),h.push((r?"":"no-")+a.join("-"))}}function s(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function a(e,n){return!!~(""+e).indexOf(n)}function l(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):w?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function f(e,n){return function(){return e.apply(n,arguments)}}function u(e,n,t){var r;for(var i in e)if(e[i]in n)return t===!1?e[i]:(r=n[e[i]],o(r,"function")?f(r,t||n):r);return!1}function p(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function c(n,t,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,n,t);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var s=i.error?"error":"log";i[s].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!t&&n.currentStyle&&n.currentStyle[r];return o}function d(){var e=n.body;return e||(e=l(w?"svg":"body"),e.fake=!0),e}function m(e,t,r,o){var i,s,a,f,u="modernizr",p=l("div"),c=d();if(parseInt(r,10))for(;r--;)a=l("div"),a.id=o?o[r]:u+(r+1),p.appendChild(a);return i=l("style"),i.type="text/css",i.id="s"+u,(c.fake?c:p).appendChild(i),c.appendChild(p),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),p.id=u,c.fake&&(c.style.background="",c.style.overflow="hidden",f=_.style.overflow,_.style.overflow="hidden",_.appendChild(c)),s=t(p,e),c.fake?(c.parentNode.removeChild(c),_.style.overflow=f,_.offsetHeight):p.parentNode.removeChild(p),!!s}function v(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(p(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+p(n[o])+":"+r+")");return i=i.join(" or "),m("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==c(e,null,"position")})}return t}function y(e,n,r,i){function f(){p&&(delete P.style,delete P.modElem)}if(i=o(i,"undefined")?!1:i,!o(r,"undefined")){var u=v(e,r);if(!o(u,"undefined"))return u}for(var p,c,d,m,y,g=["modernizr","tspan","samp"];!P.style&&g.length;)p=!0,P.modElem=l(g.shift()),P.style=P.modElem.style;for(d=e.length,c=0;d>c;c++)if(m=e[c],y=P.style[m],a(m,"-")&&(m=s(m)),P.style[m]!==t){if(i||o(r,"undefined"))return f(),"pfx"==n?m:!0;try{P.style[m]=r}catch(h){}if(P.style[m]!=y)return f(),"pfx"==n?m:!0}return f(),!1}function g(e,n,t,r,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+b.join(s+" ")+s).split(" ");return o(n,"string")||o(n,"undefined")?y(a,n,r,i):(a=(e+" "+j.join(s+" ")+s).split(" "),u(a,n,t))}var h=[],C=[],S={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=S,Modernizr=new Modernizr;var _=n.documentElement,w="svg"===_.nodeName.toLowerCase(),x="Moz O ms Webkit",b=S._config.usePrefixes?x.split(" "):[];S._cssomPrefixes=b;var E=function(n){var r,o=prefixes.length,i=e.CSSRule;if("undefined"==typeof i)return t;if(!n)return!1;if(n=n.replace(/^@/,""),r=n.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+n;for(var s=0;o>s;s++){var a=prefixes[s],l=a.toUpperCase()+"_"+r;if(l in i)return"@-"+a.toLowerCase()+"-"+n}return!1};S.atRule=E;var j=S._config.usePrefixes?x.toLowerCase().split(" "):[];S._domPrefixes=j;var z={elem:l("modernizr")};Modernizr._q.push(function(){delete z.elem});var P={style:z.elem.style};Modernizr._q.unshift(function(){delete P.style}),S.testAllProps=g;var N=S.prefixed=function(e,n,t){return 0===e.indexOf("@")?E(e):(-1!=e.indexOf("-")&&(e=s(e)),n?g(e,n,t):g(e,"pfx"))};Modernizr.addTest("objectfit",!!N("objectFit"),{aliases:["object-fit"]}),i(),r(h),delete S.addTest,delete S.addAsyncTest;for(var T=0;T<Modernizr._q.length;T++)Modernizr._q[T]();e.Modernizr=Modernizr}(window,document);

 jQuery(document).ready(function($) { 
 
 
 
 
 //////////////////////////////////////
 //  Alert-Nav Cookie
 //////////////////////////////////////
 // on window load check for the nav alert cookie right away
//  window.onload = checkCookie;
 
 // custom SetCookie function to manage cookie
//  function setCookie(name, value, daysToLive) {
//      // Encode value in order to escape semicolons, commas, and whitespace
//      var cookie = name + "=" + encodeURIComponent(value);
     
//      if(typeof daysToLive === "number") {
//          /* Sets the max-age attribute so that the cookie expires
//          after the specified number of days */
//          cookie += "; max-age=" + (daysToLive*24*60*60) + "; path=/";
 
//          document.cookie = cookie;
//      }
//  };
//  // A custom function to get cookies
//  function getCookie(name) {
//      // Split cookie string and get all individual name=value pairs in an array
//      var cookieArr = document.cookie.split(";");
 
//      // Loop through the array elements
//      for(var i = 0; i < cookieArr.length; i++) {
//          var cookiePair = cookieArr[i].split("=");
 
//          /* Removing whitespace at the beginning of the cookie name
//          and compare it with the given string */
//          if(name == cookiePair[0].trim()) {
//              // Decode the cookie value and return
//              return decodeURIComponent(cookiePair[1]);
//          }
//      }
//      // Return null if not found
//      return null;
//  };
//  //Custom function to see if the alertBanner cookie is set
//  function checkCookie() {
//      // get Cookie
//      var alertBanner = getCookie("alertBanner");
 
//      if( alertBanner != null ) {
//          // If alertBanner is set, see if it's "open"
//          if( alertBanner == "open" ) {
//              // If "open", show the alert by removing .d-none
//              $('#alertNav').removeClass('hide');
//              $('.alert-open').removeClass('show');
//          }
//      } else {
//          // if not set, show alert banner and setCookie to "open"
//          $('#alertNav').removeClass('hide');
//          $('.alert-open').removeClass('show');
//          setCookie("alertBanner", "open", 1);
//      }
//  };
//  // on click of the alertClose button, hide the alert and setCookie to "hide"
//  $('#alertClose').click( function() {
//      // add class to nav to hide
//      $('#alertNav').addClass('hide');
//      $('.alert-open').addClass('show');
//      //set alertBanner cookie to hide for 24 hours
//      setCookie("alertBanner", "hide", 1);
//  } );
 
//  // on click of the alertClose button, hide the alert and setCookie to "hide"
//  $('.alert-open').click( function() {
//      // add class to nav to hide
//      $('#alertNav').removeClass('hide');
//      $('.alert-open').removeClass('show');
//      //set alertBanner cookie to hide for 24 hours
//      setCookie("alertBanner", "open", 1);
//  } );
 
 
 //////////////////////////////////////
 //  Modernizr ObjectFit Implementation
 //////////////////////////////////////
 if( ! Modernizr.objectfit ){
     $('.obj.img-wrap').each(function(){
         var imgUrl = $(this).find('img').prop('src');
         if(imgUrl){
             $(this).css('backgroundImage','url('+ imgUrl +')').addClass('compat-object-fit');
         }
     });
 };
 
 
 //////////////////////////////////////
 //  SmoothScroll 
 //////////////////////////////////////
 function smoothScroll(target) {
     var t = target.offset().top;
 
     $('html, body').animate({
             scrollTop: t
     }, 1000, function() {
         // Callback after animation
         // if( offset < 0 ) {
             // Must change focus!
             var $target = $(target);
             $target.focus();
             if ($target.is(":focus")) { // Checking if the target was focused
             // return false;
             } else {
             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
             // $target.focus(); // Set focus again
             };
         // };
     });
 };
 $('a[href*="#"]')
     // Remove links that don't actually link to anything
     .not('[href="#"]')
     .not('[href="#0"]')
     .not('a.noscroll')
     .click(function(event) {
     //On-page links
     if (
         location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
         && 
         location.hostname == this.hostname
     ) {
         // Figure out element to scroll to
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
         // Does a scroll target exist?
         if (target.length) {
         // Only prevent default if animation is actually gonna happen
         event.preventDefault();
 
         smoothScroll(target);
         }
 
     }
     });
 
     // function to detect if item is in viewport
     $.fn.isInViewport = function() {
         var elementTop = '';
         var elementBottom = '';
 
         if ( $(this).length) {
             var elementTop = $(this).offset().top;
             var elementBottom = elementTop + $(this).outerHeight();
         }
 
         var viewportTop = $(window).scrollTop();
         var viewportBottom = viewportTop + $(window).height();
 
         return elementBottom > viewportTop && elementTop < viewportBottom;
     };
 
     // prep for animation by removing active class
     $('.anim-el').each(function() { $( this ).removeClass('animate'); });
     //basic animation support
     $(window).on('resize scroll', function() {
        
         $('.anim-el').each(function() {
             if ($(this).isInViewport()) {
                 $( this ).addClass('animate');
             } else {
             // $( this ).removeClass('animate');
             }
         });
 
     }).resize();



 
 }); // end of .doc ready