<?php

// Google Latitude

$fail = 0;
$info = 
@file_get_contents("http://www.google.com/latitude/apps/badge/api?user=672871057035433824&type=json");
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

?>
