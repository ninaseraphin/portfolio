<?php
/**
 * Class Projet
 * 
 * @author Nina Seraphin
 * @version 1.0
 * 
 * 
 * 
 */
class Projet extends Manager {	
	const TABLE_PROJET = "projet";
	const TABLE_TYPE = "type";
	const TABLE_MEDIA = "media";
		
	/**
	 * Retourne la liste des projets
	 * @access public
	 * @return Array
	 */

	public function getListe() 
	{
		$res = Array();
        $query = "select ".self::TABLE_PROJET.".*, ".self::TABLE_TYPE.".Nom as NomType, media.Nom as NomImage, media.Extension as ExtensionImage, media.Alt FROM ". self::TABLE_PROJET." INNER JOIN Type ON ".self::TABLE_PROJET.".Type=".self::TABLE_TYPE.".Id INNER JOIN media ON media.Projet=projet.Id WHERE media.Principale=1 ORDER BY projet.Id;";
		if($mrResultat = $this->_connexion->query($query))
		{
			while($proj = $mrResultat->fetch_assoc())
			{
				$res[] = $proj;
			}
		}
		return $res;   
	}
	public function getMedias($idProjet) 
	{
		$res = Array();
        $query = "select ".self::TABLE_MEDIA.".*, ".self::TABLE_PROJET.".Nom as NomProjet FROM ".self::TABLE_MEDIA." INNER JOIN ".self::TABLE_PROJET." ON ".self::TABLE_PROJET.".Id=".self::TABLE_MEDIA.".projet WHERE ".self::TABLE_PROJET.".Id=".$idProjet.";";
		if($mrResultat = $this->_connexion->query($query))
		{
			while($media = $mrResultat->fetch_assoc())
			{
				$res[] = $media;
			}
		}
		return $res;   
	}
	public function getCompetences($idProjet) 
	{
		$res = Array();
        $query = "select technique.Nom FROM technique INNER JOIN techniqueprojet ON techniqueprojet.IdTechnique= technique.Id INNER JOIN projet ON projet.Id = techniqueprojet.IdProjet WHERE projet.Id=".$idProjet.";";
		if($mrResultat = $this->_connexion->query($query))
		{
			while($comp = $mrResultat->fetch_assoc())
			{
				$res[] = $comp;
			}
		}
		return $res;   
	}
	public function getProjet($idProjet) 
	{
		$res = Array();
        $query = "select projet.*, type.Nom as NomType FROM projet INNER JOIN type ON projet.Type=type.Id WHERE projet.Id=".$idProjet.";";
		if($proj = $this->_connexion->query($query))
		{
			
            $res = $proj->fetch_assoc();
	
		}
		return $res;   
	}
	
}







?>