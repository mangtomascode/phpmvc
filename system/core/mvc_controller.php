<?php
/*
* Basecontroller file for the MVC framework
*
*/
session_start();
if(!defined('APPS')) exit ('No direct access allowed');
class MVC_controller{
	protected static $instance;
	public $load;
                    public $session;
	public function __construct(){
		self::$instance =& $this;
		$this->load = new Loader;
        $this->session = new session;
	}

	public static function &getInstance(){
		return self::$instance;
	}
}