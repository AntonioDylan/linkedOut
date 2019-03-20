<?php

include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';

class Login extends DBConnection {

function __construct(){}

function testConnexionPublic($email, $mdp)
{
    $query = "SELECT * FROM personne natural join recruteur where mail = '$email' AND mdp = '$mdp'";
    $rep = $db->prepare($query);
    $rep->execute();
    $result = $reponse->fetch();
    if (empty($result)) {
        $query = "SELECT * FROM personne natural join etudiant where mail = '$email' AND mdp = '$mdp'";
        $rep = $db->prepare($query);
        $rep->execute();
        $result = $reponse->fetch();

        if(empty($result)) {
            return "ko";
        }
        else return $result;
    }
    else return $result;
}

}
?>