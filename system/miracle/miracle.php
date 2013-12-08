<?php

/*
 * Miracle Framework
 * "A Beginner PHP Framework for stud!"
 *
 * @file_name 		:	miracle.php
 * @author 			:	Malik Perang
 * @last_modified	:	1 December 2013
 * @copyright		:	Copyright (c) Fariz Izwan R&D ,2013
 * @description 	:	Bootstrap class for Miracle Framework
 * 
 */
class Miracle {

	function __construct()
	{
	

		/*
		 *------------------------------
		 *load Uri class
		 *------------------------------
		 */	
			require 'uri' . PHP_EXT;

			$this->uri = new Uri();

			//set url function to variable
			//url come in array like this : Array ( [0] => controller [1] => method ) 
			$url = $this->uri->url();

			//test url array!
			print_r($url);

		/*
		 *------------------------------
		 *load Config file
		 *------------------------------
		 */
	
		

		/*
		 *------------------------------
		 *load Config class
		 *------------------------------
		 */	
		 	require SYS_PATH . 'miracle/config' . PHP_EXT;

		 	$config = new Config();

		/*
		 *------------------------------
		 *Load Parent Controller class
		 *------------------------------
		 */	
		
			require 'controller.php';
	
			//$controller = new Controller();
		/*
		 *------------------------------
		 *load Default Controller file
		 *------------------------------
		 */	
		
			if (empty($url[0])) {
				$def_con = $config->default_controller();
				if (!empty($def_con)) {
				$def_con = explode('/', $def_con);
				print_r($def_con);
				$controller_file = APPPATH . 'controller/' . $def_con[0] . PHP_EXT;

				if (file_exists($controller_file)) {
					require $controller_file;
				}
				else {
					echo "no controller file";
					return false;
				}

				$controller = new $def_con[0];

				if (isset($def_con[1])) {
					$controllerHasMethod = method_exists($controller, $def_con[1]);
					if($controllerHasMethod)
						{
							$controller->{$def_con[1]}();
						}
						else{
							echo "<br /> No method were defined! <br />";
							return false;
						}
					
					}
				}
			else {
				echo "No default controller were set";
				return true;
			}
		}


		/*
		 *------------------------------
		 *load Controller file
		 *------------------------------
		 */	
			
			if (isset($url[0])) {
				$controller_file 	= APPPATH . 'controller/' .  $url[0] . PHP_EXT;

			//load default controller if it's not has been set yet
			if (file_exists($controller_file)) {
				require $controller_file;
			}else{
				echo 'no such controller file';
				return false;
			}
			}
			


			$controller = new $url[0];

			if (isset($url[1])){
 				 $methodName = $url[1];
  				 $controllerHasMethod = method_exists($controller, $methodName);

  				if ($controllerHasMethod){
    				$methodArgs = (isset($url[2]) ? $url[2] : false);
    				$controller->{$methodName}($methodArgs);
   					}
   					else {
   						echo "E!";
   					}

				}
	

}	

}
	

/*
 *---------------------------------------
 *End of miracle.php file
 *Location : ./system/libs/miracle.php
 *---------------------------------------
 */	
