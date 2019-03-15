<?php 

class PersonneManager extends DBConnection{
    function getAllPersonne(){
        $query = "SELECT * FROM PERSONNE";
    }
}