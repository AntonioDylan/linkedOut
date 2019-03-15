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

}
?>
