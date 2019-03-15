<?php
class Competence
{

    private $idComp;
    private $libelle;


    function __construct($idComp, $libelle)
    {
        $this->idComp = $idComp;
        $this->libelle = $libelle;
    }


    /**
 * Get the value of idComp
 */
    public function getIdComp()
    {
        return $this->idComp;
    }

    /**
 * Set the value of idComp
 *
 * @return  self
 */
    public function setIdComp($idComp)
    {
        $this->idComp = $idComp;

        return $this;
    }

    /**
 * Get the value of libelle
 */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
 * Set the value of libelle
 *
 * @return  self
 */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}
 