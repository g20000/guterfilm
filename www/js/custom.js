$(document).ready(function(){
	$('ul.tabs').delegate('li:not(.current)', 'click', function() {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.section_1').find('div.box').eq($(this).index()).fadeIn(450).siblings('div.box').hide();
	});
	$('.rewiev:last').css('border','0px');
});