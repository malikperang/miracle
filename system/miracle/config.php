<?php 

/*
 * Miracle Framework
 * "A miracle PHP Framework for Stud!"
 *
 * @file_name 		:	miracle.php
 * @author 			:	Malik Perang
 * @date_write		:	28 November 2013
 * @copyright		:	Copyright (c) Fariz Izwan R&D ,2013
 * @description 	:	Bootstrap class for Miracle Framework
 * 
 */

class Config {

	public static $base_url;
	public static $default_controller;

	function __construct(){
		$cfg_file = APPPATH . 'config/config' . PHP_EXT;
		
		require $cfg_file;
		$this->default_controller = $config['default_controller'];
		return true;
	}

	public function base_url(){
		return $this->base_url;
	}

	public function default_controller(){
		return $this->default_controller;
	}


}		