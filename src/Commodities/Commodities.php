<?php

namespace exercise_1;

require __DIR__ . '\..\Fabrica_commodities\commodity_generica.php';

use exercise_1\Fabrica_commodities\commodity_generica;

/*This archive contain 04 classes that extends from basic abstract class Commodity, on the archive commodity_generica.php*/
/*This classes are predetermined on the code lines of this program*/

class Panela extends Commodity
{
    public function __construct($id, $nome, $tipo)
    {
        /*each class have a own "__construct" method, and its parameters were declared on the class "Commodity" */
        /*when the construct is called, his parameters are written with the data obtained from the user*/
        /*but some data is assigned in the code itself when created*/
        $this->setId($id);
        $this->setNome($nome);
        $this->setHoraProduzida(5);
        $this->setTipo($tipo);
        $this->Funcionalidade("Cozinha Alimentos!");
    }

}

class Talher extends Commodity
{
    public function __construct($id, $nome, $tipo)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setHoraProduzida(1);
        $this->setTipo($tipo);
        $this->Funcionalidade("Agarra alimentos!");
    }    
}

class Forma extends Commodity
{
    public function __construct($id, $nome, $tipo)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setHoraProduzida(6);
        $this->setTipo($tipo);
        $this->Funcionalidade("Assa Alimentos!");
    }    
}

class Prato extends Commodity
{
    public function __construct($id, $nome, $tipo)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setHoraProduzida(3);
        $this->setTipo($tipo);
        $this->Funcionalidade("Serve Alimentos!");
    }    
}

?>