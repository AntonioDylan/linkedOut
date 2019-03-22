<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/DBConnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Model/Admin.php';

class AdminManager extends DBConnection
{

    /**
     * Retourne tous les Admins dans un tableau de Admin
     *
     * @return $lesAdmins
     */
    public  function getAllAdmin()
    {
        $lesAdmins = array();
        $query = $this->db->prepare("SELECT * FROM Admin");
        $query->execute();
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $unAdmin = new Admin($data["id"], $data["login"],$data["password"]);
            array_push($lesAdmins, $unAdmin);
        }
        return $lesAdmins;
    }

    /**
     * Retourne un Admin en fonction de son id 
     *
     * @param [integer] $id
     * @return $uneAdmin
     */
    public function getUnAdmin($id)
    {
        $query = $this->db->prepare("SELECT * FROM Admin WHERE id =':idAdmin'");
        $query->bindValue(":idAdmin",$id);
        $query->execute();
        $data = $query->fetch();
        $unAdmin = new Admin($data["id"], $data["login"],$data["password"]);
        return $unAdmin;
    }

    /**
   * Ajoute une Admin avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom  
   * @return void
   */
    public function insertUnAdmin($libelle,$mdp)
    {
        $query = $this->db->prepare("INSERT INTO Admin set `login` = :login,`mdp` =:mdp");
        $query->bindValue(":login",$libelle);
        $query->bindValue(":mdp",$mdp); 
        $query->execute();
    }




    /**
   * Ajoute une Admin avec les informations donnés en paramètres
   *
   * @param [String] $libelle
   * @return void
   */
    public function updateUnAdmin($id,$libelle,$mdp)
    {
        $query = $this->db->prepare("UPDATE Admin set `login` = :login,`mdp` =:mdp WHERE `idAdmin` =:id");
        $query->bindValue(":id",$id);
        $query->bindValue(":login",$libelle);
        $query->bindValue(":mdp",$mdp); 
        $query->execute();
    }
}
