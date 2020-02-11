<?php
session_start();
//chemin vers les dossiers
define('CONTROLLER_DOSSIER', 'controller/');
define('CONTROLLER_MODELE', 'modele/');
define('CONTROLLER_VUE', 'vues/');


function __autoload($class){	
	$docClasses = array(CONTROLLER_DOSSIER, CONTROLLER_MODELE, CONTROLLER_VUE);
	foreach($docClasses as $d){
		if(file_exists("$d".$class.".class.php")){
			include "$d".$class.".class.php";	
		}
	}
}

$c = new IndexControlleur();
$c->doAction();


?>