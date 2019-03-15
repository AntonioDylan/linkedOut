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
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
 