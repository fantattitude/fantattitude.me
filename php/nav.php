<?php

$agent = strtolower($_SERVER['HTTP_USER_AGENT']);

if(substr_count($agent, 'windows'))
	$nav = 'win';
else if(substr_count($agent,'chrome'))
	$nav = 'chrome';
else if(substr_count($agent,'safari'))
	$nav = 'safari';
else if(substr_count($agent,'firefox'))
	$nav = 'firefox';
else if(substr_count($agent, 'minefield'))
	$nav = 'firefox';
else if(substr_count($agent,'opera'))
	$nav = 'opera';
else if(substr_count($agent,'ie'))
	$nav = 'IE';
else
	$nav = 'firefox';
	
	
if(substr_count($agent,'chrome'))
	$nav2 = 'chrome';
else if(substr_count($agent,'safari'))
	$nav2 = 'safari';
	
?>