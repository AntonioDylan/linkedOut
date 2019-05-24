<?php

include ($_SERVER['DOCUMENT_ROOT'] ."/Model/Login.php");



session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];    
     $login = new Login();    
    $loginSession = $login->testConnexionPublic($email, $password);
    var_dump($loginSession);

    if($loginSession != NULL) {
        $_SESSION = $loginSession;
        $_SESSION['islog'] = true;
    }
    else {
        header('Location: /View/php/pages/Login.php?etat=ko');
        exit(); 
    }   
    if(isset($loginSession['idAdmin'])){
        header('Location: /View/php/pages/Admin.php');
        exit();
    } else if(isset($loginSession['idPersonne'])){
        header('Location: /View/php/pages/accueil.php');
        exit(); 
    }
}

?>