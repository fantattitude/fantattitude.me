function hasClass(el, cls) {
	return el.className.indexOf(cls) != -1;
}

var a = document.createElement('audio');
if (!!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''))) {
	var snd = new Audio('/resources/gba-startup.mp3');
} else {
	var snd = new Audio('/resources/gba-startup.ogg');
}

snd.addEventListener('ended', function(event) {
	console.log('Audio finished playing and yes this was the Game Boy startup chime :P.');
}, false);

function animate() {
	const letters = document.querySelectorAll('#gameboy .letter');
	const duration = 1000;
	const colors = [
		'#FFFFFF',
		'#F7335E',
		'#F85500',
		'#E9F300',
		'#86DD00',
		'#29F334',
		'#23FFB0',
		'#FFFFFF',
	];
	function animateColor(el, duration, delay) {
		const colorDuration = duration / (colors.length - 1);
		colors.forEach((color, i) => {
			if (i === 0) {
				dynamics.css(el, {
					fill: color,
				});
				return;
			}
			dynamics.animate(el, {
				fill: color,
			}, {
				type: dynamics.linear,
				delay: delay + (i - 1) * colorDuration,
				duration: colorDuration,
			});
		})
	}
	letters.forEach((letter, i) => {
		const svg = letter.querySelector('svg');
		const inside = letter.querySelector('.inside');
		const path = letter.querySelector('path, polygon');
		const mid = (letters.length - 1) / 2;
		const fromCenter = (i - mid) / mid;
		const delay = i * 60;

		dynamics.stop([letter, svg, inside, path]);

		dynamics.css(letter, {
			scale: 4,
			translateY: -70,
			opacity: 0,
		});
		dynamics.setTimeout(() => {
			dynamics.css(letter, {
				opacity: 1,
			});
		}, delay)
		dynamics.css(inside, {
			translateX: -fromCenter * 77,
		});
		animateColor(path, duration * 1.1, delay);
		dynamics.css(svg, {
			translateY: 80,
		});
		dynamics.animate(letter, {
			scale: 1,
		}, {
			type: dynamics.easeOut,
			friction: 150,
			delay,
			duration,
		});
		dynamics.animate(inside, {
			translateX: 0,
		}, {
			type: dynamics.bezier,
			points: [{"x":0,"y":0,"cp":[{"x":0.127,"y":0.007}]},{"x":0.266,"y":-0.247,"cp":[{"x":0.139,"y":-0.247},{"x":0.503,"y":-0.256}]},{"x":1,"y":1,"cp":[{"x":0.702,"y":0.997}]}],
			delay,
			duration,
		});
		dynamics.animate(svg, {
			translateY: 0,
		}, {
			type: dynamics.bezier,
			points: [{"x":0,"y":0,"cp":[{"x":0.1,"y":0}]},{"x":0.607,"y":1.356,"cp":[{"x":0.315,"y":1.373},{"x":0.812,"y":1.356}]},{"x":1,"y":1,"cp":[{"x":0.812,"y":1.016}]}],
			delay,
			duration: duration * 0.8,
		});
		dynamics.animate(svg, {
			translateY: -25,
		}, {
			type: dynamics.forceWithGravity,
			bounciness: 350,
			delay: delay + duration * 0.8,
			duration: duration * 0.6,
		});
	});
};

snd.addEventListener('playing', function(event) {
	animate();
}, false);

if (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
	document.addEventListener('DOMContentLoaded', function() {
		animate();
	}, false);
}

snd.play();