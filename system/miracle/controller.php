<?php

/*
 * Miracle Framework
 * "A Beginner PHP Framework for stud!"
 *
 * @file_name 		:	controller.php
 * @author 			:	Malik Perang
 * @last_modified	:	28 November 2013
 * @copyright		:	Copyright (c) Fariz Izwan R&D ,2013
 * @description 	:	Bootstrap class for Miracle Framework
 * 
 */

class Controller {

	function __construct(){
		require 'loader.php';
		$this->load = new Loader();
	
	}


}