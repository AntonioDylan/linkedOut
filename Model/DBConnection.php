<?php

class DBConnection
{
    private $host = '91.121.155.160';
    private $dbname = 'stmncv2';
    private $user = 'stmncv2';
    private $pass = 'ePgcFWO7lh2RxcKE';
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
 