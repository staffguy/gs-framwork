/**
 * Throttle/Debounce v1.1
 * http://github.com/cowboy/jquery-throttle-debounce
 */
(function(d,f){"$:nomunge";var a=d.jQuery||d.Cowboy||(d.Cowboy={}),e;a.throttle=e=function(i,c,b,g){function d(){function a(){e=+new Date;b.apply(k,l)}function m(){h=f}var k=this,j=+new Date-e,l=arguments;g&&!h&&a();h&&clearTimeout(h);g===f&&j>i?a():!0!==c&&(h=setTimeout(g?m:a,g===f?i-j:i))}var h,e=0;"boolean"!==typeof c&&(g=b,b=c,c=f);a.guid&&(d.guid=b.guid=b.guid||a.guid++);return d};a.debounce=function(a,c,b){return b===f?e(a,c,!1):e(a,b,!1!==c)}})(this);

!function(t){function e(t,e,a,o){void 0==o&&(o=""),this.domSelect=t,this.settings=e||s,this.isSelectShow=!1,this.isSelectFocus=!1,this.isJScrollPane=this.isJScrollPane(),this.templates=a||{select:{container:'<div class="b-core-ui-select '+o+'"></div>',value:'<span class="b-core-ui-select__value"></span>',button:'<span class="b-core-ui-select__button"></span>'},dropdown:{container:'<div class="b-core-ui-select__dropdown '+o+'"></div>',wrapper:'<div class="b-core-ui-select__dropdown__wrap"></div>',list:'<ul class="b-core-ui-select__dropdown__list"></ul>',optionLabel:'<li class="b-core-ui-select__dropdown__label"></li>',item:'<li class="b-core-ui-select__dropdown__item"></li>'}},this.init(this.settings)}function a(t,e,a){var a=a||document;if(void 0!==t||null!==t)if(a.createEvent){var s=a.createEvent("MouseEvents");s.initEvent(e,!0,!1),t.dispatchEvent(s)}else if(a.createEventObject){var s=a.createEventObject();t.fireEvent("on"+e,s)}}var s={appendToBody:!1,jScrollPane:null,onInit:null,onFocus:null,onBlur:null,onOpen:null,onClose:null,onChange:null,onDestroy:null},o=[];t.browser.mobile=/iphone|ipad|ipod/i.test(navigator.userAgent.toLowerCase()),t.browser.operamini="[object OperaMini]"===Object.prototype.toString.call(window.operamini),e.prototype.init=function(){return t.browser.operamini?this:(this.buildUI(),this.hideDomSelect(),this.domSelect.is(":disabled")?(this.select.addClass("disabled"),this):(this.pane=this.domSelect.data("scrollpane"),this.isJScrollPane&&this.pane!==!1&&this.buildJScrollPane(),this.bindUIEvents(),this.settings.onInit&&this.settings.onInit.apply(this,[this.domSelect,"init"]),void 0))},e.prototype.buildUI=function(){this.select=t(this.templates.select.container).insertBefore(this.domSelect),this.selectValue=t(this.templates.select.value).appendTo(this.select),this.selectButton=t(this.templates.select.button).appendTo(this.select),this.dropdown=t(this.templates.dropdown.container),this.dropdownWrapper=t(this.templates.dropdown.wrapper).appendTo(this.dropdown),this.settings.appendToBody?this.dropdown.appendTo(t("body")):this.dropdown.insertBefore(this.domSelect),this.dropdownList=t(this.templates.dropdown.list).appendTo(this.dropdownWrapper),this.domSelect.find("option").each(t.proxy(this,"addItems")),this.dropdownItem=this.dropdown.find("."+t(this.templates.dropdown.item).attr("class")),this.dropdownItem.filter(":first-child").addClass("first"),this.dropdownItem.filter(":last-child").addClass("last"),this.addOptionGroup(),this.setSelectValue(this.getSelectedItem()),this.updateDropdownPosition(),this.currentItemOfDomSelect=this.currentItemOfDomSelect||this.domSelect.find("option:selected")},e.prototype.hideDomSelect=function(){this.domSelect.addClass("b-core-ui-select__select_state_hide"),this.domSelect.css({top:this.select.position().top,left:this.select.position().left})},e.prototype.showDomSelect=function(){this.domSelect.css({top:"auto",left:"auto"}),this.domSelect.removeClass("b-core-ui-select__select_state_hide")},e.prototype.bindUIEvents=function(){this.domSelect.bind("focus",t.proxy(this,"onFocus")),this.domSelect.bind("blur",t.proxy(this,"onBlur")),this.domSelect.bind("change",t.proxy(this,"onChange")),t.browser.mobile&&this.domSelect.bind("change",t.proxy(this,"changeDropdownData")),this.select.bind("click",t.proxy(this,"onSelectClick")),this.dropdownItem.bind("click",t.proxy(this,"onDropdownItemClick"))},e.prototype.getCurrentIndexOfItem=function(){return this.domSelect.find("option").index(t(this.domSelect).find("option:selected"))},e.prototype.scrollToCurrentDropdownItem=function(e){return this.dropdownWrapper.data("jsp")?(this.dropdownWrapper.data("jsp").scrollToElement(e),this):(t(this.dropdownWrapper).scrollTop(t(this.dropdownWrapper).scrollTop()+e.position().top-t(this.dropdownWrapper).height()/2+e.height()/2),void 0)},e.prototype.buildJScrollPane=function(){this.dropdownWrapper.wrap(t('<div class="j-scroll-pane"></div>'))},e.prototype.isJScrollPane=function(){if(this.settings.jScrollPane){if(t.fn.jScrollPane)return!0;throw new Error("jScrollPane no found")}},e.prototype.initJScrollPane=function(){this.pane!==!1&&this.dropdownWrapper.jScrollPane(this.settings.jScrollPane)},e.prototype.showDropdown=function(){return this.domSelect.focus(),this.settings.onOpen&&this.settings.onOpen.apply(this,[this.domSelect,"open"]),t.browser.mobile?this:(this.isSelectShow||(this.isSelectShow=!0,this.select.addClass("open"),this.dropdown.addClass("show").removeClass("hide"),this.isJScrollPane&&this.initJScrollPane(),this.scrollToCurrentDropdownItem(this.dropdownItem.eq(this.getCurrentIndexOfItem())),this.updateDropdownPosition()),void 0)},e.prototype.hideDropdown=function(){this.isSelectShow&&(this.isSelectShow=!1,this.select.removeClass("open"),this.dropdown.removeClass("show").addClass("hide"),this.settings.onClose&&this.settings.onClose.apply(this,[this.domSelect,"close"])),this.isSelectFocus&&this.domSelect.focus()},e.prototype.hideAllDropdown=function(){for(var t in o)o[t].hasOwnProperty(t)&&(o.dropdown.isSelectShow=!1,o.dropdown.domSelect.blur(),o.dropdown.addClass("hide").removeClass("show"))},e.prototype.changeDropdownData=function(){(this.isSelectShow||this.isSelectFocus)&&(this.currentItemOfDomSelect=this.domSelect.find("option:selected"),this.dropdownItem.removeClass("selected"),this.dropdownItem.eq(this.getCurrentIndexOfItem()).addClass("selected"),this.scrollToCurrentDropdownItem(this.dropdownItem.eq(this.getCurrentIndexOfItem())),this.setSelectValue(this.currentItemOfDomSelect)),t.browser.mobile&&this.settings.onChange&&this.settings.onChange.apply(this,[this.domSelect,"change"])},e.prototype.onDomSelectChange=function(e){this.domSelect.bind("change",t.proxy(this,"onChange")),a(this.domSelect.get(0),"change"),e||this.settings.onChange&&this.settings.onChange.apply(this,[this.domSelect,"change"])},e.prototype.addListenerByServicesKey=function(t){if(this.isSelectShow)switch(t.which){case 9:case 13:case 27:this.hideDropdown()}},e.prototype.onSelectClick=function(){return this.isSelectShow?this.hideDropdown():this.showDropdown(),!1},e.prototype.onFocus=function(){this.isDocumentMouseDown=!1,this.isSelectFocus=!0,this.select.addClass("focus"),this.settings.onFocus&&this.settings.onFocus.apply(this,[this.domSelect,"focus"])},e.prototype.onBlur=function(){this.isDocumentMouseDown||(this.isSelectFocus=!1,this.select.removeClass("focus"),this.settings.onBlur&&this.settings.onBlur.apply(this,[this.domSelect,"blur"]))},e.prototype.onChange=function(){this.settings.onChange&&this.settings.onChange.apply(this,[this.domSelect,"change"])},e.prototype.onDropdownItemClick=function(e){var a=t(e.currentTarget);if(!a.hasClass("disabled")&&!a.hasClass("selected")){this.domSelect.unbind("change",t.proxy(this,"onChange"));var s=this.dropdown.find("."+t(this.templates.dropdown.item).attr("class")).index(a);this.dropdownItem.removeClass("selected"),this.dropdownItem.eq(s).addClass("selected"),this.domSelect.find("option").removeAttr("selected"),this.domSelect.find("option").eq(s).attr("selected",!0),this.setSelectValue(this.getSelectedItem()),this.onDomSelectChange(!0)}return this.hideDropdown(),!1},e.prototype.onDocumentMouseDown=function(e){return this.isDocumentMouseDown=!0,0==t(e.target).closest(this.select).length&&0==t(e.target).closest(this.dropdown).length&&0==t(e.target).closest("option").length&&(this.isDocumentMouseDown=!1,this.hideDropdown()),!1},e.prototype.updateDropdownPosition=function(){if(this.isSelectShow){this.settings.appendToBody?this.dropdown.css({position:"absolute",top:this.select.offset().top+this.select.outerHeight(!0),left:this.select.offset().left,"z-index":"9999"}):this.dropdown.css({position:"absolute",top:this.select.position().top+this.select.outerHeight(!0),left:this.select.position().left,"z-index":"9999"});var t=this.select.outerWidth()-this.select.width(),e=this.dropdown.outerWidth()-this.dropdown.width();this.dropdown.width(this.select.outerWidth(!0)),this.dropdown.width()==this.select.outerWidth()&&this.dropdown.width(this.select.width()+t-e),this.isJScrollPane&&this.initJScrollPane()}},e.prototype.setSelectValue=function(e){var a=this.selectValue;if(a.text(e.text()),a.data("classname")&&a.removeClass(a.data("classname")),e.attr("class")){var s=e.attr("class");s=s.replace("b-core-ui-select__dropdown__item",""),s=s.replace("selected",""),s=s.replace("first",""),s=s.replace("last",""),s=t.trim(s),s.length&&a.addClass(s).data("classname",s)}var o=e.data("style");o&&a.attr("style",o)},e.prototype.isOptionGroup=function(){return this.domSelect.find("optgroup").length>0},e.prototype.addOptionGroup=function(){for(var e=this.domSelect.find("optgroup"),a=0;a<e.length;a++){var s=this.domSelect.find("option").index(t(e[a]).find("option:first-child"));t(this.templates.dropdown.optionLabel).text(t(e[a]).attr("label")).insertBefore(this.dropdownItem.eq(s))}},e.prototype.addItems=function(e,a){var a=t(a),s=t(this.templates.dropdown.item).text(a.text());a.attr("class")&&s.addClass(a.attr("class"));var o=a.data("style");o&&s.attr("style",o).data("style",o),a.attr("disabled")&&s.addClass("disabled"),a.attr("selected")&&(this.domSelect.find("option").removeAttr("selected"),s.addClass("selected"),a.attr("selected","selected")),s.appendTo(this.dropdownList)},e.prototype.getSelectedItem=function(){return this.dropdown.find(".selected").eq(0)},e.prototype.update=function(){this.destroy(),this.init()},e.prototype.destroy=function(){this.domSelect.unbind("focus",t.proxy(this,"onFocus")),this.domSelect.unbind("blur",t.proxy(this,"onBlur")),this.domSelect.unbind("change",t.proxy(this,"onChange")),this.select.unbind("click",t.proxy(this,"onSelectClick")),this.dropdownItem.unbind("click",t.proxy(this,"onDropdownItemClick")),this.select.remove(),this.dropdown.remove(),this.showDomSelect(),this.settings.onDestroy&&this.settings.onDestroy.apply(this,[this.domSelect,"destroy"])},t.fn.coreUISelect=function(a,s){return this.each(function(){var i=t(this).data("coreUISelect"),n=t(this).data("decoration");if("destroy"!=a||i)if(i){if(a="string"==typeof a&&i[a]?a:"update",i[a].apply(i),"destroy"==a){t(this).removeData("coreUISelect");for(var p=0;p<o.length;p++)if(o[p]==i){o.splice(p,1);break}}}else i=new e(t(this),a,s,n),o.push(i),t(this).data("coreUISelect",i)})},t(document).bind("mousedown",function(t){for(var e=0;e<o.length;e++)o[e].onDocumentMouseDown(t)}),t(document).bind("keyup",function(e){for(var a=0;a<o.length;a++)(t.browser.safari||t.browser.msie||t.browser.opera)&&o[a].changeDropdownData(e),o[a].addListenerByServicesKey(e)}),t(document).bind(t.browser.safari?"keydown":"keypress",function(t){for(var e=0;e<o.length;e++)o[e].changeDropdownData(t)}),t(window).bind("resize",function(t){for(var e=0;e<o.length;e++)o[e].updateDropdownPosition(t)})}(jQuery);

jQuery(document).ready(function($){
	// fixes image height in item page 
	var itemHeight = $('.category-image img').height()
	if(itemHeight > 252){
	  $('.category-image img').css({'height':'379px'});
	}
	else
	{
	  $('.category-image img').css({'height':'168px'});
	}
	// page settings and fixes
	// fixes image height in item page 
	var itemWidth = $('.category-image img').width()
	if(itemWidth <= 253){
	  $('.category-image img').css({'max-height':'379px'});
	}
	// removes value from newsletter
	$('#es_txt_button').removeAttr('value');
	var width = screen.width;
	if(width >= 768){
	// add Zoom box and settings to item page
		//initiate the plugin and pass the id of the div containing gallery images 
		$(".primary-item-image .attachment-post-thumbnail.size-post-thumbnail.wp-post-image").elevateZoom({scrollZoom : true,easing : true,zoomWindowFadeIn: 1500, zoomWindowFadeOut: 1500,zoomWindowPosition: 11,gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'});
		//pass the images to Fancybox
		$(".primary-item-image .attachment-post-thumbnail.size-post-thumbnail.wp-post-image").bind("click", function(e) { var ez = $('.primary-item-image .attachment-post-thumbnail.size-post-thumbnail.wp-post-image').data('elevateZoom');	$.fancybox(ez.getGalleryList()); return false; });	
	}

	//$('.primary-item-image .attachment-post-thumbnail.size-post-thumbnail.wp-post-image').elevateZoom({
	// zoomWindowFadeIn: 1500, zoomWindowFadeOut: 1500,zoomWindowPosition: 11,scrollZoom : true,easing : true
    //});
	// add frame to catalog pictures in home page
	$('.srp-content-box').after('<div class="frame"></div>');
	
	// handler to set bounce / try to configure later
	var decor = $('.decor'); 
	$(document)
    .mouseleave( $.debounce( 900, true, function(e){
		//decor.css({'transition':'-webkit-transform 600ms ease-out'});
    }))
    .mouseover( $.debounce( 100, false, function(e){
        //decor.css({'transition':'-webkit-transform 600ms ease-out','transform':'translateY(100px)'});
    }));
	// jKit handler
	$('body').jKit();
		
	// decoration movement
	//$('#breadcrumbs').jKit('ticker', { 'speed': '100', 'delay': '1500' });
	//$('body.archive .attachment-post-thumbnail.size-post-thumbnail.wp-post-image').jKit('loop', { 'speed1': '1000', 'duration1': '1000', 'speed2': '3000', 'duration2':'2500' });
	//$( '.attachment-post-thumbnail.size-post-thumbnail.wp-post-image' ).jKit('lightbox', { 'group': 'myalbum' });

	// slider decoration movement handler
	$('#decorations').jKit('parallax', { 'strength': '0.1', 'axis': 'both' });
	// slide down decoration movement handler
	$('#decorations2').jKit('parallax', { 'strength': '-2.1', 'axis': 'y' ,'detect':'scroll','easing':'linear','scroll':'speed:100'});

    //
    if ($( '.widget.widget_specialrecentpostsFree' )[0]){
        // Do something if class exists
                $( '.widget.widget_specialrecentpostsFree' ).addClass( 'col-lg-4 col-md-4 col-sm-12 col-xs-12' );
    }
	// makes the newslater input 
	$('.swan-decor').click(function(){
		$(this).css({'z-index':'-1'});
	});
	
    //$('.attachment-post-thumbnail.size-post-thumbnail.wp-post-image').jKit('zoom', { 'scale': '2' });
});