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

}
?>