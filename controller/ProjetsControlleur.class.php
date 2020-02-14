<?php
/**
 * Controlleur des projets
 * 
 */

class ProjetsControlleur extends Controlleur 
{

    /**
	 * Permet l'affichage de la page des projets
	 * @access public
	 * 
	 */
	public function pageProjets()
	{
        /* Aller chercher la liste des projets */
        $listeProjets=array();
        $listeProjets=$this->getListeProjets();
        /* Afficher la vue */
		$oVue = new Vue();
        $oVue->afficherHeader("projets");	
        $oVue->afficherPageProjets($listeProjets);
    }

	/**
	 * PErmet l'affichage de la page d'un projet
	 * @access public
	 * @param Integer $Id Id du projet voulu
	 */
	public function pageUnProjet($id)
	{
        /* Aller chercher les infos du projet */ 
        $projet=array();
        $projet=$this->getProjet($id);
        /* Aller chercher les références des médias associés au projet */
        $medias=$this->getMedias($id);
        /* Aller chercher les compétences associées au projet */
        $competences=$this->getCompetences($id);
        $_SESSION['projet'] = $projet;
        $_SESSION['medias'] = $medias;
        $_SESSION['competences'] = $competences;
        /* Afficher la vue du projet */
        $oVue = new Vue();
        $oVue->afficherHeader("projet");
        $oVue->afficherPageProjet($projet, $medias, $competences);
    }
    /**
	 * Va chercher la liste des projets
	 * @access public
	 * @return Array
	 */
    protected function getListeProjets()
    {
        $oProjet= new Projet();
        $aProjet = $oProjet->getListe();
        return $aProjet;
    }
	/**
	 * Va chercher les informations d'un projet 
	 * @access public
     * @param Integer $id Id du projet
	 * @return Array
	 */
    protected function getProjet($id)
    {
        $oProjet= new Projet();
        $aProjet = $oProjet->getProjet($id);
        return $aProjet;
    }
	/**
	 * Va chercher les médias reliés a un projet
	 * @access public
     * @param Integer $id Id du projet
	 * @return Array
	 */
    protected function getMedias($id)
    {
        $oProjet= new Projet();
        $aMedias = $oProjet->getMedias($id);
        return $aMedias;
    }
    /** 
     * Va chercher les compétences reliées a un projet
    * @access public
    * @param Integer $id Id du projet
    * @return Array
    */
    protected function getCompetences($id)
    {
        $oProjet= new Projet();
        $aCompetences = $oProjet->getCompetences($id);
        return $aCompetences;
    }
}
?>