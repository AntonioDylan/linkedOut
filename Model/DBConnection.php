<?php
class DBConnection
{
    private $host = 'localhost';
    private $dbname = 'linkedout';
    private $user = 'root';
    private $pass = '';
    protected $db;


    function __construct()
    {
        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
 