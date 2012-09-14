<?php

class Route{
	protected $_controller;
	protected $_method;
	protected $_args;
	
	public function __construct(){
		global $config;
		$curl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$base_url = $config['base_url'];// 'http://localhost/mvc/';
		$url = str_replace($base_url,'',$curl);

		$x = explode('/',$url);

		if($x[0] ==''){
			$y[0] = $config['default_controller'];//'main';//strtolower($this->conf['default_controller']);
			$y[1] = 'index';
			$y[2] = array();
		}elseif(!isset($x[1]) || $x[1]== ''){
			$y[0] = $x[0];
			$y[1] = 'index';
			$y[2] = array();
		}else{
			for($i = 0;$i < 2; $i++){
				$y[$i] = $x[$i];
			}
				if(isset($x[2])){
					//$y[2] = $x[2];//get id value
					$ctr = 0; //initialize
					$par = array();
					foreach($x as $z){
						if($ctr < 2){
							$ctr++;
							continue;
						}
					array_push($par,$z);
					}
					$y[2] = $par;
				}
				
			
		}
                                
		$this->_controller = $y[0];
		$this->_method = $y[1];
		if(!empty($y[2])){
			$this->_args = $y[2];
		}
		

	}
	
	public function getController(){
		return $this->_controller;
	}

	public function getMethod(){
		return $this->_method;
	}

	public function getArgs(){
		return $this->_args;
	}
}