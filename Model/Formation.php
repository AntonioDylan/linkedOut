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

}
?>