<?php
/**
 * Controlleur des projets
 * 
 */


 
 
class ProjetsControlleur extends Controlleur 
{
	
	public function pageProjets()
	{
        $listeProjets=array();
        $listeProjets=$this->getListeProjets();
		$oVue = new Vue();
        $oVue->afficherHeader("projets");	
        $oVue->afficherPageProjets($listeProjets);
    }
	public function pageUnProjet($id)
	{
        $projet=array();
        $projet=$this->getProjet($id);
        $medias=$this->getMedias($id);
        $competences=$this->getCompetences($id);
		$oVue = new Vue();
        $oVue->afficherHeader("projet");	
        $oVue->afficherPageProjet($projet, $medias, $competences);
    }
    
    
    protected function getListeProjets()
    {
        $oProjet= new Projet();
        $aProjet = $oProjet->getListe();
        return $aProjet;
    }
    protected function getProjet($id)
    {
        $oProjet= new Projet();
        $aProjet = $oProjet->getProjet($id);
        return $aProjet;
    }
    protected function getMedias($id)
    {
        $oProjet= new Projet();
        $aMedias = $oProjet->getMedias($id);
        return $aMedias;
    }
    protected function getCompetences($id)
    {
        $oProjet= new Projet();
        $aCompetences = $oProjet->getCompetences($id);
        return $aCompetences;
    }
	
}
?>