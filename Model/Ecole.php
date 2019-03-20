<?php
class Ecole  {

private $idEcole;
private $nom;
private $ville;
private $lienPhoto;


function __construct($idEcole,$nom,$ville,$lienPhoto){
    $this->idEcole = $idEcole;
    $this->nom = $nom;
    $this->ville = $ville;
    $this->lienPhoto = $lienPhoto;
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
}
?>
