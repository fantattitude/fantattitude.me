<?php
/*
*	Script to check your online status on AIM.
* 
*	WARNING THIS SCRIPT ONLY WORKS IF YOU HAVE PHP COMPILED WITH cURL.
* 
*	@author Vivien Leroy <me@fantattitude.me>
*	@license Free4All
*/

class checkAIM
{
	var $account;
	var $url;
	var $status;
	
	
	/* Constructeur de classe */
	function checkAIM($account)
	{
		$this->account = $account;
		$this->url = 'big.oscar.aol.com/'.$this->account.'?on_url=true&off_url=false';
	}
	
	/* Fonction qui fetch le status */
	function fetchStatus()
	{
		$ch = curl_init($this->url);
		curl_setopt($ch, CURLOPT_URL,$this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		$content = curl_exec($ch);
		$this->status = preg_match("#true#i",$content);
	}

	/* Fonction wrapper avec nom clair */
	function isOnline()
	{
		$this->fetchStatus();
		return $this->status;
	}
}
?>