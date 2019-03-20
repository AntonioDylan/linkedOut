<?php
class Entreprise{

private $idEntreprise;
private $nom;
private $domaine;
private $lienphoto;
private $adresse;
private $cp;
private $ville;
private $region;
private $pays;
private $description;
private $site;


function __construct($idEntreprise,$nom,$domaine,$lienphoto,$adresse,$cp,$ville,$region,$pays,$description,$site){
    $this->idEntreprise = $idEntreprise;
    $this->nom = $nom;
    $this->domaine = $domaine;
    $this->lienPhoto = $lienphoto;
    $this->adresse = $adresse;
    $this->cp = $cp;
    $this->ville = $ville;
    $this->region = $region;
    $this->ays = $pays;
    $this->description = $description;
    $this->site = $site;

}


/**
 * Get the value of idEntreprise
 */ 
public function getIdEntreprise()
{
return $this->idEntreprise;
}

/**
 * Set the value of idEntreprise
 *
 * @return  self
 */ 
public function setIdEntreprise($idEntreprise)
{
$this->idEntreprise = $idEntreprise;

return $this;
}

/**
 * Get the value of nom
 */ 
public function getNom()
{
return $this->nom;
}

/**
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
$this->nom = $nom;

return $this;
}

/**
 * Get the value of domaine
 */ 
public function getDomaine()
{
return $this->domaine;
}

/**
 * Set the value of domaine
 *
 * @return  self
 */ 
public function setDomaine($domaine)
{
$this->domaine = $domaine;

return $this;
}

/**
 * Get the value of lienphoto
 */ 
public function getLienphoto()
{
return $this->lienphoto;
}

/**
 * Set the value of lienphoto
 *
 * @return  self
 */ 
public function setLienphoto($lienphoto)
{
$this->lienphoto = $lienphoto;

return $this;
}

/**
 * Get the value of adresse
 */ 
public function getAdresse()
{
return $this->adresse;
}

/**
 * Set the value of adresse
 *
 * @return  self
 */ 
public function setAdresse($adresse)
{
$this->adresse = $adresse;

return $this;
}

/**
 * Get the value of cp
 */ 
public function getCp()
{
return $this->cp;
}

/**
 * Set the value of cp
 *
 * @return  self
 */ 
public function setCp($cp)
{
$this->cp = $cp;

return $this;
}

/**
 * Get the value of ville
 */ 
public function getVille()
{
return $this->ville;
}

/**
 * Set the value of ville
 *
 * @return  self
 */ 
public function setVille($ville)
{
$this->ville = $ville;

return $this;
}

/**
 * Get the value of region
 */ 
public function getRegion()
{
return $this->region;
}

/**
 * Set the value of region
 *
 * @return  self
 */ 
public function setRegion($region)
{
$this->region = $region;

return $this;
}

/**
 * Get the value of pays
 */ 
public function getPays()
{
return $this->pays;
}

/**
 * Set the value of pays
 *
 * @return  self
 */ 
public function setPays($pays)
{
$this->pays = $pays;

return $this;
}

/**
 * Get the value of description
 */ 
public function getDescription()
{
return $this->description;
}

/**
 * Set the value of description
 *
 * @return  self
 */ 
public function setDescription($description)
{
$this->description = $description;

return $this;
}

/**
 * Get the value of site
 */ 
public function getSite()
{
return $this->site;
}

/**
 * Set the value of site
 *
 * @return  self
 */ 
public function setSite($site)
{
$this->site = $site;

return $this;
}
}
?>
