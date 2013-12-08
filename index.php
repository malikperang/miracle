<?php

//application folder
$app_folder = 'app';
//system folder access
$system_folder = 'system';


//define base system folder
define('SYS_PATH', $system_folder . '/');

//echo 'System folder is: ' . BASE_PATH . '<br />';
//define application system folder

define('APPPATH', $app_folder . '/');

//echo 'Application folder is: ' . APPPATH . '<br />';

//define global extension
define('PHP_EXT','.php');

//Load Miracle bootstrap file
require_once 'system/miracle/miracle' . PHP_EXT;

$miracle = new Miracle();