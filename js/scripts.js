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
	  

	});
	$('.closeMission').click(function() {
	  	$('.mission').removeClass('openMidMain');
	  	$('.mission').addClass('closeMiddleMission');
	  

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
		oneToOneTouch: true,
		controls: true,
		pagerType: 'short',
		prevText: '←',
		nextText:'→',
		adaptiveHeight: true,

	});

	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  // use element for option
	  columnWidth: '.grid-sizer',
	  percentPosition: true
	});


});