<?php
/**
 * This is a small MVC PHP framework used just to add some organization to small projects it handles
 * URI segments addresses and implements the MVC object oriented pattern, capable of manage
 * multiple controllers, models and views with a clear file organization
 *
 *@author 		Mangtomas Ungasis <private.usr9@gmail.com>
 *@copyright	Copyright 2012(c) Mangtomas Ungasis
 */
/*
*Error reporting
*/
error_reporting(E_ERROR | E_WARNING | E_PARSE);

/*
* Application path  - Directory for your controllers, models, views, helpers etc.
*
*/
$application_path = 'application';


/*
* System path - The core of MVC framework that runs your application
*
*/
$system_path = 'system';


//Constant define
define('DS', DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('CORE', $system_path.DS.'core'.DS);
define('APPS', $application_path.DS);
define('EXT','.php');
define('VIEWS',$application_path.DS.'views'.DS);
define('SYSHELPER',$system_path.DS.'helpers'.DS);
define('LIBS', $application_path.DS.'libraries'.DS);

//Start the application by the loading of core system
require_once CORE.'core'.EXT;


