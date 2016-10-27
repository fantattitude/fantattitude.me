var pfx = ["webkit", "moz", "MS", "o", ""];

function PrefixedEvent(element, type, callback) {
    for (var p = 0; p < pfx.length; p++) {
        if (!pfx[p]) type = type.toLowerCase();
        element.addEventListener(pfx[p]+type, callback, false);
    }
}

function hasClass(el, cls) {
    return el.className.indexOf(cls) != -1;
}

var a = document.createElement('audio');
if (!!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''))) {
	var snd = new Audio('/resources/gb.mp3');
} else {
    var snd = new Audio('/resources/gb.ogg');
}

snd.addEventListener('ended', function(event) {
    console.log('Audio finished playing and yes this was the Game Boy startup chime :P.');
}, false);

document.addEventListener("DOMContentLoaded", function() {
    if (hasClass(document.getElementById('header'), 'shouldAnimate')) {
        PrefixedEvent(document.getElementById('header'), 'TransitionEnd', function(event) {
            snd.play();
        });
        
        document.getElementById('header').className = 'animate';
    }
});
