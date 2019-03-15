<?php
class Personne {

private $idPersonne;
private $nom;
private $prenom;
private $description;
private $telephone;
private $mail;
private $mdp;


function __construct($idPersonne,$nom,$prenom,$description,$telephone,$mail,$mdp){
    $this->idPersonne = $idPersonne;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->description = $description;
    $this->telephone = $telephone;
    $this->mail = $mail;
    $this->mdp = $mdp;
}


/**
 * Get the value of idPersonne
 */ 
public function getIdPersonne()
{
return $this->idPersonne;
}

/**
 * Set the value of idPersonne
 *
 * @return  self
 */ 
public function setIdPersonne($idPersonne)
{
$this->idPersonne = $idPersonne;

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
 * Get the value of prenom
 */ 
public function getPrenom()
{
return $this->prenom;
}

/**
 * Set the value of prenom
 *
 * @return  self
 */ 
public function setPrenom($prenom)
{
$this->prenom = $prenom;

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
 * Get the value of telephone
 */ 
public function getTelephone()
{
return $this->telephone;
}

/**
 * Set the value of telephone
 *
 * @return  self
 */ 
public function setTelephone($telephone)
{
$this->telephone = $telephone;

return $this;
}

/**
 * Get the value of mail
 */ 
public function getMail()
{
return $this->mail;
}

/**
 * Set the value of mail
 *
 * @return  self
 */ 
public function setMail($mail)
{
$this->mail = $mail;

return $this;
}

/**
 * Get the value of mdp
 */ 
public function getMdp()
{
return $this->mdp;
}

/**
 * Set the value of mdp
 *
 * @return  self
 */ 
public function setMdp($mdp)
{
$this->mdp = $mdp;

return $this;
}
}
?>