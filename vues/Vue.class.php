<?php
class Vue{


    public function afficherPageAccueil(){
        require  "accueil.html.php"; 

    }
    public function afficherPageProjets($liste){
        $_SESSION['liste'] = $liste;
        require  "projets.html.php"; 

    }
    public function afficherPageProjet($liste, $listeMedias){
        $_SESSION['projet'] = $liste;
        $_SESSION['medias'] = $listeMedias;
        require  "projet.html.php"; 
    }
    public function afficherPageAPropos(){
        require  "apropos.html.php"; 
    }
    public function afficherHeader($page){
        include "header.php";

    }

    
    
    
}

?>