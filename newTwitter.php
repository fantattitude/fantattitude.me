<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
    	<title>Vivien Leroy</title>
	</head>
	<body>
		<div id='Twitter'>
		<?php
			/* Here you define your username & number of tweets you want to show */
			/* Remember your account must be UNPROTECTED for this to work */
			$username = 'Fantattitude';
			$howManyTweets = 10;
		
			/* These two variables are for formating */
			$in = array('`((?:https?|ftp)://\\S+)(\\s|\\z)`', '`([[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-_.]?[[:alnum:]])*\.([a-z]{2,4}))`');
			$out = array('<a href="$1">$1</a>$2', '<a href="mailto:$1">$1</a>');
			
			if($twitterapi = file_get_contents('twitter.api'))
			{
				$twitterapi_decoded = ($twitterapi != '')?json_decode($twitterapi, true):array('APITime' => 9999999999,'APIText' => '');
				
				/*echo '<pre>';
				print_r($twitterapi_decoded);
				echo '</pre>';*/
				
				if($twitterapi_decoded['APITime'] + 60 >= time())
					echo $twitterapi_decoded['APIText'];
				else
				{
					$url = 'http://api.twitter.com/1/statuses/user_timeline.xml?id='.$username.'&count='.$howManyTweets;
					if($twitterapi_decoded['APIText'] = @file_get_contents($url))
					{
						$toRegister = '';
						$lastTweets = simplexml_load_string($twitterapi_decoded['APIText']);
						foreach ($lastTweets->xpath('//status') as $tweet)
						{
							$formatURLs = preg_replace($in, $out, $tweet->text);
							$formatUsernames = preg_replace("/@([^ ]*) /", "<a href='http://twitter.com/$1'>@$1</a> ", $formatURLs);
							$resultOfFormating = $formatUsernames;
							
							$toRegister .= '<p>'.$resultOfFormating.'</p><hr />';
							echo '<p>'.nl2br($resultOfFormating).'</p><hr />';
						}
						file_put_contents('twitter.api', json_encode(array('APITime' => time(), 'APIText'=>$toRegister)));
					}
					else
						echo 'Unable to fetch data from Twitter API.';
				}
			}
			else
				echo 'Twitter.api file unreadable, check authorization maybe.';
		?>
	</div>
</html>