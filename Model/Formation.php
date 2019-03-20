<?php
class Formation {

private $idFormation;
private $titre;
private $description;
private $niveauEtude;
private $lienPhoto;
private $idEcole;


function __construct($idFormation,$titre,$description,$niveauEtude,$lienPhoto,$idEcole){
    $this->idFormation = $idFormation;
    $this->titre = $titre;
    $this->description = $description;
    $this->niveauEtude = $niveauEtude;
    $this->lienPhoto = $lienPhoto;
    $this->idEcole = $idEcole;
}


/**
 * Get the value of idFormation
 */ 
public function getIdFormation()
{
return $this->idFormation;
}

/**
 * Set the value of idFormation
 *
 * @return  self
 */ 
public function setIdFormation($idFormation)
{
$this->idFormation = $idFormation;

return $this;
}

/**
 * Get the value of titre
 */ 
public function getTitre()
{
return $this->titre;
}

/**
 * Set the value of titre
 *
 * @return  self
 */ 
public function setTitre($titre)
{
$this->titre = $titre;

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
 * Get the value of niveauEtude
 */ 
public function getNiveauEtude()
{
return $this->niveauEtude;
}

/**
 * Set the value of niveauEtude
 *
 * @return  self
 */ 
public function setNiveauEtude($niveauEtude)
{
$this->niveauEtude = $niveauEtude;

return $this;
}

/**
 * Get the value of lienPhoto
 */ 
public function getLienPhoto()
{
return $this->lienPhoto;
}

/**
 * Set the value of lienPhoto
 *
 * @return  self
 */ 
public function setLienPhoto($lienPhoto)
{
$this->lienPhoto = $lienPhoto;

return $this;
}

/**
 * Get the value of idEcole
 */ 
public function getIdEcole()
{
return $this->idEcole;
}

/**
 * Set the value of idEcole
 *
 * @return  self
 */ 
public function setIdEcole($idEcole)
{
$this->idEcole = $idEcole;

return $this;
}
}
?>