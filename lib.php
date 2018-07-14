<?php



class Session{
	
public function get($key){
	$value = "";
	if(isset($_SESSION[$key]))
		$value = $_SESSION[$key];
		
	return $value;
}	

public function set($key,$value){

	$_SESSION[$key] = $value;
}

}

class DataBase{

private  $instance;

public   $mysql_id;

private function __construct(){

try
{
	$mysql_id = new PDO('mysql:host=localhost;dbname=Vickx-3;charset=utf8', 'Vickx', '0100554');
}
catch(Exception $e){
 echo "error " . $e->getMessage();
}

}

public static function getInstance(){

if($instance == null)
	$instance = new DataBase();
return $instance;	
	
}

public function getQuery(){
   return new Query($mysql_id);
}

	
}

class Query{

	private $mid;
	
	public function __construct($mysql_id){
		$this->mid = $mysql_id;
	}
	
	public function request($sql){
		$result = $mid->request($sql);
		return $result;
	
	}
	
	

}


/*
class DataBase{
	
	var $instance;
	
	private function DataBase(){
	}
	
	public static function getInstance(){
		if($instance == null)
			$instance = new DataBase();
		return $instance;
	}
	
}
*/

?>
