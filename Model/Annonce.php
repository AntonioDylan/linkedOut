<?php
class Annonce {

private $id;
private $titre;
private $description;
private $poste;
private $date;
private $typeEmploi;
private $niveauEtude;
private $idRecruteur;
private $idEntreprise;


function __construct($id,$titre,$description,$poste,$date,$typeEmploi,$niveauEtude, $idRecruteur, $idEntreprise){
    $this->id = $id;
    $this->titre = $titre;
    $this->description = $description;
    $this->poste = $poste;
    $this->date = $date;
    $this->typeEmploi = $typeEmploi;
    $this->niveauEtude = $niveauEtude;
    $this->idRecruteur = $idRecruteur;
    $this->idEntreprise = $idEntreprise;
}


/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

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
 * Get the value of idRecruteur
 */ 
public function getIdRecruteur()
{
return $this->idRecruteur;
}

/**
 * Set the value of idRecruteur
 *
 * @return  self
 */ 
public function setIdRecruteur($idRecruteur)
{
$this->idRecruteur = $idRecruteur;

return $this;
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
}
?>