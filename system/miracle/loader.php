<?php

class Loader
{

	function __construct()
	{
		echo 'Loader class load';
	}

	public function view($name)
	{
		if (file_exists($view = APPPATH . 'view/' . $name . PHP_EXT)) {
			require $view;
		}
		else{
			echo 'View file is not exists';
		}
		
		return false;

	}

	public function model($name)
	{
		if (file_exists($view = APPPATH . 'model/' . $name . PHP_EXT)) {
			require $view;
		}
		else{
			echo 'Model file is not exists';
		}

		return false;
	}

	public function database($name)
	{
		require 'database' . PHP_EXT;
	}

}