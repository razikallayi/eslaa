


$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

jQuery(document).ready(function( $ ) {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
});


$(document).ready(function() {
 $("#owl-demo").owlCarousel({
	margin: 10,
	nav: true,
	loop: false,
	autoplay:true,
	dots:false,
	rewind:true,
    autoplayTimeout:6000,
	autoplayHoverPause:true,
	responsive: {
	  0: {
		items: 2
	  },
	  600: {
		items: 3
	  },
	  1000: {
		items: 2
	  }
	}
  })
   $( ".owl-prev").html('<i class="fa fa-long-arrow-left"></i>');
 $( ".owl-next").html('<i class="fa fa-long-arrow-right"></i>');
})

$(document).ready(function() {
 $("#owl-demo1").owlCarousel({
	margin: 10,
	nav: true,
	loop: false,
	autoplay:true,
	dots:false,
	rewind:true,
    autoplayTimeout:4000,
	autoplayHoverPause:true,
	 navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
	responsive: {
	  0: {
		items: 2
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 1
	  }
	}
  })
})

$(document).ready(function() {
 $("#owl-demo2").owlCarousel({
	margin: 10,
	nav: false,
	loop: false,
	autoplay:true,
	dots:true,
	rewind:true,
    autoplayTimeout:5000,
	autoplayHoverPause:true,
	responsive: {
	  0: {
		items: 2
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 1
	  }
	}
  })
})


$(document).ready(function() {
 $("#owl-demo3").owlCarousel({
	margin: 10,
	nav: true,
	loop: false,
	autoplay:true,
	dots:false,
	rewind:true,
    autoplayTimeout:5000,
	autoplayHoverPause:false,
	navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
	responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 3
	  },
	  1000: {
		items: 4
	  },
	  1400: {
		items: 5
	  }
	}
  })
})


 $(document).ready(function() {
   	var stickyNavTop = $('.navsticky').offset().top;
   	var stickyNav = function(){
	    var scrollTop = $(window).scrollTop(); 
	    if (scrollTop > stickyNavTop) {
            $('.navsticky').addClass('sticky');
	    } else {
            $('.navsticky').removeClass('sticky');
	    }
	};
	stickyNav();
	$(window).scroll(function() {
		stickyNav();
	});
});



$('#file-upload').change(function() {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    $('#filename').html(filename);

});



	jQuery(document).ready(function ($) {
		$(".gridder").gridderExpander({
			scrollOffset: 300,
			scrollTo: "panel", 
			animationSpeed: 400,
			animationEasing: "easeInOutExpo",
			showNav: true,
			nextText: "<img src=\"project/images/rgt.png\">",
			prevText: "<img src=\"project/images/lft.png\">",
			closeText: "<img src=\"project/images/close.png\">",

			onStart: function () {
				console.log("Gridder Inititialized");
			},
			onExpanded: function (object) {
				console.log("Gridder Expanded");
				$(".carousel").carousel();
			},
			onChanged: function (object) {
				console.log("Gridder Changed");
			},
			onClosed: function () {
				console.log("Gridder Closed");
			}
		});
	});
	
	
$(document).ready(function() {
var offsetSize = $(".header").innerHeight();
$("html, body").animate({scrollTop:$(window.location.hash).offset().top-offsetSize }, 1000);
});

$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
        });
      }
    }
  });
  
   AOS.init({
        easing: 'ease-in-out-sine'
      });

