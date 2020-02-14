<?php
/**
 * Class Manager
 *  
 * @author Nina Seraphin
 * @version 1.0
 * 
 * 
 * 
 */
class Manager{
	protected $_connexion;
	
     public function __construct(){
		$this->_connexion =  Connexion::getInstance();
	}	
}
