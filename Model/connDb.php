<?php
class DBConnection
{

    function DBConnection()
    {

        $host = 'localhost';
        $dbname = 'maTable';
        $user = 'root';
        $pass = '';

        try {
            $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $DBH;
        } catch (PDOException $e) {

            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
 