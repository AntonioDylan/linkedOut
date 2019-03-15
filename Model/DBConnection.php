<?php
class DBConnection
{

    function __construct()
    {

       private $host = 'localhost';
       private $dbname = 'maTable';
       private $user = 'root';
       private $pass = '';
       protected $db;

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
 