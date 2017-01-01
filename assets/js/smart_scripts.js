/* scroll */
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
	});
});
/* menu */
$(function() {
	$('nav#menu-left').mmenu();
});
/*annimate*/
new WOW().init();
/* slider */
$(function () {
  // Slideshow 4
  $("#slider4").responsiveSlides({
    auto: true,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });

});
/* galery */
$(function () {
	var filterList = {
		init: function () {
		// MixItUp plugin
		// http://mixitup.io
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
		});				
		},
			hoverEffect: function () {
		// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
				$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
				$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
				}		
			);				
		}
	};
// Run the show!
	filterList.init();
});	

// image
$(function(){
//owl
	$(document).ready(function() {
      $("#owl-demo").owlCarousel({
        items : 1,
        lazyLoad : true,
        autoPlay : true,
        navigation : false,
        navigationText :  false,
        pagination : true,
      });
    });
    $(document).ready(function() {
      $("#owl-demo1").owlCarousel({
        items : 1,
        lazyLoad : true,
        autoPlay : true,
        navigation : false,
        navigationText :  false,
        pagination : true,
      });
    });
//end owl

    $.each(document.images, function(){
		var this_image = this;
		var src = $(this_image).attr('src') || '' ;
		if(!src.length > 0){
		   //this_image.src = options.loading; // show loading
		   var lsrc = $(this_image).attr('lsrc') || '' ;
		   if(lsrc.length > 0){
			// image cache
				$.cacheImage(lsrc, {
				    load    : function (e) { /*console.log('Loaded',    this, e);*/ },
				    error   : function (e) { /*console.log('Error',     this, e);*/ },
				    abort   : function (e) { /*console.log('Aborted',   this, e);*/ },
				    // complete callback is called on load, error and abort
				    complete: function (e) { /*console.log('Completed', this, e);*/ }
				  });
			//end cache
		       var img = new Image();
		       img.src = lsrc;
		       $(img).load(function() {
		           this_image.src = this.src;
		       });
		   }
		}
	});
});
//end image