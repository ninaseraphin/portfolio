<?php

class IndexControlleur extends Controlleur{
	public $url_elements;
	public $action;

    public function doAction(){
		$_GET['url'] = (isset($_GET['url']) ? $_GET['url'] : "");
		$this->url_elements = explode('/', $_GET['url']);
		// $this->parseIncomingParams();
		$this->action = $this->url_elements[0]; 
		
		// echo ($this->url_elements[0]);


        switch($this->action){
				case "projets":
					$page="projets";
					$proj = new ProjetsControlleur();
					$proj->pageProjets();
	
					
                break;              
                
				case "projet":
				$page="projet";
				$unProj = new ProjetsControlleur();
					if($this->url_elements[1]){
						$unProj->pageUnProjet($this->url_elements[1]);
					}else{
						$unProj->pageProjets();
					}
					

				             
                break;                  
				case "apropos":
					$page="apropos";
					$crs = new AuthentificationControlleur();
					if($action == "liste")   $crs->listeAction();
					if($action == "ajouter") $crs->ajouterAction();
					if($action == "supprimer") $crs->supprimerAction();
					if($action == "modifier") $crs->modifierAction();				             
					if($action == "connexion") $crs->connexionAction();				             
					if($action == "connexionPost") $crs->connexionPostAction();				             
                break;                  
                                
                default:
					$this->vue->afficherPageAccueil();
                break;
        }    
	}

	


}

?>