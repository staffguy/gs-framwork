/* Start:"a:4:{s:4:"full";s:35:"/js/modernizr.min.js?13850454868293";s:6:"source";s:20:"/js/modernizr.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/**
 * Modernizr 2.6.2
 * http://modernizr.com/download/#-fontface-backgroundsize-borderradius-boxshadow-opacity-cssanimations-cssgradients-csstransforms-csstransforms3d-csstransitions-history-touch-printshiv-mq-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes
 */
window.Modernizr=function(q,k,y){function u(b,c){for(var n in b){var a=b[n];if(!~(""+a).indexOf("-")&&t[a]!==y)return"pfx"==c?a:!0}return!1}function f(b,c,n){var a=b.charAt(0).toUpperCase()+b.slice(1),p=(b+" "+z.join(a+" ")+a).split(" ");if("string"===typeof c||"undefined"===typeof c)c=u(p,c);else a:{p=(b+" "+C.join(a+" ")+a).split(" "),b=p;for(var s in b)if(a=c[b[s]],a!==y){c=!1===n?b[s]:"function"===typeof a?a.bind(n||c):a;break a}c=!1}return c}var d={},g=k.documentElement,e=k.createElement("modernizr"),
t=e.style,v=" -webkit- -moz- -o- -ms- ".split(" "),z=["Webkit","Moz","O","ms"],C=["webkit","moz","o","ms"],e={},B=[],w=B.slice,x,r=function(b,c,n,a){var p,s,D,e,d=k.createElement("div"),f=k.body,m=f||k.createElement("body");if(parseInt(n,10))for(;n--;)D=k.createElement("div"),D.id=a?a[n]:"modernizr"+(n+1),d.appendChild(D);return p=['&#173;<style id="smodernizr">',b,"</style>"].join(""),d.id="modernizr",(f?d:m).innerHTML+=p,m.appendChild(d),f||(m.style.background="",m.style.overflow="hidden",e=g.style.overflow,
g.style.overflow="hidden",g.appendChild(m)),s=c(d,b),f?d.parentNode.removeChild(d):(m.parentNode.removeChild(m),g.style.overflow=e),!!s},A={}.hasOwnProperty,h;"undefined"===typeof A||"undefined"===typeof A.call?h=function(b,c){return c in b&&"undefined"===typeof b.constructor.prototype[c]}:h=function(b,c){return A.call(b,c)};Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if("function"!=typeof c)throw new TypeError;var d=w.call(arguments,1),a=function(){if(this instanceof
a){var p=function(){};p.prototype=c.prototype;var p=new p,s=c.apply(p,d.concat(w.call(arguments)));return Object(s)===s?s:p}return c.apply(b,d.concat(w.call(arguments)))};return a});e.touch=function(){var b;return"ontouchstart"in q||q.DocumentTouch&&k instanceof DocumentTouch?b=!0:r(["@media (",v.join("touch-enabled),("),"modernizr){#modernizr{top:9px;position:absolute}}"].join(""),function(c){b=9===c.offsetTop}),b};e.history=function(){return!!q.history&&!!history.pushState};e.backgroundsize=function(){return f("backgroundSize")};
e.borderradius=function(){return f("borderRadius")};e.boxshadow=function(){return f("boxShadow")};e.opacity=function(){var b=v.join("opacity:.55;")+"";t.cssText=b;return/^0.55$/.test(t.opacity)};e.cssanimations=function(){return f("animationName")};e.cssgradients=function(){var b=("background-image:-webkit-gradient(linear,left top,right bottom,from(#9f9),to(white));background-image:"+v.join("linear-gradient(left top,#9f9, white);background-image:")).slice(0,-17);t.cssText=b;return!!~(""+t.backgroundImage).indexOf("gradient")};
e.csstransforms=function(){return!!f("transform")};e.csstransforms3d=function(){var b=!!f("perspective");return b&&"webkitPerspective"in g.style&&r("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(c,d){b=9===c.offsetLeft&&3===c.offsetHeight}),b};e.csstransitions=function(){return f("transition")};e.fontface=function(){var b;return r('@font-face {font-family:"font";src:url("https://")}',function(c,d){var a=k.getElementById("smodernizr"),a=
(a=a.sheet||a.styleSheet)?a.cssRules&&a.cssRules[0]?a.cssRules[0].cssText:a.cssText||"":"";b=/src/i.test(a)&&0===a.indexOf(d.split(" ")[0])}),b};for(var l in e)h(e,l)&&(x=l.toLowerCase(),d[x]=e[l](),B.push((d[x]?"":"no-")+x));d.addTest=function(b,c){if("object"==typeof b)for(var e in b)h(b,e)&&d.addTest(e,b[e]);else{b=b.toLowerCase();if(d[b]!==y)return d;c="function"==typeof c?c():c;g.className+=" "+(c?"":"no-")+b;d[b]=c}return d};t.cssText="";return e=null,d._version="2.6.2",d._prefixes=v,d._domPrefixes=
C,d._cssomPrefixes=z,d.mq=function(b){var c=q.matchMedia||q.msMatchMedia;if(c)return c(b).matches;var d;return r("@media "+b+" { #modernizr { position: absolute; } }",function(a){d="absolute"==(q.getComputedStyle?getComputedStyle(a,null):a.currentStyle).position}),d},d.testProp=function(b){return u([b])},d.testAllProps=f,d.testStyles=r,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(" js "+B.join(" ")),d}(this,this.document);
(function(q,k){function y(a,p){var b=a.createElement("p"),c=a.getElementsByTagName("head")[0]||a.documentElement;return b.innerHTML="x<style>"+p+"</style>",c.insertBefore(b.lastChild,c.firstChild)}function u(){var a=l.elements;return"string"==typeof a?a.split(" "):a}function f(a){var b=A[a[x]];return b||(b={},r++,a[x]=r,A[r]=b),b}function d(a,b,c){b||(b=k);if(h)return b.createElement(a);c||(c=f(b));var d;return c.cache[a]?d=c.cache[a].cloneNode():B.test(a)?d=(c.cache[a]=c.createElem(a)).cloneNode():
d=c.createElem(a),d.canHaveChildren&&!C.test(a)?c.frag.appendChild(d):d}function g(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag());a.createElement=function(c){return l.shivMethods?d(c,a,b):b.createElem(c)};a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+u().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(l,
b.frag)}function e(a){a||(a=k);var b=f(a);return l.shivCSS&&!w&&!b.hasCSS&&(b.hasCSS=!!y(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),h||g(a,b),a}function t(a){for(var b,d=a.attributes,e=d.length,k=a.ownerDocument.createElement(c+":"+a.nodeName);e--;)b=d[e],b.specified&&k.setAttribute(b.nodeName,b.nodeValue);return k.style.cssText=a.style.cssText,k}function v(a){function d(){clearTimeout(h._removeSheetTimer);e&&e.removeNode(!0);
e=null}var e,k,h=f(a),l=a.namespaces,g=a.parentWindow;return!n||a.printShived?a:("undefined"==typeof l[c]&&l.add(c),g.attachEvent("onbeforeprint",function(){d();var m,f,h;h=a.styleSheets;for(var l=[],g=h.length,n=Array(g);g--;)n[g]=h[g];for(;h=n.pop();)if(!h.disabled&&b.test(h.media)){try{m=h.imports,f=m.length}catch(q){f=0}for(g=0;g<f;g++)n.push(m[g]);try{l.push(h.cssText)}catch(r){}}m=l.reverse().join("").split("{");f=m.length;g=RegExp("(^|[\\s,>+~])("+u().join("|")+")(?=[[\\s,>+~#.:]|$)","gi");
for(n="$1"+c+"\\:$2";f--;)l=m[f]=m[f].split("}"),l[l.length-1]=l[l.length-1].replace(g,n),m[f]=l.join("}");l=m.join("{");f=a.getElementsByTagName("*");g=f.length;n=RegExp("^(?:"+u().join("|")+")$","i");for(h=[];g--;)m=f[g],n.test(m.nodeName)&&h.push(m.applyElement(t(m)));k=h;e=y(a,l)}),g.attachEvent("onafterprint",function(){for(var a=k,b=a.length;b--;)a[b].removeNode();clearTimeout(h._removeSheetTimer);h._removeSheetTimer=setTimeout(d,500)}),a.printShived=!0,a)}var z=q.html5||{},C=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
B=/^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,w,x="_html5shiv",r=0,A={},h;(function(){try{var a=k.createElement("a");a.innerHTML="<xyz></xyz>";w="hidden"in a;var b;if(!(b=1==a.childNodes.length)){k.createElement("a");var c=k.createDocumentFragment();b="undefined"==typeof c.cloneNode||"undefined"==typeof c.createDocumentFragment||"undefined"==typeof c.createElement}h=
b}catch(d){h=w=!0}})();var l={elements:z.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==z.shivCSS,supportsUnknownElements:h,shivMethods:!1!==z.shivMethods,type:"default",shivDocument:e,createElement:d,createDocumentFragment:function(a,b){a||(a=k);if(h)return a.createDocumentFragment();b=b||f(a);for(var c=b.frag.cloneNode(),d=0,e=u(),g=e.length;d<g;d++)c.createElement(e[d]);
return c}};q.html5=l;e(k);var b=/^$|\b(?:all|print)\b/,c="html5shiv",n=!h&&function(){var a=k.documentElement;return"undefined"!=typeof k.namespaces&&"undefined"!=typeof k.parentWindow&&"undefined"!=typeof a.applyElement&&"undefined"!=typeof a.removeNode&&"undefined"!=typeof q.attachEvent}();l.type+=" print";l.shivPrint=v;v(k)})(this,document);

/* Hoverintent r7
 * http://github.com/briancherne/jquery-hoverIntent
 */
(function(e){e.fn.hoverIntent=function(a,f,n){var b={interval:100,sensitivity:7,timeout:0},b="object"===typeof a?e.extend(b,a):e.isFunction(f)?e.extend(b,{over:a,out:f,selector:n}):e.extend(b,{over:a,out:a,selector:f}),g,h,j,k,l=function(b){g=b.pageX;h=b.pageY},m=function(a,d){d.hoverIntent_t=clearTimeout(d.hoverIntent_t);if(Math.abs(j-g)+Math.abs(k-h)<b.sensitivity)return e(d).off("mousemove.hoverIntent",l),d.hoverIntent_s=1,b.over.apply(d,[a]);j=g;k=h;d.hoverIntent_t=setTimeout(function(){m(a,d)},
b.interval)};a=function(a){var d=jQuery.extend({},a),c=this;c.hoverIntent_t&&(c.hoverIntent_t=clearTimeout(c.hoverIntent_t));"mouseenter"==a.type?(j=d.pageX,k=d.pageY,e(c).on("mousemove.hoverIntent",l),1!=c.hoverIntent_s&&(c.hoverIntent_t=setTimeout(function(){m(d,c)},b.interval))):(e(c).off("mousemove.hoverIntent",l),1==c.hoverIntent_s&&(c.hoverIntent_t=setTimeout(function(){c.hoverIntent_t=clearTimeout(c.hoverIntent_t);c.hoverIntent_s=0;b.out.apply(c,[d])},b.timeout)))};return this.on({"mouseenter.hoverIntent":a,
"mouseleave.hoverIntent":a},b.selector)}})(jQuery);

/**
 * Throttle/Debounce v1.1
 * http://github.com/cowboy/jquery-throttle-debounce
 */
(function(d,f){"$:nomunge";var a=d.jQuery||d.Cowboy||(d.Cowboy={}),e;a.throttle=e=function(i,c,b,g){function d(){function a(){e=+new Date;b.apply(k,l)}function m(){h=f}var k=this,j=+new Date-e,l=arguments;g&&!h&&a();h&&clearTimeout(h);g===f&&j>i?a():!0!==c&&(h=setTimeout(g?m:a,g===f?i-j:i))}var h,e=0;"boolean"!==typeof c&&(g=b,b=c,c=f);a.guid&&(d.guid=b.guid=b.guid||a.guid++);return d};a.debounce=function(a,c,b){return b===f?e(a,c,!1):e(a,b,!1!==c)}})(this);

!function(t){function e(t,e,a,o){void 0==o&&(o=""),this.domSelect=t,this.settings=e||s,this.isSelectShow=!1,this.isSelectFocus=!1,this.isJScrollPane=this.isJScrollPane(),this.templates=a||{select:{container:'<div class="b-core-ui-select '+o+'"></div>',value:'<span class="b-core-ui-select__value"></span>',button:'<span class="b-core-ui-select__button"></span>'},dropdown:{container:'<div class="b-core-ui-select__dropdown '+o+'"></div>',wrapper:'<div class="b-core-ui-select__dropdown__wrap"></div>',list:'<ul class="b-core-ui-select__dropdown__list"></ul>',optionLabel:'<li class="b-core-ui-select__dropdown__label"></li>',item:'<li class="b-core-ui-select__dropdown__item"></li>'}},this.init(this.settings)}function a(t,e,a){var a=a||document;if(void 0!==t||null!==t)if(a.createEvent){var s=a.createEvent("MouseEvents");s.initEvent(e,!0,!1),t.dispatchEvent(s)}else if(a.createEventObject){var s=a.createEventObject();t.fireEvent("on"+e,s)}}var s={appendToBody:!1,jScrollPane:null,onInit:null,onFocus:null,onBlur:null,onOpen:null,onClose:null,onChange:null,onDestroy:null},o=[];t.browser.mobile=/iphone|ipad|ipod/i.test(navigator.userAgent.toLowerCase()),t.browser.operamini="[object OperaMini]"===Object.prototype.toString.call(window.operamini),e.prototype.init=function(){return t.browser.operamini?this:(this.buildUI(),this.hideDomSelect(),this.domSelect.is(":disabled")?(this.select.addClass("disabled"),this):(this.pane=this.domSelect.data("scrollpane"),this.isJScrollPane&&this.pane!==!1&&this.buildJScrollPane(),this.bindUIEvents(),this.settings.onInit&&this.settings.onInit.apply(this,[this.domSelect,"init"]),void 0))},e.prototype.buildUI=function(){this.select=t(this.templates.select.container).insertBefore(this.domSelect),this.selectValue=t(this.templates.select.value).appendTo(this.select),this.selectButton=t(this.templates.select.button).appendTo(this.select),this.dropdown=t(this.templates.dropdown.container),this.dropdownWrapper=t(this.templates.dropdown.wrapper).appendTo(this.dropdown),this.settings.appendToBody?this.dropdown.appendTo(t("body")):this.dropdown.insertBefore(this.domSelect),this.dropdownList=t(this.templates.dropdown.list).appendTo(this.dropdownWrapper),this.domSelect.find("option").each(t.proxy(this,"addItems")),this.dropdownItem=this.dropdown.find("."+t(this.templates.dropdown.item).attr("class")),this.dropdownItem.filter(":first-child").addClass("first"),this.dropdownItem.filter(":last-child").addClass("last"),this.addOptionGroup(),this.setSelectValue(this.getSelectedItem()),this.updateDropdownPosition(),this.currentItemOfDomSelect=this.currentItemOfDomSelect||this.domSelect.find("option:selected")},e.prototype.hideDomSelect=function(){this.domSelect.addClass("b-core-ui-select__select_state_hide"),this.domSelect.css({top:this.select.position().top,left:this.select.position().left})},e.prototype.showDomSelect=function(){this.domSelect.css({top:"auto",left:"auto"}),this.domSelect.removeClass("b-core-ui-select__select_state_hide")},e.prototype.bindUIEvents=function(){this.domSelect.bind("focus",t.proxy(this,"onFocus")),this.domSelect.bind("blur",t.proxy(this,"onBlur")),this.domSelect.bind("change",t.proxy(this,"onChange")),t.browser.mobile&&this.domSelect.bind("change",t.proxy(this,"changeDropdownData")),this.select.bind("click",t.proxy(this,"onSelectClick")),this.dropdownItem.bind("click",t.proxy(this,"onDropdownItemClick"))},e.prototype.getCurrentIndexOfItem=function(){return this.domSelect.find("option").index(t(this.domSelect).find("option:selected"))},e.prototype.scrollToCurrentDropdownItem=function(e){return this.dropdownWrapper.data("jsp")?(this.dropdownWrapper.data("jsp").scrollToElement(e),this):(t(this.dropdownWrapper).scrollTop(t(this.dropdownWrapper).scrollTop()+e.position().top-t(this.dropdownWrapper).height()/2+e.height()/2),void 0)},e.prototype.buildJScrollPane=function(){this.dropdownWrapper.wrap(t('<div class="j-scroll-pane"></div>'))},e.prototype.isJScrollPane=function(){if(this.settings.jScrollPane){if(t.fn.jScrollPane)return!0;throw new Error("jScrollPane no found")}},e.prototype.initJScrollPane=function(){this.pane!==!1&&this.dropdownWrapper.jScrollPane(this.settings.jScrollPane)},e.prototype.showDropdown=function(){return this.domSelect.focus(),this.settings.onOpen&&this.settings.onOpen.apply(this,[this.domSelect,"open"]),t.browser.mobile?this:(this.isSelectShow||(this.isSelectShow=!0,this.select.addClass("open"),this.dropdown.addClass("show").removeClass("hide"),this.isJScrollPane&&this.initJScrollPane(),this.scrollToCurrentDropdownItem(this.dropdownItem.eq(this.getCurrentIndexOfItem())),this.updateDropdownPosition()),void 0)},e.prototype.hideDropdown=function(){this.isSelectShow&&(this.isSelectShow=!1,this.select.removeClass("open"),this.dropdown.removeClass("show").addClass("hide"),this.settings.onClose&&this.settings.onClose.apply(this,[this.domSelect,"close"])),this.isSelectFocus&&this.domSelect.focus()},e.prototype.hideAllDropdown=function(){for(var t in o)o[t].hasOwnProperty(t)&&(o.dropdown.isSelectShow=!1,o.dropdown.domSelect.blur(),o.dropdown.addClass("hide").removeClass("show"))},e.prototype.changeDropdownData=function(){(this.isSelectShow||this.isSelectFocus)&&(this.currentItemOfDomSelect=this.domSelect.find("option:selected"),this.dropdownItem.removeClass("selected"),this.dropdownItem.eq(this.getCurrentIndexOfItem()).addClass("selected"),this.scrollToCurrentDropdownItem(this.dropdownItem.eq(this.getCurrentIndexOfItem())),this.setSelectValue(this.currentItemOfDomSelect)),t.browser.mobile&&this.settings.onChange&&this.settings.onChange.apply(this,[this.domSelect,"change"])},e.prototype.onDomSelectChange=function(e){this.domSelect.bind("change",t.proxy(this,"onChange")),a(this.domSelect.get(0),"change"),e||this.settings.onChange&&this.settings.onChange.apply(this,[this.domSelect,"change"])},e.prototype.addListenerByServicesKey=function(t){if(this.isSelectShow)switch(t.which){case 9:case 13:case 27:this.hideDropdown()}},e.prototype.onSelectClick=function(){return this.isSelectShow?this.hideDropdown():this.showDropdown(),!1},e.prototype.onFocus=function(){this.isDocumentMouseDown=!1,this.isSelectFocus=!0,this.select.addClass("focus"),this.settings.onFocus&&this.settings.onFocus.apply(this,[this.domSelect,"focus"])},e.prototype.onBlur=function(){this.isDocumentMouseDown||(this.isSelectFocus=!1,this.select.removeClass("focus"),this.settings.onBlur&&this.settings.onBlur.apply(this,[this.domSelect,"blur"]))},e.prototype.onChange=function(){this.settings.onChange&&this.settings.onChange.apply(this,[this.domSelect,"change"])},e.prototype.onDropdownItemClick=function(e){var a=t(e.currentTarget);if(!a.hasClass("disabled")&&!a.hasClass("selected")){this.domSelect.unbind("change",t.proxy(this,"onChange"));var s=this.dropdown.find("."+t(this.templates.dropdown.item).attr("class")).index(a);this.dropdownItem.removeClass("selected"),this.dropdownItem.eq(s).addClass("selected"),this.domSelect.find("option").removeAttr("selected"),this.domSelect.find("option").eq(s).attr("selected",!0),this.setSelectValue(this.getSelectedItem()),this.onDomSelectChange(!0)}return this.hideDropdown(),!1},e.prototype.onDocumentMouseDown=function(e){return this.isDocumentMouseDown=!0,0==t(e.target).closest(this.select).length&&0==t(e.target).closest(this.dropdown).length&&0==t(e.target).closest("option").length&&(this.isDocumentMouseDown=!1,this.hideDropdown()),!1},e.prototype.updateDropdownPosition=function(){if(this.isSelectShow){this.settings.appendToBody?this.dropdown.css({position:"absolute",top:this.select.offset().top+this.select.outerHeight(!0),left:this.select.offset().left,"z-index":"9999"}):this.dropdown.css({position:"absolute",top:this.select.position().top+this.select.outerHeight(!0),left:this.select.position().left,"z-index":"9999"});var t=this.select.outerWidth()-this.select.width(),e=this.dropdown.outerWidth()-this.dropdown.width();this.dropdown.width(this.select.outerWidth(!0)),this.dropdown.width()==this.select.outerWidth()&&this.dropdown.width(this.select.width()+t-e),this.isJScrollPane&&this.initJScrollPane()}},e.prototype.setSelectValue=function(e){var a=this.selectValue;if(a.text(e.text()),a.data("classname")&&a.removeClass(a.data("classname")),e.attr("class")){var s=e.attr("class");s=s.replace("b-core-ui-select__dropdown__item",""),s=s.replace("selected",""),s=s.replace("first",""),s=s.replace("last",""),s=t.trim(s),s.length&&a.addClass(s).data("classname",s)}var o=e.data("style");o&&a.attr("style",o)},e.prototype.isOptionGroup=function(){return this.domSelect.find("optgroup").length>0},e.prototype.addOptionGroup=function(){for(var e=this.domSelect.find("optgroup"),a=0;a<e.length;a++){var s=this.domSelect.find("option").index(t(e[a]).find("option:first-child"));t(this.templates.dropdown.optionLabel).text(t(e[a]).attr("label")).insertBefore(this.dropdownItem.eq(s))}},e.prototype.addItems=function(e,a){var a=t(a),s=t(this.templates.dropdown.item).text(a.text());a.attr("class")&&s.addClass(a.attr("class"));var o=a.data("style");o&&s.attr("style",o).data("style",o),a.attr("disabled")&&s.addClass("disabled"),a.attr("selected")&&(this.domSelect.find("option").removeAttr("selected"),s.addClass("selected"),a.attr("selected","selected")),s.appendTo(this.dropdownList)},e.prototype.getSelectedItem=function(){return this.dropdown.find(".selected").eq(0)},e.prototype.update=function(){this.destroy(),this.init()},e.prototype.destroy=function(){this.domSelect.unbind("focus",t.proxy(this,"onFocus")),this.domSelect.unbind("blur",t.proxy(this,"onBlur")),this.domSelect.unbind("change",t.proxy(this,"onChange")),this.select.unbind("click",t.proxy(this,"onSelectClick")),this.dropdownItem.unbind("click",t.proxy(this,"onDropdownItemClick")),this.select.remove(),this.dropdown.remove(),this.showDomSelect(),this.settings.onDestroy&&this.settings.onDestroy.apply(this,[this.domSelect,"destroy"])},t.fn.coreUISelect=function(a,s){return this.each(function(){var i=t(this).data("coreUISelect"),n=t(this).data("decoration");if("destroy"!=a||i)if(i){if(a="string"==typeof a&&i[a]?a:"update",i[a].apply(i),"destroy"==a){t(this).removeData("coreUISelect");for(var p=0;p<o.length;p++)if(o[p]==i){o.splice(p,1);break}}}else i=new e(t(this),a,s,n),o.push(i),t(this).data("coreUISelect",i)})},t(document).bind("mousedown",function(t){for(var e=0;e<o.length;e++)o[e].onDocumentMouseDown(t)}),t(document).bind("keyup",function(e){for(var a=0;a<o.length;a++)(t.browser.safari||t.browser.msie||t.browser.opera)&&o[a].changeDropdownData(e),o[a].addListenerByServicesKey(e)}),t(document).bind(t.browser.safari?"keydown":"keypress",function(t){for(var e=0;e<o.length;e++)o[e].changeDropdownData(t)}),t(window).bind("resize",function(t){for(var e=0;e<o.length;e++)o[e].updateDropdownPosition(t)})}(jQuery);


jQuery(document).ready(function($){
	//
	// page settings and fixes
	$('#es_txt_button').removeAttr('value');
	$('.primary-item-image .attachment-post-thumbnail.size-post-thumbnail.wp-post-image').elevateZoom({
		zoomType	: "inner", cursor: "crosshair",zoomWindowFadeIn: 1500, zoomWindowFadeOut: 1500, lensFadeIn: 1500, lensFadeOut: 1500,scrollZoom : true
    });
	// add frame to catalog pictures in home page
	$('.srp-content-box').after('<div class="frame"></div>');
	
	var decor = $('.decor'); 
	$(document)
    .mouseleave( $.debounce( 900, true, function(e){
		//decor.css({'transition':'-webkit-transform 600ms ease-out'});
    }))
    .mouseover( $.debounce( 100, false, function(e){
        //decor.css({'transition':'-webkit-transform 600ms ease-out','transform':'translateY(100px)'});
    }));
	
$('body').jKit();
	

	
	
	
// decoration movement
//$('#breadcrumbs').jKit('ticker', { 'speed': '100', 'delay': '1500' });
//$('body.archive .attachment-post-thumbnail.size-post-thumbnail.wp-post-image').jKit('loop', { 'speed1': '1000', 'duration1': '1000', 'speed2': '3000', 'duration2':'2500' });
//$( '.attachment-post-thumbnail.size-post-thumbnail.wp-post-image' ).jKit('lightbox', { 'group': 'myalbum' });

$('#decorations').jKit('parallax', { 'strength': '0.1', 'axis': 'both' });
$('#decorations2').jKit('parallax', { 'strength': '-2.1', 'axis': 'y' ,'detect':'scroll','easing':'linear','scroll':'speed:100'});


// parallax effect
    var parallaxItems = [
      // {
      //   selector: $('.teaser__poster'),
      //   property: 'margin-top',
      //   start: 0,
      //   startVal: -20,
      //   finish: 800,
      //   finishVal: -120,
      //   transition: 500
      // },
      // {
      //   selector: $('.teaser__wedding'),
      //   property: 'margin-top',
      //   start: 600,
      //   startVal: -10,
      //   finish: 1200,
      //   finishVal: -110,
      //   transition: true
      // },
      // {
      //   selector: $('.teaser__wedding .teaser_more'),
      //   property: ['top', 'opacity'],
      //   start: [1350, 1350],
      //   startVal: [0, 1],
      //   finish: [1600, 1500],
      //   finishVal: [-55, 0],
      //   numeric: [false, true],
      //   transition: [true, true]
      // },
      // {
      //   selector: $('.teaser__evening'),
      //   property: 'margin-top',
      //   start: 1350,
      //   startVal: 0,
      //   finish: 1700,
      //   finishVal: -100,
      //   transition: true
      // },
      // {
      //   selector: $('.teaser__evening .teaser_more'),
      //   property: ['top', 'opacity'],
      //   start: [1800, 1800],
      //   startVal: [0, 1],
      //   finish: [2150, 2050],
      //   finishVal: [-55, 0],
      //   numeric: [false, true],
      //   transition: [true, true]
      // },
      // {
      //   selector: $('.teaser-wrapper'),
      //   property: 'margin-top',
      //   start: 1700,
      //   startVal: 0,
      //   finish: 2350,
      //   finishVal: -100,
      //   transition: true
      // },
      {
        selector: $('.decor__17'),
        property: 'translateY',
        start: 0,
        startVal: -150,
        finish: 1500,
        finishVal: 50,
        transition: true
      },
      {
        selector: $('.decor__18'),
        property: 'translateY',
        start: 0,
        startVal: -150,
        finish: 1500,
        finishVal: -50,
        transition: true
      },
      {
        selector: $('.decor__19'),
        property: 'translateY',
        start: 0,
        startVal: -300,
        finish: 1500,
        finishVal: 50,
        transition: true
      },
      {
        selector: $('.decor__20'),
        property: 'translateY',
        start: 0,
        startVal: -100,
        finish: 2500,
        finishVal: 100,
        transition: true
      },
      {
        selector: $('.decor__21'),
        property: 'translateY',
        start: 900,
        startVal: -100,
        finish: 2500,
        finishVal: 300,
        transition: true
      },
      {
        selector: $('.decor__22'),
        property: 'translateY',
        start: 1300,
        startVal: -100,
        finish: 2500,
        finishVal: 0,
        transition: true
      },
      {
        selector: $('.decor__23'),
        property: 'translateY',
        start: 1500,
        startVal: -100,
        finish: 3000,
        finishVal: 100,
        transition: true
      }
    ];

    

    //
    if ($( '.widget.widget_specialrecentpostsFree' )[0]){
        // Do something if class exists
                $( '.widget.widget_specialrecentpostsFree' ).addClass( 'col-lg-4 col-md-4 col-sm-12 col-xs-12' );
    }
    //$('.attachment-post-thumbnail.size-post-thumbnail.wp-post-image').jKit('zoom', { 'scale': '2' });
    
	
	//$(".navigation-menu").navigation();
});