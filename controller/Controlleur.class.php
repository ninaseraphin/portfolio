<?php

class Controlleur{
    protected $manager;
   protected $vue;
    
    public function __construct(){
       // $this->modele = new Modele();
        $this->manager = new Manager();
        $this->vue = new Vue();
    }
    public function doAction(){
     
        $choix = @$_GET['action'];
        

        switch($choix){
                case "accueil":
                    $this->vue->afficherHeader();
                    $this->vue->afficherpageAccueil();
                break;              
                
                case "apropos":
                    $this->vue->afficherHeader();
                      $this->vue->afficherPageAPropos();
              
                break;                  
                case "projets":
                    $this->vue->afficherHeader();
                      $tab = $this->manager->lister("projet");
                      $this->vue->afficherPageProjets($tab);
                break;                
                case "projet":
                    $this->vue->afficherHeader();
                      $tab = $this->manager->lister("projet");
                      $this->vue->afficherPageProjet($tab);
                break;                
                default:
                    $this->vue->afficherHeader();
                    $this->vue->afficherpageAccueil();                
                break;
        }
    }

}

?>