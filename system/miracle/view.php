<?php

class View{

	function __construct(){

		echo " <br />PARENT view class load ";

	}

	public function view($name){

		require APPPATH . 'view/' . $name . PHP_EXT;

	}
}