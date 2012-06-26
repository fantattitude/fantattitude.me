<?php
	include('ressources/php/emojis.php');
	include('ressources/php/checkAIM.php');
	include('ressources/php/latitude.php');
	$fantaStatus = new checkAIM('fantattitude@me.com');
	$fantaStatus = $fantaStatus->isOnline();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		if($_GET['variation'] != 1){?>
	<!-- Google Website Optimizer Control Script -->
	<script>
	function utmx_section(){}function utmx(){}
	(function(){var k='2049003810',d=document,l=d.location,c=d.cookie;function f(n){
	if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.indexOf(';',i);return escape(c.substring(i+n.
	length+1,j<0?c.length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;
	d.write('<sc'+'ript src="'+
	'http'+(l.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com'
	+'/siteopt.js?v=1&utmxkey='+k+'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='
	+new Date().valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
	'" type="text/javascript" charset="utf-8"></sc'+'ript>')})();
	</script><script>utmx("url",'A/B');</script>
	<!-- End of Google Website Optimizer Control Script -->
	<!-- Google Website Optimizer Tracking Script -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['gwo._setAccount', 'UA-25140503-3']);
	  _gaq.push(['gwo._trackPageview', '/2049003810/test']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- End of Google Website Optimizer Tracking Script -->
	<?php } else { ?>
	<!-- Google Website Optimizer Tracking Script -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['gwo._setAccount', 'UA-25140503-3']);
	  _gaq.push(['gwo._trackPageview', '/2049003810/test']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- End of Google Website Optimizer Tracking Script -->
	
	<?php } ?>
		<meta charset="UTF-8" />
		<meta name="google-site-verification" content="XXCumqKxxWp7uXo_BSe7ZMRC8wdPFnI0OPKQ65JNiQw" />
		<link rel="icon" type="image/png" href="ressources/images/favicon.png" />
		<title>Vivien Leroy | Website</title>
		<!-- Javascript -->
		<script type="text/javascript" src="ressources/jquery.js"></script>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="ressources/css.css" />
	</head>
	<body>
		<div id='card_container'>
			<div id='first_card'>
				<a id='iPhone' href="http://homescreen.me/fantattitude"  target="_blank"></a>
				<header><p id='vivien_leroy' class="bigFont"><?php if($_GET['variation'] != 1){?>Vivien Leroy<?php }else{ ?>SUSU<?php } ?></p><p id='im_developer' class="bigFont">Mac, iPhone, Web developer &amp; designer</p></header>
				<div id='hover_card'>My Dribbble</div>
				<div id='socials'>
					<a id='Twitter' target="_blank" href="http://twitter.com/fantattitude"><img src="ressources/images/twitter.png" /></a>
					<a id='Facebook' target="_blank" href="http://facebook.com/fantattitude"><img src="ressources/images/facebook.png" /></a>
					<a id='Dribbble' target="_blank" href="http://dribbble.com/players/fantattitude"><img src="ressources/images/dribbble.png" /></a>
					<a id='Forrst' target="_blank" href="http://forrst.com/people/fantattitude"><img src="ressources/images/forrst.png" /></a>
					<a id='Flickr' target="_blank" href="http://flickr.com/photos/fantattitude"><img src="ressources/images/flickr.png" /></a>
					
				</div>
				<a class="clicky" href="#"></a>
			</div>
			<div id='second_card'>
				<div id='boxDesc'><p>Hi, my name is <strong>Vivien Leroy</strong>.<br /><br />I'm a <strong><?php
					date_default_timezone_set('Europe/Paris');
					
					$birth = mktime(5, 00, 00, 9, 21, 1989);
					$today = time();
					$minus = $today - $birth;
					echo floor($minus/60/60/24/365);
				?></strong> years old Mac, iPhone &amp; Web developer &amp; designer, working as freelance in France.<br />I'm also a student in <strong>Supinfo</strong>, an IT College. I got lot of skills such as Mac programming (<strong>Cocoa</strong>), Windows programming (.Net), Web programming (PHP, JS).<br /><br />The <strong>MOST</strong> important fact about me is that I am the father of a <?php
				 	$birth2 = mktime(00, 00, 00, 9, 14, 2007);
					$today2 = time();
					$minus2 = $today2 - $birth2;
					if(floor($minus2/60/60/24/365) < 2)
						echo floor($minus2/60/60/24/31).' months old';
					else
						echo floor($minus2/60/60/24/365).' years old';
				?> girl.<br /><br />I'm an entrepreneur and behind <strong>Pixel Soda</strong>, I also work as a <strong>teacher</strong> at Supinfo for all things Apple.<br /><br />You can contact me here : <strong><a href="mailto:me@fantattitude.me">me@fantattitude.me</a></strong><br />Want to chat a bit ? Here you go : <strong><a id='contactIchat' <?php echo ($fantaStatus)?'class="online"':'class="offline"'; ?> href="aim:goim?screenname=fantattitude@mac.com&amp;message=Hiiii!!">iChat <img src="ressources/images/<?php echo ($fantaStatus)?'online':'offline'; ?>.png" alt='Status AIM' /></a></strong><br /><br />See ya !</p>
				</div>
				<div id='boxTwitt'>
					<p id="titleTwitt">Follow me on <a target="_blank" href="http://twitter.com/fantattitude">@fantattitude</a></p>
					<div id='contentTwitt'>
					<?php
						$in = array(
							'`((?:https?|ftp)://\\S+)(\\s|\\z)`',
							'`([[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-_.]?[[:alnum:]])*\.([a-z]{2,4}))`'
						);
							
						$out = array(
							'<a href="$1">$1</a>$2', 
							'<a href="mailto:$1">$1</a>'
						);
					
						$lastRequest = file_get_contents('ressources/php/twitter.api.txt');
						
						if($lastRequest + 60 >= time())
						{
							echo file_get_contents('ressources/php/twitter.cache.txt');
							
						}
						else
						{
							$url = 'http://twitter.com/statuses/user_timeline/Fantattitude.xml?count=10';
							if($lastTweets = @file_get_contents($url))
							{
								$toRegister = '';
								$lastTweetsXML = simplexml_load_string($lastTweets);
								$first = 1;
								foreach ($lastTweetsXML->xpath('//status') as $object)
								{
									$result1 = preg_replace($in, $out, $object->text);
									$result2 = preg_replace("/@([^ ]*) /", "<a href='http://twitter.com/$1'>@$1</a> ", $result1);
									
									$result3 = emoji2Tag($result2);
									if($first)
									{
										$toRegister .= '<p><strong>'.$result3.'</strong></p><hr />';
										echo '<p><strong>'.nl2br($result3).'</strong></p><hr />';
										$first = 0;
									}
									else
									{
										$toRegister .= '<p>'.$result3.'</p><hr />';
										echo '<p>'.nl2br($result3).'</p><hr />';
									}
								}
								file_put_contents('ressources/php/twitter.cache.txt', $toRegister);
								file_put_contents('ressources/php/twitter.api.txt', time());
							}
							else
							{
								echo 'Impossible de r&eacute;cuperer les donn&eacute;es depuis Twitter.';
							}
						}
					?>
					</div>
				</div>
				<div id='boxLastFM'>
					<p id="titleTwitt"><a target="_blank" style="position: relative; top:-10px;display:block; height: 45px; width: 160px;" href="http://lastfm.com/user/fantattitude"></a></p>
					<div id='contentLastFM'>
						<?php
							$url = "http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Fantattitude&limit=10&api_key=9bc3ddc75eb9700f9f0434a1f9d30e97";
							if($lastFMTracks = @file_get_contents($url))
							{
								$lastFMXML = simplexml_load_string($lastFMTracks);
								foreach ($lastFMXML->xpath('//track') as $object)
								{
									$isPlaying = ($object->attributes()->nowplaying == 'true')?'<p><strong><em>':'<p>';
									$isPlaying2 = ($object->attributes()->nowplaying == 'true')? '</em></strong></p>':'</p>';
									echo $isPlaying.' '.htmlspecialchars($object->artist).' - '.htmlspecialchars($object->name).$isPlaying2.'<hr />';
								}
							}
							else
							{
								echo 'Impossible de r&eacute;cuperer les donn&eacute;es depuis Last.FM.';
							}
						?>
					</div>
				</div>
				<a class="clicky" href="#"></a>
			</div>
			<div id='fourth_card'>
				<a id='position' <?php if(!$fail){?>href="http://maps.google.fr/?q=Vivien+is+here@<?php echo $coordinatesOfVivien[1].','.$coordinatesOfVivien[0] ?>&amp;ie=UTF8&amp;z=14&amp;t=p"<?php }else{?>""<?php } ?>><img src='<?php
				if(!$fail)
					echo 'http://maps.google.com/maps/api/staticmap?center='.$coordinatesOfVivien[1].','.$coordinatesOfVivien[0].'&amp;zoom=12&amp;size=670x430&amp;maptype=terrain&amp;markers=icon:http://fantattitude.me/ressources/images/pushpin.png|'.$coordinatesOfVivien[1].','.$coordinatesOfVivien[0].'&amp;sensor=false';
				else
					echo 'ressources/images/oops.png';
				?>' alt='Google Latitude position of Vivien' /></a>
				<p id='position_label'><?php if(!$fail){?>Vivien's last known position (<?php echo getRelativeTime($timestamp); ?>)<?php }else{echo 'Woops seems Vivien is so well hidden that we can\'t find him now!'; }?></p>
				<a class="clicky" href="#"></a>
			</div>
			<div id='third_card'>
				<div id='slideshow'>
					<img class='showed' src="ressources/images/slideshow/1.jpg" alt='Slideshow element 1' />
					<img src="ressources/images/slideshow/2.jpg" alt='Slideshow element 2' />
					<img src="ressources/images/slideshow/3.jpg" alt='Slideshow element 3' />
					<img src="ressources/images/slideshow/4.jpg" alt='Slideshow element 4' />
				</div>
				<a class="clicky" href="#"></a>
			</div>
		</div>
		<script type="text/javascript" src="ressources/js.js"></script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25140503-2']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</body>
</html>