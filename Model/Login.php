<?php

include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';

class Login extends DBConnection {


function testConnexionPublic($email, $mdp)
{   
    $query = "SELECT * FROM personne where mail = ':email' AND mdp = ':mdp'";
    $rep = $this->db->prepare($query);
    $rep->bindParam(':email', $email);
    $rep->bindParam(':mdp', $mdp);
    $rep->execute();
    $result = $rep->fetch();

    if (empty($result)) {
        $query = "SELECT * FROM personne natural join etudiant where mail = ':email' AND mdp = ':mdp'";
        $rep = $this->db->prepare($query);
        $rep->execute();
        $result = $rep->fetch();

        if(empty($result)) {
            $query = "SELECT * FROM admin where login = '$email' AND mdp = '$mdp'";
            $rep = $this->db->prepare($query);
            $rep->execute();
            $result = $rep->fetch();

            if (empty($result)) {
                return "ko";
            }
            else return $result;
        }
        else return $result;
    }
    else return $result;
  
}




}
?>