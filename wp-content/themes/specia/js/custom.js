/*
* Slider Script
*/
jQuery(document).ready(function() {
  var owl = jQuery('.slider-version-one');
  owl.owlCarousel({
	nav: owl.children().length > 1,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	loop: owl.children().length > 1,
	autoplayTimeout:5000,
	margin: 0,
	autoplay: true,
	items:1,
	smartSpeed:450,
	responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 1
	  },
	  1000: {
		items: 1
	  }
	}
  })
})

/*
Text Rotator Function
*/
jQuery(document).ready(function(){
      jQuery(".demo1 .rotate").textrotator({
        animation: "fade",
        speed: 1000
      });  
    });


/*
Sticky Header Function
*/

jQuery(function() {
    jQuery('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        var nav_height = $('.navbar').innerHeight();
        jQuery('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - nav_height
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    jQuery('body').scrollspy({
        target: '.sticky-nav',
        offset: 60
    })
});
jQuery(document).ready(function() {
 
  jQuery(window).load(function(){
      jQuery(".sticky-nav").sticky({ topSpacing: 0 });
    });
 
});

/*
Top Scroller Function
*/
jQuery(".top-scroll").hide(); 
jQuery(function () {
jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 500) {
	jQuery('.top-scroll').fadeIn();
  } else {
	jQuery('.top-scroll').fadeOut();
  }
});   
jQuery('a.top-scroll').click(function () {
  jQuery('body,html').animate({
	scrollTop: 0
  }, 800);
  return false;
});
});
  
/*
//wow-animated
*/
jQuery(document).ready(function() {
wow = new WOW({
  boxClass:     'wow',      // animated element css class (default is wow)
  animateClass: 'animated', // animation css class (default is animated)
  offset:       100,        // distance to the element when triggering the animation (default is 0)
  mobile: true,             // trigger animations on mobile devices (true is default)
  live: true                // consatantly check for new WOW elements on the page (true is default)
})
wow.init();
});