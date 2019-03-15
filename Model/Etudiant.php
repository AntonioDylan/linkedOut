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

}
?>