<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Model/DBConnection.php';
    include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Model/Personne.php';

class PersonneManager extends DBConnection
{

    /**
     * Retourne toutes les personnes dans un tableau de Personne
     *
     * @return void
     */
    public  function getAllPersonne()
    {
        $lesPersonnes = array();
        $query = $this->db->prepare("SELECT * FROM PERSONNE");
        $query->execute();
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $unePersonne = new Personne($data["idPersonne"], $data["nom"], $data["prenom"], $data["description"], $data["telephone"], $data["mail"], $data["mdp"]);
            array_push($lesPersonnes, $unePersonne);
        }
        return $lesPersonnes;
    }

    /**
     * Retourne une Personne en fonction de son id 
     *
     * @param [integer] $idPersonne
     * @return void
     */
    public function getUnePersonne($idPersonne)
    {
        $query = $db->prepare("SELECT * FROM PERSONNE WHERE idPersonne ='?'");
        $query->execute(array("$idPersonne"));
        $data = $query->fetch();
        $unePersonne = new Personne($data["idPersonne"], $data["nom"], $data["prenom"], $data["description"], $data["telephone"], $data["mail"], $data["mdp"]);
        return $unePersonne;
    }

    /**
   * Ajoute une Personne avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUnePersonne($nom, $prenom, $description, $telephone, $mail, $mdp)
    {
        $query = $db->prepare("INSERT INTO personne set `nom` = :nom ,`prenom` = :prenom,`description` = :description,`telephone` = :telephone,`mail` = :mail,`mdp` = :mdp");
        $query->execute(array("nom" => $nom, "prenom" => $prenom, "description" => $description, $telephone, $mail, $mdp));
    }


    /**
   * Ajoute une Personne avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function updateUnePersonne($idPersonne, $nom, $prenom, $description, $telephone, $mail, $mdp)
    {
        $query = $db->prepare("UPDATE personne set `nom` = :nom ,`prenom` = :prenom,`description` = :description,`telephone` = :telephone,`mail` = :mail,`mdp` = :mdp WHERE `idProcessus` =:idProcessus");
        $query->execute(array("nom" => $nom, "prenom" => $prenom, "description" => $description, "telephone" => $telephone, "mail" => $mail, "mdp" => $mdp, "idProcessus" => $idPersonne));
    }
}
