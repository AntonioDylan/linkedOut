<?php
class Recruteur extends Personne {

private $idRecruteur;


function __construct($idRecruteur, $idPersonne, $nom,$prenom,$description,$telephone,$mail,$mdp){
    $this->idRecruteur = $idRecruteur;
    super($idPersonne, $nom,$prenom,$description,$telephone,$mail,$mdp);
}

}
?>
