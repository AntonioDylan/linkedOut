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

}
?>
