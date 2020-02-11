<?php

class Connexion{
    protected static $connect;

     public function __construct(){
		 $host_name = 'localhost'; //'db5000290828.hosting-data.io'
		 $database = 'dbs284114'; //'dbs284114'
		 $user_name = 'root'; //'dbu503856'
		 $password = ''; //'4-Tartines25675'
		 self::$connect = mysqli_connect($host_name, $user_name, $password, $database);
		 self::$connect->set_charset("utf8");
		 if (mysqli_connect_errno()) {
			die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
		  } else {
			// echo '<p>Connection to MySQL server successfully established.</p >';
		  }
    }
	
	public static function getInstance(){
		if(self::$connect==null){
			//echo "nouvelle connexion";
			new Connexion();
			return self::$connect;
		}else{
			return self::$connect;
			
		}
		
		
	}

}

//$connexion = Connexion::getInstance();
