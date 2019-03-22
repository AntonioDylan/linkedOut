<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/Ecole.php';

class EcoleManager extends DBConnection
{

    /**
     * Retourne toutes les Ecoles dans un tableau de Ecole
     *
     * @return $lesEcoles
     */
    public  function getAllEcole()
    {
        $lesEcoles = array();
        $query = $this->db->prepare("SELECT * FROM Ecole");
        $query->execute();
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $uneEcole = new Ecole($data["idEcole"],$data["nom"], $data["ville"], $data["lienPhoto"]);
            array_push($lesEcoles, $uneEcole);
        }
        return $lesEcoles;
    }

    /**
     * Retourne une Ecole en fonction de son id 
     *
     * @param [integer] $idEcole
     * @return $uneEcole
     */
    public function getUneEcole($idEcole)
    {
        $query = $this->db->prepare("SELECT * FROM Ecole WHERE idEcole =':idEcole'");
        $query->bindValue(":idEcole",$idEcole);
        $query->execute();
        $data = $query->fetch();
        $uneEcole = new Ecole($data["idEcole"],$data["nom"], $data["ville"], $data["lienPhoto"]);
        return $uneEcole;
    }

    /**
   * Ajoute une Ecole avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUneEcole($nom,$ville,$lienPhoto)
    {
        $query = $this->db->prepare("INSERT INTO Ecole set `nom` = :nom,`ville`=:ville,`lienPhoto` = :^lienPhoto");
        $query->bindValue(":nom",$nom); 
        $query->bindValue(":ville",$ville); 
        $query->bindValue(":lienPhoto",$lienPhoto); 

        $query->execute();
    }




    /**
   * Ajoute une Ecole avec les informations donnés en paramètres
   *
   * @param [String] $libelle
   * @return void
   */
    public function updateUneEcole($nom,$ville,$lienPhoto)
    {
        $query = $this->db->prepare("UPDATE Ecole set `nom` = :nom,`ville`=:ville,`lienPhoto` = :lienPhoto");
        $query->bindValue(":nom",$nom); 
        $query->bindValue(":ville",$ville); 
        $query->bindValue(":lienPhoto",$lienPhoto); 

        $query->execute();
    }
}
