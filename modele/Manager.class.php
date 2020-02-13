<?php

class Manager{
    protected $_connexion;

     public function __construct(){
		$this->_connexion =  Connexion::getInstance();
	}	
	
}
