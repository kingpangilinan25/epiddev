/*function fcf_sent() {
	var $ = jQuery;
	$('.free_consult_frm_mid').append('<span class="success_msg" >Thank You for your trust in us, we will contact you within 24 hours</span>');
	var $msg_div = $('.free_consult_frm_mid .success_msg');	
	$msg_div.show(function() {
		$('.wpcf7-response-output').remove();
	}).delay(5000).fadeOut(1500,null,function() {
		$msg_div.remove();
	});
}*/
jQuery(document).ready(function(e) {
	var $ = jQuery;
	console.log('js loaded by King Pangilinan WPEng Local');
	/*
	$('.dropdown-toggle', '#nav').click(function() {
		var anchor_link = $(this);
		var href = $(anchor_link).attr('href');
		$is_open_dp = $(anchor_link).parent().hasClass('open');
		if($is_open_dp)
			window.location.assign(href);
	});
	*/
    
    /* Call Me Back Form Widget Slide effect
    $('.widget-hidden-cont a.widget-trigger').click(function(event) {
        event.preventDefault();
        $(this).parent().toggleClass("show-widget");
    });
    */
    
    if($('.ver-mid').length) {
        $('.ver-mid').wrap('<div class="dtable" />').wrap('<div class="dtable-cell" />');
    }
	
	/* Check Out Our Work */
	$('.ow-flex-wrap').flexslider({
		
namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin
selector: ".slides > li",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
animation: "slide",              //String: Select your animation type, "fade" or "slide"
easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
reverse: false,                 //{NEW} Boolean: Reverse the animation direction
animationLoop: false,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
slideshow: true,                //Boolean: Animate slider automatically
slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds
initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
randomize: false,               //Boolean: Randomize slide order

// Usability features
pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

// Primary Controls
controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
prevText: "<span class='glyphicon glyphicon-menu-left'> </span>",           //String: Set the text for the "previous" directionNav item
nextText: "<span class='glyphicon glyphicon-menu-right'> </span>",               //String: Set the text for the "next" directionNav item

// Secondary Navigation
keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
pausePlay: false,               //Boolean: Create pause/play dynamic element
pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
playText: 'Play',               //String: Set the text for the "play" pausePlay item

// Special properties
controlsContainer: "",          //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
manualControls: "",             //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
sync: "",                       //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
asNavFor: "",                   //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider

// Carousel Options
itemWidth: 220,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
minItems: 0,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
maxItems: 5,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
                                
// Callback API
start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
end: function(){},              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
added: function(){},            //{NEW} Callback: function(slider) - Fires after a slide is added
removed: function(){}           
		
	});
	
	
	$('.testi-slider').flexslider({
		animation: "fade",
		slideshow: true,                //Boolean: Animate slider automatically
		slideshowSpeed: 9000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 900,            //Integer: Set the speed of animations, in milliseconds            
		randomize: true,               //Boolean: Randomize slide order
		
		pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
		useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
		touch: true,    				//{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
		
		controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		directionNav: false,             //Boolean: Create navigation for previous/next navigation? (true/false) 
		
		// Carousel Options
		itemWidth: 940,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
		itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
		minItems: 1,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
		maxItems: 1,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
		move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
		
	});

	
	
	
	$('.dropdown-toggle', '#nav').click(function() {
		var anchor_link = $(this);
		var href = $(anchor_link).attr('href');
		$is_open_dp = $(anchor_link).parent().hasClass('open');
		if($is_open_dp)
			window.location.assign(href);
	});
	$('#menu-main_nav li').hover(function() {
		if( $('.sub-menu', $(this)).length >= 1 ) {
			var $anchor_link_li = $(this);
			$anchor_link = $anchor_link_li.children('a');
			$anchor_link_li.addClass('open');
			$anchor_link.attr("aria-expanded","true");
			console.log($anchor_link);
			$('> .sub-menu', $(this)).css({'display':'block'});
		}
	},function() {
		if( $('.sub-menu', $(this)).length >= 1 ) {
			var $anchor_link_li = $(this);
			$anchor_link_li.removeClass('open');
			$anchor_link.attr("aria-expanded","false");
			$('> .sub-menu', $(this)).css({'display':'none'});
		}
	});
	$('iframe[src*="youtube.com"], iframe[src*="mapsengine"], object, embed').wrap('<div class="video_wrap" />');
	function set_onscroll() {
		if ($(window).scrollTop() > 50) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}
	}
	set_onscroll();
	$(window).bind('scroll', function () {
		set_onscroll();
	});
    
    var $padTopBody = $('#header').outerHeight();
    
    $('body').css({
        'padding-top': $padTopBody
    });
    
    $('img', '.hero-img-wrap').bind("click", function() {
        
        // add selected class and not-selected class for the unselected img
        $('.hero-img-wrap').not($(this).parent('.hero-img-wrap'))
            .removeClass("selected")
            .addClass("not-selected");        
        $(this).parent('.hero-img-wrap')
            .addClass("selected")
            .removeClass("not-selected");
        
        if( $(this).parent('.hero-img-wrap').hasClass("gl-website") ) { // check if is great looking website img click
            //$(".wpcf7-list-item.first label").click();
            $("input:not([value*='Great Looking Website'])").removeAttr("checked");
            $("input[value*='Great Looking Website']").attr("checked", "checked");
        } else if( $(this).parent('.hero-img-wrap').hasClass("seo-audit") ) { // check if is seo audit img click
            //$(".wpcf7-list-item.last label").click();            
            $("input:not([value*='Free SEO Audit'])").removeAttr("checked");
            $("input[value*='Free SEO Audit']").attr("checked", "checked");
        }
        
    });
    
    
    /*
	//new WOW().init();
	  wow = new WOW(
		{
		  boxClass:     'onscreen',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
	  )
	  wow.init();
      */
    
    
    
/*
$( ".hero_area" ).mousemove(function( event ) {
  $('.nivo-prevNav,.nivo-nextNav').css({'opacity':1});
});
$( ".hero_area" ).mouseout(function() {
  $('.nivo-prevNav,.nivo-nextNav').css({'opacity':0});
});
	var $def_text = 'Keyword Search...';
	$('.s').val($def_text).css({'color': '#bababa'});
	$('.s').focus(function() {
		if($(this).val() == $def_text) {
			$(this).val('').css({'color': '#333'});
		}
	});
	$('.s').blur(function() {
		if($(this).val().length < 1) {
			$(this).val($def_text).css({'color': '#bababa'});
		}
	});
	$('#main-nav > li').hover(function() {
	if( $('.sub-menu', $(this)).length >= 1 ) {
	  	$('.sub-menu', $(this)).css({'display':'block'});
	}
	},function() {
	  	$('.sub-menu', $(this)).css({'display':'none'});
	});
    $(".jCaruselH").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
		visible: 4,
		auto: 3000,
		speed: 800
    });
	var cur_location = window.location;
	$('img:not(.wp-socializer img)').each(function() {
  	var $cur_img = $(this);
	  if($cur_img.width() >= 80 && $cur_img.height() >= 80) {
  	  $cur_img.wrap('<div class="image_wrapper_pin"></div>');
  	  var $img_url = $cur_img.attr('src');
  	  $cur_img.parent().append('<div class="pinBtn"><a href="//www.pinterest.com/pin/create/button/?url='+ cur_location +'&media='+ $img_url +'&description=Epidemic-Marketing%20Design%20Sample" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a></div>');
	  }	  
  	$cur_img.parent().hover(function() {
  	  $('.pinBtn', $(this)).show();  
  	},function() {
  	  $('.pinBtn', $(this)).hide();	  
  	});
	});
	$('.pinBtn a').click(function() {
		window.open(this.href,
		'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=600');return false;
	});
	*/
});