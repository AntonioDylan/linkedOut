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
            array_push($lesAdmins, $uneAdmin);
        }
        return $lesAdmins;
    }

    /**
     * Retourne un Admin en fonction de son id 
     *
     * @param [integer] $id
     * @return $uneAdmin
     */
    public function getUneAdmin($id)
    {
        $query = $db->prepare("SELECT * FROM Admin WHERE id =':idAdmin'");
        $query->execute(array("idAdmin" => $id));
        $data = $query->fetch();
        $unAdmin = new Admin($data["id"], $data["login"],$data["password"]);
        return $uneAdmin;
    }

    /**
   * Ajoute une Admin avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom  
   * @return void
   */
    public function insertUneAdmin($libelle)
    {
        $query = $db->prepare("INSERT INTO Admin set `login` = :login");
        $query->execute(array("login" => $libelle,"libelle" => $libelle,));
    }




    /**
   * Ajoute une Admin avec les informations donnés en paramètres
   *
   * @param [String] $libelle
   * @return void
   */
    public function updateUneAdmin($libelle)
    {
        $query = $db->prepare("UPDATE Admin set  `libelle` = :libelle WHERE `idProcessus` =:idProcessus");
        $query->execute(array("libelle" => $libelle));
    }
}
