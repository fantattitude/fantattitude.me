function changePortfolio(){
	if(!$('#slideshow img').is(':animated')){
		currentShowed = $('.showed');
		currentShowed.css({zIndex: 5});
		switch($('#slideshow img').index($('#slideshow img.showed'))){
			case 0:
				$('#slideshow img:nth-child('+2+')').css({zIndex: 10});
				$('#slideshow img:nth-child('+2+')').animate({opacity: 1},'slow',function(){
					currentShowed.removeClass('showed');
					currentShowed.css({zIndex: 1});
					currentShowed.css({opacity: 0});
					$('#slideshow img:nth-child('+2+')').addClass('showed');
				});
				break;
			case 1:
				$('#slideshow img:nth-child('+3+')').css({zIndex: 10});
				$('#slideshow img:nth-child('+3+')').animate({opacity: 1},'slow',function(){
					currentShowed.removeClass('showed');
					currentShowed.css({zIndex: 1});
					currentShowed.css({opacity: 0});
					$('#slideshow img:nth-child('+3+')').addClass('showed');
				});
				break;
			case 2:
				$('#slideshow img:nth-child('+1+')').css({zIndex: 10});
				$('#slideshow img:nth-child('+1+')').animate({opacity: 1},'slow',function(){
					currentShowed.removeClass('showed');
					currentShowed.css({zIndex: 1});
					currentShowed.css({opacity: 0});
					$('#slideshow img:nth-child('+1+')').addClass('showed');
				});
				break;
			default:
				break;
		}
	}
}

$(document).ready(function(){	
	
	
	if(!$.browser.webkit)
		var timer = setInterval("changePortfolio()", 5000);
	
	
	//$('#slideshow').cycle();
	
	$('.clicky').click(function(){
		var currentThis = $(this).parent();
		var angle = Math.floor(Math.random()*101);
		if(Math.floor(Math.random()*2))
			var upordown = -650;
		else
			var upordown = +230;
		
		if(!currentThis.hasClass('inAnimation') && currentThis.css('z-index') == 3){
			currentThis.addClass('inAnimation');
			$('#first_card').css({zIndex: (parseInt($('#first_card').css('z-index'))+1)});
			$('#second_card').css({zIndex: (parseInt($('#second_card').css('z-index'))+1)});
			$('#third_card').css({zIndex: (parseInt($('#third_card').css('z-index'))+1)});
			$('#fourth_card').css({zIndex: (parseInt($('#fourth_card').css('z-index'))+1)});
			currentThis.animate({marginTop: upordown+"px",left: angle+"%"},'slow',function(){
				currentThis.css({zIndex: (parseInt($(this).css('z-index'))-4)});
				currentThis.animate({marginTop: "-210px",left:"50%"},'slow',function(){
					currentThis.removeClass('inAnimation');
				});
			});
			return false;
		}
		return false;
	});
	
	$('#socials>a').hover(function(){
		$('#hover_card').html('My '+$(this).attr('id'));
		//$(this).stop().animate({opacity: 1, top: -15});
		$('#hover_card').stop().animate({opacity:1});
	},function(){
		//$(this).stop().animate({opacity: 0.2, top: 0});
		$('#hover_card').stop().animate({opacity:0});
	});

	/*$('#iPhone').hover(function(){
		//$(this).stop().animate({opacity: 1, top: -90});
	},function(){
		//$(this).stop().animate({opacity: 0.1, top: -100});
	});*/
	
	var tougle = 0;
	
	if (window.addEventListener) {
		var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
		window.addEventListener("keydown", function(e){
			kkeys.push(e.keyCode);
			if (kkeys.toString().indexOf(konami) >= 0)
			{
				kkeys = [];
				if(!tougle){
					//$('#playground').animate({"left": "0px"},"slow");
					//$('#card_container').animate({"left": "102px"},"slow");
					$('#first_card').css({
						'-webkit-transform':'scale(0.5)',
						'-webkit-box-shadow':'0px 0px 20px blue',
						'margin-top':'-320px',
						'margin-left':'-550px'
					});
					$('#second_card').css({
						'-webkit-transform':'scale(0.5) rotate(1.5deg)',
						'-webkit-box-shadow':'0px 0px 20px blue'
					});
					$('#third_card').css({
						'-webkit-transform':'scale(0.5) rotate(-1.3deg)',
						'-webkit-box-shadow':'0px 0px 20px blue'
					});
					$('#fourth_card').css({
						'-webkit-transform':'scale(0.5)',
						'-webkit-box-shadow':'0px 0px 20px blue'
					});
					tougle = 1;
					}
				else{
					//$('#playground').animate({"left": "-204px"},"slow");
					//$('#card_container').animate({"left": "0px"},"slow");
					
					$('#first_card').css({
						'-webkit-transform':'scale(1)',
						'-webkit-box-shadow': '0px 1px 4px rgba(0,0,0,0.5)'
					});
					$('#second_card').css({
						'-webkit-transform':'scale(1) rotate(1.5deg)',
						'-webkit-box-shadow': '0px 1px 4px rgba(0,0,0,0.5)'
					});
					$('#third_card').css({
						'-webkit-transform':'scale(1) rotate(-1.3deg)',
						'-webkit-box-shadow': '0px 1px 4px rgba(0,0,0,0.5)'
					});
					$('#fourth_card').css({
						'-webkit-transform':'scale(1)',
						'-webkit-box-shadow': '0px 1px 4px rgba(0,0,0,0.5)'
					});
					tougle = 0;
					}
				
			}
		}, true);
	}
	
	var isRunning = 0; // Default value set so your man is NOT running
	
	function toggleRun(keyCode){
		if(keyCode == '16'){
			if(isRunning){
				isRunning = 0;
				//engine.speed = engine.speed - 75;
				console.log("Slow mo' bro' !");
			}
			else{
				isRunning = 1;
				//engine.speed = engine.speed + 75;
				console.log("Running awesomeness !");
			}
		}
	}
	
	$(document).keydown(function(event){
		toggleRun(event.keyCode);
	});
	
	$("#playground").click(function(){
		toggleRun(16);
	});


});