<?php

include "../Model/Login.php";

session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new Login();

    $testvar = $login->testConnexionPublic($email, $password);
    $_SESSION = $testvar ;
    
    if($testvar == false){
        header('http://localhost/linkedOut/View/php/pages/login.php');
        exit(); 
    }else  if(isset($testvar['idAdmin'])){
        header('Location: http://localhost/linkedOut/View/php/pages/admin.php');
        exit();
    } else if(isset($testvar['idPersonne'])){
        header('Location: http://localhost/linkedOut/View/php/pages/accueil.php');
        exit(); 
    }
}

?>