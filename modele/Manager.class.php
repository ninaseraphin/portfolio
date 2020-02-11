<?php

class Manager{
    protected $_connexion;

     public function __construct(){
		$this->_connexion =  Connexion::getInstance();
	}	
	
	// public  function lister($table){
	// 	$sql = "SELECT* FROM $table";
	// 	$result = $this->connexion->query($sql);
	// 	$liste = $result->fetchAll(PDO::FETCH_ASSOC);
	// 	return $liste;
	// }
	// public  function modifier($table, $id){
	// 	return "ok modification";
	// }	
	// public  function supprimer($table, $id){
	// 	$sql = "DELETE FROM $table WHERE id=$id";
    //     $result = $this->connexion->exec($sql);
      
	// 	return (bool)$result;
	// }	
	// public  function inserer($table, $data){
	// 	return "ok inserer";
	// }
}
