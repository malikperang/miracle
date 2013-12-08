<?php

 class Uri {

 	function __construct(){

 		echo "uri class load <br />";
 	

 	}
 	function url()
 	{
 		$url = isset($_GET['url']) ? $_GET['url'] : null;
 		$url = rtrim($url,'/');
 		//explode to array
		$url = explode('/', $url);
		return $url;
 	}
 }