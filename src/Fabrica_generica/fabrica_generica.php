<?php

namespace exercise_1;

/*This archive contain class "Fabrica" and your methods*/

//this interface contain a basic function that every factory must have
interface metodosDeFabrica
{
    public function fabricar($qtde, $nomeCommodity, $tipoCommodity);
}

class Fabrica implements metodosDeFabrica
{

    //every factory must record what it produces and the quantity. This data will be shown every time a production process is completed
    /*@param string $nomeCommodity
    *@param int $tipoCommodity
    *@param int $qtde (quantity of commodity that are produced)
    */
    public $nomeCommodity;
    public $tipoCommodity;
    public $qtde;

    //Set functions

    public function setNomeCommodity($nomeCommodity)
    {
        $this->nomeCommodity = $nomeCommodity;
    }

    public function setQtde($qtde)
    {
        $this->qtde = $qtde;
    }

    public function setTipoCommodity($tipoCommodity)
    {
        $this->setTipoCommodity = $tipoCommodity;
    }


    //Get functions

    public function getNomeCommodity()
    {
        return $this->nomeCommodity;
    }

    public function getQtde()
    {
        return $this->qtde;
    }

    public function getTipoCommodity()
    {
        return $this->tipoCommodity;
    }

    //each factory has its own method of manufacturing, then, each one can implement it in different ways

    public function fabricar($qtde, $nomeCommodity, $tipoCommodity)
    {
    }

}

?>