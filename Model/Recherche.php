<?php
class Recherche {

private $idRecherche;
private $domaine;
private $poste;
private $description;
private $date;
private $typeEmploi;
private $idEtudiant;


function __construct($idRecherche,$domaine,$poste,$description,$date,$typeEmploi,$idEtudiant){
    $this->idRecherche = $idRecherche;
    $this->domaine = $domaine;
    $this->poste = $poste;
    $this->description = $description;
    $this->date = $date;
    $this->typeEmploi = $typeEmploi;
    $this->idEtudiant = $idEtudiant;
}


/**
 * Get the value of idRecherche
 */ 
public function getIdRecherche()
{
return $this->idRecherche;
}

/**
 * Set the value of idRecherche
 *
 * @return  self
 */ 
public function setIdRecherche($idRecherche)
{
$this->idRecherche = $idRecherche;

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
 * Get the value of poste
 */ 
public function getPoste()
{
return $this->poste;
}

/**
 * Set the value of poste
 *
 * @return  self
 */ 
public function setPoste($poste)
{
$this->poste = $poste;

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
 * Get the value of date
 */ 
public function getDate()
{
return $this->date;
}

/**
 * Set the value of date
 *
 * @return  self
 */ 
public function setDate($date)
{
$this->date = $date;

return $this;
}

/**
 * Get the value of typeEmploi
 */ 
public function getTypeEmploi()
{
return $this->typeEmploi;
}

/**
 * Set the value of typeEmploi
 *
 * @return  self
 */ 
public function setTypeEmploi($typeEmploi)
{
$this->typeEmploi = $typeEmploi;

return $this;
}

/**
 * Get the value of idEtudiant
 */ 
public function getIdEtudiant()
{
return $this->idEtudiant;
}

/**
 * Set the value of idEtudiant
 *
 * @return  self
 */ 
public function setIdEtudiant($idEtudiant)
{
$this->idEtudiant = $idEtudiant;

return $this;
}
}
?>