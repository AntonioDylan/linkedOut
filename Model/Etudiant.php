<?php
class Etudiant extends Personne {

private $idEtudiant;
private $lienCV;
private $linkedin;
private $twitter;


function __construct($idEtudiant,$lienCV,$linkedin,$twitter, $idPersonne, $nom,$prenom,$description,$telephone,$mail,$mdp){
    $this->idEtudiant = $idEtudiant;
    $this->lienCV = $lienCV;
    $this->linkedin = $linkedin;
    $this->twitter = $twitter;

    super($idPersonne, $nom,$prenom,$description,$telephone,$mail,$mdp);
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

/**
 * Get the value of lienCV
 */ 
public function getLienCV()
{
return $this->lienCV;
}

/**
 * Set the value of lienCV
 *
 * @return  self
 */ 
public function setLienCV($lienCV)
{
$this->lienCV = $lienCV;

return $this;
}

/**
 * Get the value of linkedin
 */ 
public function getLinkedin()
{
return $this->linkedin;
}

/**
 * Set the value of linkedin
 *
 * @return  self
 */ 
public function setLinkedin($linkedin)
{
$this->linkedin = $linkedin;

return $this;
}

/**
 * Get the value of twitter
 */ 
public function getTwitter()
{
return $this->twitter;
}

/**
 * Set the value of twitter
 *
 * @return  self
 */ 
public function setTwitter($twitter)
{
$this->twitter = $twitter;

return $this;
}
}
?>