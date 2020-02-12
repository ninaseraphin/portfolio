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
					$this->vue->afficherHeader("apropos");
					$this->vue->afficherpageAPropos();  			             
                break;                  
                                
				default:
					$this->vue->afficherHeader("accueil");
					$this->vue->afficherpageAccueil();  
                break;
        }    
	}

	


}

?>