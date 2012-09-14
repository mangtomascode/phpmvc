<?php
/*
* mvc model file for the MVC framework
*
*/
if(!defined('APPS')) exit ('No direct access allowed');
class MVC_model{
	protected static $instance;
	public function __construct(){	
		self::$instance =& $this;
	}

	public function __get($key){
		$mvc =& getInstance();
		return $mvc->$key;
	}
}

