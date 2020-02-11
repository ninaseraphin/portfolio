<?php

class Projets extends Manager{
	public  function verification($lo, $mdp){
       //requete de verication ici

   
        $requete= "SELECT count(*) as nbre FROM utilisateur WHERE login='$lo' and mdp='$mdp'";
        $result =$this->connexion->query($requete);
 //print_r($result); 
         
        $resultat = $result->fetchAll(PDO::FETCH_ASSOC);

     // print_r($resultat[0]['nbre']); die;

        if( $resultat[0]['nbre']>0)   return true;
        return false;
	}
}
