<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/Etudiant.php';
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/PersonneManager.php';


class EtudiantManager extends DBConnection
{

    /**
     * Retourne tout les Etudiants dans un tableau d'Etudiant
     *
     * @return $lesEtudiants
     */
    public  function getAllEtudiant()
    {
        $lesEtudiants = array();
        $query = $this->db->prepare("SELECT * FROM Etudiant NATURAL JOIN Personne");
        $query->execute();
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $unEtudiant = new Etudiant($data["idEtudiant"], $data["lienCV"], $data["linkedIn"],$data["twitter"],$data["idPersonne"],$data["nom"],$data["prenom"],$data["description"],$data["telephone"],$data["mail"],$data["mdp"]);
            array_push($lesEtudiants, $unEtudiant);
        }
        return $lesEtudiants;
    }

    /**
     * Retourne un Etudiant en fonction de son id 
     *
     * @param [integer] $idEtudiant
     * @return $unEtudiant
     */
    public function getUnEtudiant($idEtudiant)
    {
        $query = $this->db->prepare("SELECT * FROM Etudiant NATURAL JOIN Personne WHERE idEtudiant =':idEtudiant'");
        $query->bindValue(":idEtudiant",$idEtudiant);
        $query->execute();
        $data = $query->fetch();
        $unEtudiant = new Etudiant($data["idEtudiant"], $data["lienCV"], $data["linkedIn"],$data["twitter"],$data["idPersonne"],$data["nom"],$data["prenom"],$data["description"],$data["telephone"],$data["mail"],$data["mdp"]);
        return $unEtudiant;
    }

    /**
   * Ajoute une Etudiant avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUneEtudiant($lienCV,$linkedIn,$twitter,$nom,$prenom,$description,$telephone,$mail,$mdp)
    {
        $personneManager = new PersonneManager();
        $personneManager->insertUnePersonne($nom, $prenom, $description, $telephone, $mail, $mdp);
        $idPersonne = $personneManager->getLastid();
        $query = $this->db->prepare("INSERT INTO Etudiant set `idPersonne` = :idPersonne,`lienCV`=:lienCV,`linkedIn` = :linkedIn,`twitter` = :twitter");
        $query->bindValue(":idPersonne",$idPersonne); 
        $query->bindValue(":lienCV",$lienCV); 
        $query->bindValue(":linkedIn",$linkedIn); 
        $query->bindValue(":twitter",$twitter);         
        $query->execute();
    }




    /**
   * Ajoute une Etudiant avec les informations donnés en paramètres
   *
   * @param [String] $libelle
   * @return void
   */
    public function updateUneEtudiant($nom,$domaine,$lienPhoto,$adresse,$cp,$ville,$region,$pays,$description,$site)
    {
        $query = $this->db->prepare("UPDATE Etudiant set `nom` = :nom,`domaine`=:domaine,`lienPhoto` = :lienPhoto,`adresse` = :adresse,`cp` = :cp,`ville` = :ville,`region` = :region,`pays` = :pays,`description` = :description,`site` = :site");
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
