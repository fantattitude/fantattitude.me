function toggleSpinwrap () {
	var flip = document.getElementById ('flip-card');
	flip.className = flip.className ? '' : 'flipped';
	return false;
}

$(document).ready(function(){
	$("#Fantattitude, #closebox").click(function(){
		toggleSpinwrap();
	});

	
	$('#cycleImages').cycle();
	
	$('#contact-twitter').click(function(){
		if($('#twitter').hasClass('show'))
		{
			$('#twitter').removeClass('show');
			$('#goLeft').animate({left: '0px'},'slow');
		}
		else
		{
			$('#twitter').addClass('show');
			$('#goLeft').animate({left: '30px'},'slow');
		}
		return false;
	});
	
	$('#contact-lastfm').click(function(){
		if($('#lastfm').hasClass('show'))
		{
			$('#lastfm').removeClass('show');
		}
		else
		{
			$('#lastfm').addClass('show');
		}
		return false;
	});
	
	$('#goRight').click(function(){
		$('#backwrapper').stop().animate({scrollLeft: 600}, 1000,'easeInOutExpo');
		$('#portfolioNav').fadeIn('slow');
		$('#goRight').fadeOut('slow');
		$('#goLeft').fadeIn('slow');
	});
	
	$('#goLeft').click(function(){
		$('#backwrapper').stop().animate({scrollLeft: 0}, 1000,'easeInOutExpo');
		$('#portfolioNav').fadeOut('slow');
		$('#goRight').fadeIn('slow');
		$('#goLeft').fadeOut('slow');
	});
	
	$('#portfolioNav a').click(function(){
		$('#portfolioNav a.current').removeClass('current');
		$(this).addClass('current');
		$('#portfolioDiv').stop().animate({scrollLeft: (600*($(this).attr('rel')-1))}, 1000, 'easeInOutExpo');
		return false;
	});
	
	if(window.addEventListener) {
		window.addEventListener("keydown", function(e){
			if($('#portfolioNav').css('display') != 'none')
			{
				if(e.keyCode == 37)
				{
					var currentEl = $('#portfolioNav a.current');
					if(!currentEl.attr('rel')<=1)
					{
						currentEl.prev().click();
					}
				}
				else if(e.keyCode == 39)
				{
					var currentEl = $('#portfolioNav a.current');
					if(!currentEl.attr('rel')>= $('#porfolioNav a').length)
					{
						currentEl.next().click();
					}
				}
			}
		}, true);
	}
	
	if (window.addEventListener) {
		var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
		window.addEventListener("keydown", function(e){
			kkeys.push(e.keyCode);
			if (kkeys.toString().indexOf(konami) >= 0)
			{
				kkeys = [];
				if($('#twitter').hasClass('show'))
				{
					$('#twitter, #lastfm').removeClass('show');
					$('#goLeft').animate({left: '0px'},'slow');
					$('#goRight').animate({right: '0px'},'slow');
				}
				else
				{
					$('#twitter, #lastfm').addClass('show');
					$('#goLeft').animate({left: '30px'},'slow');
					$('#goRight').animate({right: '30px'},'slow');
				}
				
			}
		}, true);
	}
});