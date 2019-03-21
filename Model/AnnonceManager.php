<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Model/DBConnection.php';
    include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Model/Annonce.php';

class AnnonceManager extends DBConnection
{

    /**
     * Retourne toutes les Annonces dans un tableau de Annonce
     *
     * @return void
     */
    public  function getAllAnnonce()
    {
        $lesAnnonces = array();
        $query = $this->db->prepare("SELECT * FROM Annonce");
        $query->execute();
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $uneAnnonce = new Annonce($data["idAnnonce"], $data["titre"], $data["description"], $data["poste"], $data["date"], $data["typeEmploi"], $data["niveauEtude"], $data['idRecruteur'], $data['idEntreprise']]);
            array_push($lesAnnonces, $uneAnnonce);
        }
        return $lesAnnonces;
    }

    /**
     * Retourne une Annonce en fonction de son id 
     *
     * @param [integer] $idAnnonce
     * @return void
     */
    public function getUneAnnonce($idAnnonce)
    {
        $query = $db->prepare("SELECT * FROM Annonce WHERE idAnnonce =':idAnnonce'");
        $query->execute(array("idAnnonce"=>$idAnnonce));
        $data = $query->fetch();
        $uneAnnonce = new Annonce($data["idAnnonce"], $data["nom"], $data["prenom"], $data["description"], $data["telephone"], $data["mail"], $data["mdp"]);
        return $uneAnnonce;
    }

    /**
   * Ajoute une Annonce avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUneAnnonce($nom, $prenom, $description, $telephone, $mail, $mdp)
    {
        $query = $db->prepare("INSERT INTO Annonce set `nom` = :nom ,`prenom` = :prenom,`description` = :description,`telephone` = :telephone,`mail` = :mail,`mdp` = :mdp");
        $query->execute(array("nom" => $nom, "prenom" => $prenom, "description" => $description, $telephone, $mail, $mdp));
    }


    /**
   * Ajoute une Annonce avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function updateUneAnnonce($idAnnonce, $nom, $prenom, $description, $telephone, $mail, $mdp)
    {
        $query = $db->prepare("UPDATE Annonce set `nom` = :nom ,`prenom` = :prenom,`description` = :description,`telephone` = :telephone,`mail` = :mail,`mdp` = :mdp WHERE `idProcessus` =:idProcessus");
        $query->execute(array("nom" => $nom, "prenom" => $prenom, "description" => $description, "telephone" => $telephone, "mail" => $mail, "mdp" => $mdp, "idProcessus" => $idAnnonce));
    }
}