<?php
class Annonce extends DBConnection {

private $id;
private $titre;
private $description;
private $poste;
private $date;
private $typeEmploi;
private $niveauEtude;
private $idRecruteur;
private $idEntreprise;


function __construct(){
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

}
?>