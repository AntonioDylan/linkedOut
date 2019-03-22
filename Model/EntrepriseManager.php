<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/Entreprise.php';

class EntrepriseManager extends DBConnection
{

    /**
     * Retourne toutes les Entreprises dans un tableau de Entreprise
     *
     * @return $lesEntreprises
     */
    public  function getAllEntreprise()
    {
        $lesEntreprises = array();
        $query = $this->db->prepare("SELECT * FROM Entreprise");
        $query->execute();
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $uneEntreprise = new Entreprise($data["idEntreprise"],$data["nom"], $data["domaine"], $data["lienPhoto"],$data["adresse"],$data["cp"],$data["ville"],$data["region"],$data["pays"],$data["description"],$data["site"]);
            array_push($lesEntreprises, $uneEntreprise);
        }
        return $lesEntreprises;
    }

    /**
     * Retourne une Entreprise en fonction de son id 
     *
     * @param [integer] $idEntreprise
     * @return $uneEntreprise
     */
    public function getUneEntreprise($idEntreprise)
    {
        $query = $this->db->prepare("SELECT * FROM Entreprise WHERE idEntreprise =':idEntreprise'");
        $query->bindValue(":idEntreprise",$idEntreprise);
        $query->execute();
        $data = $query->fetch();
        $uneEntreprise = new Entreprise($data["idEntreprise"],$data["nom"], $data["domaine"], $data["lienPhoto"],$data["adresse"],$data["cp"],$data["ville"],$data["region"],$data["pays"],$data["description"],$data["site"]);
        return $uneEntreprise;
    }

    /**
   * Ajoute une Entreprise avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUneEntreprise($nom,$domaine,$lienPhoto,$adresse,$cp,$ville,$region,$pays,$description,$site)
    {
        $query = $this->db->prepare("INSERT INTO Entreprise set `nom` = :nom,`domaine`=:domaine,`lienPhoto` = :lienPhoto,`adresse` = :adresse,`cp` = :cp,`ville` = :ville,`region` = :region,`pays` = :pays,`description` = :description,`site` = :site");
        $query->bindValue(":nom",$nom); 
        $query->bindValue(":domaine",$domaine); 
        $query->bindValue(":lienPhoto",$lienPhoto); 
        $query->bindValue(":adresse",$adresse); 
        $query->bindValue(":cp",$cp); 
        $query->bindValue(":ville",$ville); 
        $query->bindValue(":region",$region); 
        $query->bindValue(":pays",$pays); 
        $query->bindValue(":description",$description); 
        $query->bindValue(":site",$site); 

        $query->execute();
    }




    /**
   * Ajoute une Entreprise avec les informations donnés en paramètres
   *
   * @param [String] $libelle
   * @return void
   */
    public function updateUneEntreprise($nom,$domaine,$lienPhoto,$adresse,$cp,$ville,$region,$pays,$description,$site)
    {
        $query = $this->db->prepare("UPDATE Entreprise set `nom` = :nom,`domaine`=:domaine,`lienPhoto` = :lienPhoto,`adresse` = :adresse,`cp` = :cp,`ville` = :ville,`region` = :region,`pays` = :pays,`description` = :description,`site` = :site");
        $query->bindValue(":nom",$nom); 
        $query->bindValue(":domaine",$domaine); 
        $query->bindValue(":lienPhoto",$lienPhoto); 
        $query->bindValue(":adresse",$adresse); 
        $query->bindValue(":cp",$cp); 
        $query->bindValue(":ville",$ville); 
        $query->bindValue(":region",$region); 
        $query->bindValue(":pays",$pays); 
        $query->bindValue(":description",$description); 
        $query->bindValue(":site",$site); 

        $query->execute();
    }
}
