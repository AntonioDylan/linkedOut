<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/Annonce.php';

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
            $uneAnnonce = new Annonce($data["idAnnonce"], $data["titre"], $data["description"], $data["poste"], $data["date"], $data["typeEmploi"], $data["niveauEtude"], $data['idRecruteur'], $data['idEntreprise']);
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
        $query = $this->db->prepare("SELECT * FROM Annonce WHERE idAnnonce =':idAnnonce'");
        $query->bindValue(":idAnnonce", $idAnnonce);
        $query->execute();
        $data =  $query->fetch();
        $uneAnnonce = new Annonce($data["idAnnonce"], $data["titre"], $data["description"], $data["poste"], $data["date"], $data["typeEmploi"], $data["niveauEtude"], $data['idRecruteur'], $data['idEntreprise']);
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
    public function insertUneAnnonce($titre, $description, $poste, $date, $typeEmploi, $niveauEtude, $idRecruteur, $idEntreprise)
    {
        $query = $this->db->prepare("INSERT INTO Annonce set `titre` = :titre ,`description` = :description,`poste` = :poste,`date` = :date,`typeEmploi` = :typeEmploi,`niveauEtude` = :niveauEtude,`idRecruteur` = :idRecruteur,`idEntreprise` = :idEntreprise");
        $query->bindValue(":idAnnonce", $titre);
        $query->bindValue(":idAnnonce", $description);
        $query->bindValue(":idAnnonce", $poste);
        $query->bindValue(":idAnnonce", $date);
        $query->bindValue(":idAnnonce", $typeEmploi);
        $query->bindValue(":idAnnonce", $niveauEtude);
        $query->bindValue(":idAnnonce", $idRecruteur);
        $query->bindValue(":idAnnonce", $idEntreprise);
        $query->execute();
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
    public function updateUneAnnonce($titre, $description, $poste, $date, $typeEmploi, $niveauEtude, $idRecruteur, $idEntreprise)
    {
        $query = $this->db->prepare("UPDATE Annonce set `titre` = :titre ,`description` = :description,`poste` = :poste,`date` = :date,`typeEmploi` = :typeEmploi,`niveauEtude` = :niveauEtude,`idRecruteur` = :idRecruteur,`idEntreprise` = :idEntreprise");
        $query->bindValue(":idAnnonce", $titre);
        $query->bindValue(":idAnnonce", $description);
        $query->bindValue(":idAnnonce", $poste);
        $query->bindValue(":idAnnonce", $date);
        $query->bindValue(":idAnnonce", $typeEmploi);
        $query->bindValue(":idAnnonce", $niveauEtude);
        $query->bindValue(":idAnnonce", $idRecruteur);
        $query->bindValue(":idAnnonce", $idEntreprise);
        $query->execute();
    }
}
