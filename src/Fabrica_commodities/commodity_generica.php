<?php

namespace exercise_1;

//Commodity, basically, are an objected, but this is a generic definition, then, his class are defined like abstract

abstract class Commodity
{

    //This parameters are basic for any Commodity
    /*@param int $id (for each commodity that are produced, have an only id)
    *@param string $nome (Name of Commodity)
    *@param string $horaProduzida (time in which a commodity rises to be produced)
    *@param int $tipo (type of commodity)
    *@param int $funcionalidade (function of each commodity)
    */    
    public $id;
    public $nome;
    public $horaProduzida;
    public $tipo;
    public $funcionalidade;

    //Set functions

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setHoraProduzida($horaProduzida)
    {
        $this->horaProduzida = $horaProduzida;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    //Get functions

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getHoraProduzida()
    {
        return $this->horaProduzida;
    }

    public function getTipo()
    {
        return $this->Tipo;
    }

    //Specific Functionality from Commodity

    public function Funcionalidade($funcionalidade)
    {
        $this->funcionalidade = $funcionalidade;
    }

}

?>