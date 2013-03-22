(function() {
    var re_browsers = {
        firefox: /firefox\/([\d\.]+)/,
        chrome: /chrome\/([\d\.]+)/,
        safari: /webkit.*?version\/([\d\.]+)/,
        opera: /opera.*?version\/([\d\.]+)/,
        ie: /msie\s+([\d\.]+)/
        // ...
    };

    var ua = window.navigator.userAgent.toLowerCase(), k, re, browser = {};
    for (k in re_browsers) {
        if (re = re_browsers[k].exec(ua)) {
            break;
        }
    }
    browser[k] = true;
    browser["version"] = parseFloat(re && re[1]);
    browser["versionOrig"] = re[1];

    jQuery.extend({browser: browser});
})();

var a = document.createElement('audio');
if(!!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''))){
	var snd = new Audio('gb.mp3');
}
else{
	var snd = new Audio('gb.ogg');
}

snd.addEventListener('ended', function(event) {console.log('Audio finished playing, yes man this was the Game Boy startup chime :P.');}, false);

$(document).ready(function(){
	
	if($.browser.safari || $.browser.chrome){
		document.getElementById('header_text').addEventListener('webkitTransitionEnd', function(event) {
			snd.play();
		}, false);
	}
	else{
		document.getElementById('header_text').addEventListener('transitionend', function(event) {
			snd.play();
		}, false);
	}
	
	document.getElementById('header_text').className = 'animate';

	$('[data-typer-targets]').typer();
});