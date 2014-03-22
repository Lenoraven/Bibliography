<?php


class DBConn {

	private static $connection; 
	private function __construct(){}
	
	public static function getConnection(){
	
		if(empty(self::$connection)){

			try {
				self::$connection = new mysqli('localhost','lenoraven', 'koobecaf1', 'biblio');
			} catch (Exception $e) {
				$e->message = "There was a database error.";
				throw $e;
			}	
		} 

	return self::$connection;


	}

}




?>
