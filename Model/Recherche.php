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

}
?>