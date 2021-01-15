$(function(){

	if ($('.pressMid ul li:nth-child(6)').length) {
    console.log('true');
    $('.morePress').css('display','block');
	}else {
	$('.morePress').css('display','none');
	}

	$('.morePress').click(function() {
  		$('.pressMid').toggleClass('openMid');
  		$(this).html('test');

	});


});