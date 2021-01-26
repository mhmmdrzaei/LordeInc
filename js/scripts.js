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
  

	});
	
	$('.closeMid').click(function(){
		$('.pressMid').removeClass('openMid');
		$('.pressMid').addClass('closeMiddle');

	});

	$('.missionMore').click(function() {
	  	$('.mainPageMid').addClass('openMidMain');
	  	$('.mission').removeClass('closeMiddleMission');
	  	$('.pressMid').removeClass('openMid');
	  

	});
	$('.closeMission').click(function() {
	  	$('.mission').removeClass('openMidMain');
	  	$('.mission').addClass('closeMiddleMission');
	  

	});
	$('.menuClick').click(function(){
		$('.mainPageSide').css('display','block');
		$('.mainPageSide h1').css('display','none');
		$('.mainPageSideInner').addClass('innerActivate');
		$(this).css('display','none');
		$('.closeClickMenu').fadeIn(1500);
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