<?php
/**
 * Class Connexion
 *  
 * @author Nina Seraphin
 * @version 1.0
 * 
 * 
 * 
 */
class Connexion{
    protected static $connect;

     public function __construct(){
		 $host_name = 'db5000290828.hosting-data.io'; 
		 $database =  'dbs284114';
		 $user_name =  'dbu503856';
		 $password = '4-Tartines25675'; 
		 self::$connect = mysqli_connect($host_name, $user_name, $password, $database);
		 self::$connect->set_charset("utf8");
		 if (mysqli_connect_errno()) {
			die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
		  }
    }
	/**
	 * Retourne une connexion a la base de données 
	 * @access public
	 * 
	 */
	public static function getInstance(){
		if(self::$connect==null){
			new Connexion();
			return self::$connect;
		}else{
			return self::$connect;
			
		}
		
		
	}

}
