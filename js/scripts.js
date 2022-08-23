$(function(){

	// if ($('.pressMid ul li:nth-child(6)').length) {
 //    console.log('true');
 //    $('.morePress').css('display','block');
	// }else {
	// $('.morePress').css('display','none');
	// }

	$('.morePress').click(function() {
  		$('.pressMid').addClass('openMid');
  		$('.pressMid').removeClass('closeMiddle');
  		$('.mainPageMid').removeClass('openMidMain');
  		$('.pressMid').css('display','block');

  

	});
	
	$('.closeMid').click(function(){
		$('.pressMid').removeClass('openMid');
		$('.pressMid').addClass('closeMiddle');

	});

	$('.missionMore').click(function() {
	  	$('.mainPageMid').addClass('openMidMain');
	  	$('.mission').css('display','block');
	  	$('.mission').removeClass('closeMiddleMission');
	  	$('.pressMid').removeClass('openMid');
	  	// $('.mainPageSide').css('border','none');
	  

	});
	$('.closeMission').click(function() {
	  	$('.mission').removeClass('openMidMain');
	  	$('.mission').addClass('closeMiddleMission');
	  	// $('.mainPageSide').css('border-right','1px solid #dadbdd');
	  	// $('castingPageSide').css('border-right','0');
	  

	});
	$('.menuClick').click(function(){
		$('.mainPageSide').css('display','block',1500);
		$('.mainPageSide h1').css('display','none');
		$('.mainPageSideInner').addClass('innerActivate');
		// $('.mainPageSideInner').removeClass('innerMoveBack');
		$(this).css('display','none');
		// $('.mission').css('display','block');
		$('.closeClickMenu').fadeIn(1500);
		$('body').css('overflow','hidden');
		$('footer').toggleClass('displaynone');
		// $('.mission').addClass('closeMiddleMission');
	});

	$('.closeClickMenu').click(function(){
		// $('.mainPageSide').fadeOut(2500);
		$('.mainPageSide').css('display','none');
		$('.mainPageSide h1').css('display','block');
		$('.mainPageSideInner').removeClass('innerActivate');
		$('.mission').css('display','none');
		$('.pressMid').css('display','none');
		$('footer').toggleClass('displaynone');
		// $('.mission').addClass('closeMiddleMission');
		// $('.pressMid').addClass('closeMiddle');
		// $('.mainPageSideInner').addClass('innerMoveBack');
		$('.menuClick').fadeIn(500);
		$(this).fadeOut(100);
		$('body').css('overflow','auto');


	});


	


	$('.bxslider').bxSlider({
		// oneToOneTouch: true,
		controls: true,
		pagerType: 'short',
		prevText: '←',
		nextText:'→',
		adaptiveHeight: true,
		// onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
		//     $('.active-slide').removeClass('active-slide');
		//     $('.bxslider>li').eq(currentSlideHtmlObject + 1).addClass('active-slide')
		// },
		// onSliderLoad: function () {
		//     $('.bxslider>li').eq(1).addClass('active-slide')
		// },

	});



	// var waitForEl = function(selector, callback) {
	//   if (jQuery(selector).length) {
	//     callback();
	//   } else {
	//     setTimeout(function() {
	//       waitForEl(selector, callback);
	//     }, 100);
	//   }
	// };

	// waitForEl(selector, function() {
	//   // work the magic

	//   setTimeout(function() {
	//   var $grid = $('.grid').masonry({
	//     itemSelector: 'none', // select none at first
	//     columnWidth: '.grid-sizer',
	//     // gutter: '.grid__gutter-sizer',
	//     percentPosition: true,
	//     stagger: 800,
	//     // nicer reveal transition
	//     visibleStyle: { transform: 'translateY(0)', opacity: 1 },
	//     hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
	//   });
	//   $grid.addClass('is-visible-items');
	//     $grid.masonry( 'option', {
	//       itemSelector: '.grid-item'
	//     });
	//     // var $items = $grid.find('.grid-item');
	//     // $grid.masonry( 'appended', $items );

	//   // get Masonry instance
	//   var msnry = $grid.data('masonry');

	//   // initial items reveal
	//   $grid.imagesLoaded( function() {
	//     $grid.removeClass('are-images-unloaded');
	//     $grid.masonry( 'option', { itemSelector: '.grid-item' });
	//     var $items = $grid.find('.grid-item');
	//     $grid.masonry( 'appended', $items );
	//   });
	//   }, 100);
	// });


  // var alm_masonry_vars = {
  //     itemSelector : '.grid_item',
  //     // columnWidth: '.grid-sizer',
  //     percentPosition: true,
  //     stagger: 800,
  //     gutter: 10,
  //     // visibleStyle: { transform: 'translateY(0)', opacity: 1 },
  //     // hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
  //  }
  //  	  $grid.masonry( 'option', {
	 //    itemSelector: '.grid-item',
	 //  });
	 // var $container = $(".grid");

	 //    $container.imagesLoaded(function () {
	 //        $container.masonry({
	 //        		itemSelector: '.grid-item',
	 //        		// use element for option
	 //        		columnWidth: '.grid-sizer',
	 //        		// percentPosition: true

	 //        });
	 //    });

	$('.alm-listing').isotope({
	  itemSelector: '.grid-item',
	  masonry: {
	    columnWidth: 100
	  }
	});
	  var $grid = $('.grid').masonry({
	    // hack, select no items
	    itemSelector: 'none',
	    columnWidth: '.grid-sizer',
	    percentPosition: true,
	    stagger: 800,
	    // gutter: 10,
	   visibleStyle: { transform: 'translateY(0)', opacity: 1 },
	  hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
	  });
	  
	  // reset itemSelector
	  $grid.masonry( 'option', {
	    itemSelector: '.grid-item',
	  });

	  var $firstThree = $('.grid-item');
	  var $firstTen = $('.grid-item:nth-child(n+8)');


	  // initial items reveal

	  $firstThree.imagesLoaded( function() {
	  	// $firstThree.addClass('is-visible-items');
	
	  	// $firstThree.removeClass('are-images-unloaded');
	  	
	  	
	    $grid.masonry( 'option', { itemSelector: '.grid-item' });
	    setTimeout(function() {	
	    	$firstThree.addClass('is-visible-items');
	    	
	    	$firstThree.removeClass('are-images-unloaded');
	    	$('.loader').hide();

	     }, 1500);
	    var $items = $grid.find('.grid-item');
	    // $grid.masonry( 'appended', $items );
	    var $items = $grid.find('.grid-item');
	    $grid.masonry( 'appended', $items );
	    

	    // get Masonry instance
	    var msnry = $grid.data('masonry');

	  

	  });
	  // $firstTen.imagesLoaded( function() {
	  
	  // 	// setTimeout(function() {	
	  	
	  //   // $grid.masonry( 'option', { itemSelector: '.grid-item' });

	  //   //  // }, 1500);
	  //   // var $items = $grid.find('.grid-item');
	  //   // // $grid.masonry( 'appended', $items );
	  //   // var $items = $grid.find('.grid-item');
	  //   // $grid.masonry( 'appended', $items );
	    

	  //   // // get Masonry instance
	  //   // var msnry = $grid.data('masonry');

	  

	  // });
	




	
	 


		



	

	

	// $grid.infiniteScroll({
	//   path: '.grid',
	//   append: '.grid-item',
	//   outlayer: msnry,
	//   status: '.page-load-status',
	// });

	// // with Masonry & jQuery
	// // init Masonry
	// let $grid = $('.grid').masonry({
	//   // Masonry options...
	//   itemSelector: '.grid-item',
	//   // use element for option
	//   columnWidth: '.grid-sizer',
	// });

	// get Masonry instance
	// let msnry = $container.data('masonry');

	// // init Infinite Scroll
	// $container.infiniteScroll({
	//   // Infinite Scroll options...
	//   append: '.grid-item',
	//   outlayer: msnry,
	//   elementScroll: true
	// });

	$('.vid').each(function(i) {
	  //This is the regular vanilla 'this'.(optional/required for next function)
	  var self = this;
	  var lis = $(self).parent();
	  console.log(lis);
	  // var btnPlayPause = document.getElementById('btnPlayPause');
	  // $('#btnPlayPause').on('click', function() {
	  // 	console.log('plz');
	  //   (self.paused) ? self.play(): self.pause();
	  // });

	  // if (($(self).attr("autoplay")) & ($(lis).hasClass('active-slide'))) {
	  // 	$(self).pause();
	  // }
	  // // console.log(lis);

	  // $('.bx-next').on('click', function{
	  // 	// if ($(lis).attr("aria-hidden","false")) {
	  // 	// 	console.log('fuck');
	  // 	// };
	  // });
	  // if ($(lis).hasClass('active-slide')){
	  // 	console.log('comeonnnn');
	  // 	$(self)[0].autoplay = true;
	  // };
	  // $('.bx-next').click(function(){



	  // });
	  //Click on the video element to play or pause.(optional)
	  $(this).on('click', function() {
	  	$('.play').toggleClass('playing');
	    (self.paused) ? self.play(): self.pause();
	  });
	  //When this video ends, go to next slide
	  $(this).on('ended', function() {
	    bx.goToNextSlide();
	  });
	});

	$( ".castingPagePosts" ).on( "load", function() {
		console.log('fart');
	  // Handler for .load() called.
	});


	

	

});
// gsap

function animateFrom(elem, direction) {
	  gsap.registerPlugin(ScrollTrigger);
  direction = direction || 1;
  var x = 0,
      y = direction * 100;
  if(elem.classList.contains("gs_reveal_fromLeft")) {
    x = -200;
    y = 0;
  } else if (elem.classList.contains("gs_reveal_fromRight")) {
    x = 200;
    y = 0;

  } 
  // else if (elem.classList.contains("gs_reveal_fromBottom")) {
  //   // x = 0;
  //   // y = 200;

  // }
  // gsap.set(".gs_reveal_fromBottom", { yPercent: 0});

  // gsap.to(".gs_reveal_fromBottom", {
  //   // yPercent: -25,
  //   ease: "none",
  //    y: 0, 
  //    opacity: 1,
  //   scrollTrigger: {
  //     trigger: ".artistLink",
  //     start: "top center",
  //     end: "top 50px",
  //     // pin: true,
  //     scrub: 3
  //   }, 
  // });
  elem.style.transform = "translate(" + x + "px, " + y + "px)";
  elem.style.opacity = "1";
  gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
    duration: 2.25, 
    x: 0,
    y: 0, 
    autoAlpha: 1, 
    // ease: "expo", 
    overwrite: "auto",
    ease: "power2",
    stagger: 0.3
  });
}

function hide(elem) {
  gsap.set(elem, {autoAlpha: 1});
}

document.addEventListener("DOMContentLoaded", function() {
  gsap.registerPlugin(ScrollTrigger);
  
  gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
    hide(elem); // assure that the element is hidden when scrolled into view
    
    ScrollTrigger.create({
      trigger: elem,
      onEnter: function() { animateFrom(elem) }, 
      onEnterBack: function() { animateFrom(elem, -1) },
      onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
    });
  });
});

