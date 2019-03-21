<?php

include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';

class Login extends DBConnection
{

    function testConnexionPublic($email, $mdp)
    {
        $rep = $this->db->prepare('SELECT * FROM personne natural join recruteur where mail = :email AND mdp = :mdp');
        $rep->bindValue(':email', $email);
        $rep->bindValue(':mdp', $mdp);
        $rep->execute();
        $result = $rep->fetch();

        if (empty($result)) {
            $rep = $this->db->prepare('SELECT * FROM personne natural join etudiant where mail = :email AND mdp = :mdp');
            $rep->bindValue(':email', $email);
            $rep->bindValue(':mdp', $mdp);
            $rep->execute();
            $result = $rep->fetch();

            if (empty($result)) {
                $rep = $this->db->prepare('SELECT * FROM admin where login = :email AND mdp = :mdp');
                $rep->bindValue(':email', $email);
                $rep->bindValue(':mdp', $mdp);
                $rep->execute();
                $result = $rep->fetch();

                if (empty($result)) {             
                    return false;
                } else return $result;
            } else return $result;
        } else return $result;
    }
}
 