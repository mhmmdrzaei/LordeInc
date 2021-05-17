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
		// $('.mission').addClass('closeMiddleMission');
	});

	$('.closeClickMenu').click(function(){
		// $('.mainPageSide').fadeOut(2500);
		$('.mainPageSide').css('display','none');
		$('.mainPageSide h1').css('display','block');
		$('.mainPageSideInner').removeClass('innerActivate');
		$('.mission').css('display','none');
		$('.pressMid').css('display','none');
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

	// var $container = $(".grid");

	//    $container.imagesLoaded(function () {
	//        $container.masonry({
	//        		itemSelector: '.grid-item',
	//        		// use element for option
	//        		columnWidth: '.grid-sizer',
	//        		// percentPosition: true

	//        });
	//    });
	var $grid = $('.grid').masonry({
	  itemSelector: 'none', // select none at first
	  columnWidth: '.grid-sizer',
	  // gutter: '.grid__gutter-sizer',
	  percentPosition: true,
	  stagger: 800,
	  // nicer reveal transition
	  visibleStyle: { transform: 'translateY(0)', opacity: 1 },
	  hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
	});

	// get Masonry instance
	var msnry = $grid.data('masonry');

	// initial items reveal
	$grid.imagesLoaded( function() {
	  $grid.removeClass('are-images-unloaded');
	  $grid.masonry( 'option', { itemSelector: '.grid-item' });
	  var $items = $grid.find('.grid-item');
	  $grid.masonry( 'appended', $items );
	});

	$grid.infiniteScroll({
	  path: getPenPath,
	  append: '.grid-item',
	  outlayer: msnry,
	  status: '.page-load-status',
	});

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
	

});


