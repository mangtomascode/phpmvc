<?php
class Db extends PDO{
    public $conn = false;
    private $id = false;

    public function __construct(){
        global $config;
      
		$dsn = "{$config['database_type']}:host={$config['host']};dbname={$config['database_name']}";
		parent::__construct($dsn, $config['username'],$config['password']);
        
		try{
            PDO::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            die($e->getMessage());
        }
		
    }

    public function where($condition = array(),$lgc = false){
            foreach ($condition as $key => $value) {
                # code...

                    if(!is_numeric($value)){
                        $value = "'".$value."'";
                    }
                $v[] = $key.'='. $value;
            }
            if(count($condition)!=1 && $lgc == false){
                $lgc = ' AND ';
            }
            $lgc = ($lgc == false) ? null : $lgc;
            $where = implode($lgc , $v);
           return $where;

    }
   
}