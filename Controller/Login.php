<?php

include "../Model/Login.php";

session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Login();
    $loginSession = $login->testConnexionPublic($email, $password);
    
    if($loginSession != NULL) {
        $_SESSION = $loginSession;
        $_SESSION['islog'] = true;
    }
    else {
        header('Location: http://localhost/linkedOut/View/php/pages/login.php');
        exit(); 
    }
    var_dump($_SESSION);
    if(isset($loginSession['idAdmin'])){
        header('Location: http://localhost/linkedOut/View/php/pages/admin.php');
        exit();
    } else if(isset($loginSession['idPersonne'])){
        header('Location: http://localhost/linkedOut/View/php/pages/accueil.php');
        exit(); 
    }
}

?>