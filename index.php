<?php
	include('php/oth_quotes.php');
	include('php/emojis.php');
	include('php/checkAIM.php');
	include('php/nav.php');
?>
<!DOCTYPE html>
<?php
	// Google Latitude
	
	$fail = 0;
	
	$info = @file_get_contents("http://www.google.com/latitude/apps/badge/api?user=2761579630260582519&type=json");
	//www.google.com/latitude/apps/badge/api?user=2761579630260582519&type=json
	if($info == '')
		$fail = 1;
	
	$infoJSON = json_decode($info,1);
	
	if($infoJSON == null)
		$fail = 1;
	
	$coordinatesOfVivien = $infoJSON['features'][0]['geometry']['coordinates'];
	
	$timestamp=substr($info,strpos($info,"timeStamp")+strlen("timestamp")+1);
	$timestamp=substr($timestamp,strpos($timestamp," ")+1);
	$timestamp=substr($timestamp,0,strpos($timestamp,","));
	
	$info=substr($info,strpos($info,"reverseGeocode")+strlen("reverseGeocode")+1);
	$info=substr($info,strpos($info,"\"")+1);
	$info=substr($info,0,strpos($info,"\""));
	
	function plural($num) {
		if ($num != 1)
			return "s";
	}
	
	//echo time();
	//echo '<br /><!-- FUCK --><br />';
	//echo $timestamp;
	
	function getRelativeTime($date) {
		$diff = time() - $date+459;
		if ($diff<60)
			return $diff . " second" . plural($diff) . " ago";
		$diff = round($diff/60);
		if ($diff<60)
			return $diff . " minute" . plural($diff) . " ago";
		$diff = round($diff/60);
		if ($diff<24)
			return $diff . " hour" . plural($diff) . " ago";
		$diff = round($diff/24);
		if ($diff<7)
			return $diff . " day" . plural($diff) . " ago";
		$diff = round($diff/7);
		if ($diff<4)
			return $diff . " week" . plural($diff) . " ago";
		return "on " . date("F j, Y", strtotime($date));
	}
	
	/*
	
	http://maps.google.fr/?q=Vivien+is+here echo $coordinatesOfVivien[1].','.$coordinatesOfVivien[0] ?>&ie=UTF8&z=12&t=p
	
	*/
	
	$fantaStatus = new checkAIM('fantattitude@mac.com');
	$fantaStatus = $fantaStatus->isOnline();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<!-- I add to put my comments after this because of HTML5 specification requiring this to be in the first 512 Bytes of the file :/ -->
		<!--
		
		USE LAST WEBKIT VERSION FOR MAXIMUM AWESOME OF CSS3 SHADOWS ETC&hellip; :D
		
		   /\___/\
		  /       \
		 |  #    # |
		 \     @   |
		  \   _|_ /
		  /       \______
		 / _______ ___   \
		 |_____   \   \__/
		  |    \__/
		  |       |
		  |       |
		  |       |
		  | LONG  |
		  | CAT   |
		  | ...   |
		  | ...   |
		  | IS    |
		  | LONG  |
		  /        \
		 /   ____   \
		 |  /    \  |
		 | |      | |
		/  |      |  \
		\__/      \__/
		-->
		<?php
			$quoteIndex = rand(0, count($oth_quotes)-1);
			echo "<!--\n\tVivien Leroy. 2009. Ce site est valide HTML5 trop fort, j'suis en avance sur mon temps...\n\n\t\"".$oth_quotes[$quoteIndex]."\"\n\t".$oth_authors[$quoteIndex]."\n\t-->\n";
		?>
		
    	<title>Vivien Leroy</title>

		<meta name="description" content="Vivien Leroy's (A.K.A. Fantattitude) website, here you can learn more about him and his works." />
		<meta name="keywords" content="Vivien Leroy, Fantattitude, French, Cocoa, Developer, Web, Designer, Mac, Apple, iPhone" />
		<meta name="author" content="Vivien Leroy" />
    	<!-- Favicon -->
		<link rel="icon" href="images/favicon.png" type="image/png" />
		
		<!-- Javascript -->
		<script src="/mint/?js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.ui.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.js"></script>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<?php 
		switch ($nav)
		{
			case 'safari':
				echo '<style>#theBadHider{display: none;}</style>';
				break;
			case 'chrome':
				echo '<link rel="stylesheet" type="text/css" href="css/chrome.css" />';
				echo '<style>#theBadHider{display: none;}</style>';
				break;
			case 'firefox':
				echo '<link rel="stylesheet" type="text/css" href="css/chrome.css" />';
				echo '<style>#theBadHider{display: none;}</style>';
				break;
			case 'win':
				switch ($nav2)
				{
					case 'safari':
						echo '<style>#theBadHider{display: none;}</style>';
						break;
					case 'chrome':
						echo '<link rel="stylesheet" type="text/css" href="css/chrome.css" />';
						echo '<style>#theBadHider{display: none;}</style>';
						break;
					case 'firefox':
						echo '<link rel="stylesheet" type="text/css" href="css/chrome.css" />';
						echo '<style>#theBadHider{display: none;}</style>';
						break;
					default:
						echo '<link rel="stylesheet" type="text/css" href="css/chrome.css" />';
						break;
				}
				break;	
			default:
				echo '<link rel="stylesheet" type="text/css" href="css/chrome.css" />';
				break;
		}
		
		?>
		
	</head>
	
	<body>
	<div id='theBadHider'><p>Hi there crappy browser user. I notice you are using a really not nice browser, you know Gecko, Trident &amp; Opera's engines are such crap I can't allow them to see my site.<br />Well you're right I just DON'T achieve to have a good look of my site on those browsers so I just say them they are crap and say them GO AWAY.<br /><br />By the way feel free to update your hideous browser with a WebKit one because IT'S the future don't hesitate and install Apple Safari&trade; or Google Chrome&trade;&hellip;</p></div>
	<div id='theNiceHider'><p>Hi mate, I notice you're using some browser that not render the full elegance of my site. Maybe you should consider try my website in a Webkit (In the best case Safari) to enjoy the maximum awesome.</p></div>
		<header>
			<div id="flip-container">
				<div id="flip-card">
					<div id='Fantattitude' class='front face title <?php echo ($fantaStatus)?'online':'offline'; ?>'>Fantattitude</div>
					<div id='backwiththetoiletpaper' class="back face">
						<div id="lastfm">
							<p class='box-title lastfm'><a href="http://lastfm.com/user/V-LINK">LastFM :</a></p>
							<div id='innerLastFM'>
								<?php
									$url = "http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=V-LINK&limit=10&api_key=b63a11138bc8c689216b2f48f3ff7255";
									if($lastFMTracks = @file_get_contents($url))
									{
										$lastFMXML = simplexml_load_string($lastFMTracks);
										foreach ($lastFMXML->xpath('//track') as $object)
										{
											$isPlaying = ($object->attributes()->nowplaying == 'true')?'<img src=\'images/playing.gif\' alt=\'Now playing icon\' /><em>':'';
											$isPlaying2 = ($object->attributes()->nowplaying == 'true')? '</em>':'';
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
						<div id="twitter">
							<p class='box-title twitter'><a href="http://twitter.com/Fantattitude">Twitter :</a></p>
								<div id='innerTwitter'>
								<?php
									$in = array(
										'`((?:https?|ftp)://\\S+)(\\s|\\z)`',
										'`([[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-_.]?[[:alnum:]])*\.([a-z]{2,4}))`'
									);
										
									$out = array(
										'<a href="$1">$1</a>$2', 
										'<a href="mailto:$1">$1</a>'
									);
								
									$lastRequest = file_get_contents('twitter.api.txt');
									
									if($lastRequest + 60 >= time())
									{
										echo file_get_contents('twitter.cache.txt');
										
									}
									else
									{
										$url = 'http://twitter.com/statuses/user_timeline/Fantattitude.xml?count=5';
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
											file_put_contents('twitter.cache.txt', $toRegister);
											file_put_contents('twitter.api.txt', time());
										}
										else
										{
											echo 'Impossible de r&eacute;cuperer les donn&eacute;es depuis Twitter.';
										}
									}
								?>
							</div>
						</div>
						<div id="closebox"></div>
						
						<div id="backwrapper">
							<div id='scrollWrap'>
								<div id="back-left">
									<div class='divMagic'>
									<p class='box-title'>Me :</p>
									<div id="me">
										<div id="cycleWrapper">
											<div id="cycleOverlay"></div>
											<div id="cycleImages">
												<img src="images/me/vivien1.png" alt='Photo of Vivien 1' />
												<img src="images/me/vivien2.png" alt='Photo of Vivien 2' />
												<img src="images/me/vivien3.png" alt='Photo of Vivien 3' />
											</div>
										</div>
										<div id="presentation">
											<p>Hi there, welcome to my website !<br />
											My name is <em>Vivien Leroy</em> and I'm young 
											(<?php
												date_default_timezone_set('Europe/Paris');
												
												$birth = mktime(5, 00, 00, 9, 21, 1989);
												$today = time();
												$minus = $today - $birth;
												echo floor($minus/60/60/24/365);
											?> years old)
											<em class="french1">fr</em><em class="french2">en</em><em class="french3">ch</em> <em>(web)developer</em> &amp; <em>(web)designer</em>.<br /><br />
											I am also an <em>entrepreneur</em> &amp; <em>father</em> of a little 
											<?php
											 	$birth2 = mktime(00, 00, 00, 9, 14, 2007);
												$today2 = time();
												$minus2 = $today2 - $birth2;
												if(floor($minus2/60/60/24/365) < 2)
													echo floor($minus2/60/60/24/31).' months old';
												else
													echo floor($minus2/60/60/24/365).' years old';
											?> girl.</p>
										</div>
									</div>
									</div>
								</div><div id="back-center">
									<div class='divMagic'>
									<p class='box-title'>Vivien was last seen here :</p>
									<div id="map">
										<div><a href="http://maps.google.fr/?q=Vivien+is+here@<?php echo $coordinatesOfVivien[1].','.$coordinatesOfVivien[0] ?>&amp;ie=UTF8&amp;z=14&amp;t=p"><img style="background-image: url('<?php
											if(!$fail)
												echo 'http://maps.google.com/maps/api/staticmap?center='.$coordinatesOfVivien[1].','.$coordinatesOfVivien[0].'&amp;zoom=12&amp;size=180x180&amp;maptype=terrain&amp;markers=icon:http://fantattitude.me/images/pushpin.png|'.$coordinatesOfVivien[1].','.$coordinatesOfVivien[0].'&amp;sensor=false';
											else
												echo 'images/staticmap.png';
											?>');" src='images/map.png' alt='Google Latitude position of Vivien' /></a></div>
										<?php
											if(!$fail)
												echo '<p class="pixelated">'.getRelativeTime($timestamp).'</p>';
										?>
									</div></div>
								</div><div id="back-right">
										<div class='divMagic'>
											<p class='box-title'>Contact Infos :</p>
											<div id="contact">
												<div>
													<p><img src="images/<?php echo ($fantaStatus)?'online':'offline'; ?>.png" alt='Status AIM' /><a id='contact-ichat' <?php echo ($fantaStatus)?'class="online slideLink"':'class="offline slideLink"'; ?> href="aim:goim?screenname=fantattitude@mac.com&amp;message=Hiiii!!">iChat</a></p>
													<hr />
													<p><a class="slideLink" id='contact-mail' href="mailto:me@fantattitude.me">Mail</a></p>
													<hr />
													<p><a class="slideLink" id='contact-facebook'  target="_blank" href="http://facebook.com/Fantattitude">Facebook</a></p>
													<hr />
													<p><a class="slideLink" id='contact-flickr' target="_blank" href="http://flickr.com/people/Fantattitude">Flick<em>r</em></a></p>
													<hr />
													<p><a class="slideLink" id='contact-lastfm' target="_blank" href="http://lastfm.com/user/V-LINK">Last.fm</a></p>
													<hr />
													<p><a class="slideLink" id='contact-twitter' target="_blank" href="http://twitter.com/Fantattitude">Twitter</a></p>
												</div>
											</div>
										</div>
								</div><div id='back-portfolio'>
									<div class='divMagicRe'>
										<p class='box-title'>Vivien's creations :</p>
										<div id="portfolioDiv">
											<div id='portfolioScrollWrap'><!--
											--><a href='http://fnta.me/' target='_blank'><img src='images/folio/fnta.png' /><br />Fnta.me Hosting</a><!--
												--><a href='http://gi-lo.de/' target='_blank'><img src='images/folio/gilo.png' /><br />Guilio Petek's Website</a><!--
												--><a href='http://christianbaroni.me/' target='_blank'><img src='images/folio/chris.png' /><br />Christian Baroni's Website</a><!--
												--><a href='http://colton.wantsrobots.com/' target='_blank'><img src='images/folio/colton.png' /><br />Colton Rabon's Website</a><!--
												--><a href='http://2009.fantattitude.me/' target='_blank'><img src='images/folio/2009fnta.png' /><br />My old Site</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id='portfolioNav'>
							<a rel='1' class="current" href='javascript:;'>&bull;</a>
							<a rel='2' href='javascript:;'>&bull;</a>
							</div>
						<a id='goRight' href="javascript:;"></a>
						<a id='goLeft' href="javascript:;"></a>
					</div>
				</div>
			</div>
		</header>
		
		<?php 
		switch ($nav)
		{
			case 'safari':
				echo '<script type="text/javascript" src="js/homepage.js"></script>';
				break;
			case 'chrome':
				echo '<script type="text/javascript" src="js/chrome.js"></script>';
				break;
			case 'firefox':
				echo '<script type="text/javascript" src="js/chrome.js"></script>';
				break;
			case 'win':
				echo '<script type="text/javascript" src="js/chrome.js"></script>';
				break;
			default:
				echo '<script type="text/javascript" src="js/chrome.js"></script>';
				break;
		}
		?>
		<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
		<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10518543-1");
pageTracker._trackPageview();
} catch(err) {}</script>
	</body>
	
</html>