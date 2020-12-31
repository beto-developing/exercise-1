<?php

namespace exercise_1;

require __DIR__ . '\..\Fabrica_generica\fabrica_generica.php';

use exercise_1\Fabrica_commodities\fabrica_generica;


//class fabricaGeral extends from basic class Fabrica

class fabricaGeral extends Fabrica
{
    //This arrays list history production and Commodities Table, but in this moment, the function that list the Commodities it was not implemented on the executar method
    public $tabelaCommodities = [];
    public $historicoProducao = [];

    //the cumulative variables that increase with each new production
    public $idProducao = 0;
    public $itensProduzidos = 0;

    public function buscarEspaco($i): bool
    {
        if ($this->historicoProducao[$i] <> null)
        {
            return true;
        } else {
            return false;
        }
    }

    public function verificarSeTabelaVazia(): bool
    {
        if ($this->historicoProducao[1] == null)
        {
            return true;
        } else {
            return false;
        }
    }

    public function verificarLimiteProducao($qtde): bool
    {
        if ($qtde < 100)
        {
            return false;
        } else {
            echo "limite de produção atingido!\n";
            return true;
        }

    }

    //attribute null for array
    public function inicializar()
    {
        for ($i = 1; $i <= 100; $i++)       
        {
            $this->historicoProducao[$i] = null;
        }
    }

    //List Commodities
    public function listarCommodities()
    {
        //create head of table
        echo "Id | Nome | Hora Produzida|\n";

        for ($i = 1; $i < count($this->tabelaCommodities);$i++)
        {
            //if not was a register on this table, return to message below, else, for each increment, print the data from this table
            if ($this->tabelaCommodities[0] == null) {
                echo "Não há itens cadastrados na tabela!\n";
            } else {
                if ($this->tabelaCommodities[$i] == null) {
                    break;
                } else {
                    if ($this->tabelaCommodities[$i] <> null)
                    {
                        echo $this->tabelaCommodities[$i]->getId()." | ".$this->tabelaCommodities[$i]->getNome()." | ".$this->tabelaCommodities[$i]->getHoraProduzida()." |\n";
                    }
                }
            }

        }

    }

    public function listarHistoricoProducao()
    {

        if ($this->verificarSeTabelaVazia() == false)
        {
            //create head of table
            echo "Id | Qtde | Nome | Tipo |\n";

            for ($i = 1; $i < $this->itensProduzidos;$i++)
            {
                //if not was a register on this table, return to message below, else, for each increment, print the data from this table
                if ($this->historicoProducao[$i] == null) {
                    break;
                } else {
                    if ($this->historicoProducao[$i] <> null)
                    {
                        echo $this->historicoProducao[$i][0]." | ".$this->historicoProducao[$i][1]." | ".$this->historicoProducao[$i][2]." | ".$this->historicoProducao[$i][3]." |\n";
                    }
                }
            } 
        } else {
            echo "Não há itens cadastrados na tabela!\n";
        }
        
    }

    public function fabricar($qtde, $nomeCommodity, $tipoCommodity)
    {

        if (($this->buscarEspaco($this->itensProduzidos + 1) == false) and ($this->verificarLimiteProducao($qtde) == false))
        {
            //this set functions are calle when this method are called, and create the historic production from this factory
            $this->setQtde($qtde);
            $this->setNomeCommodity($nomeCommodity);
            $this->setTipoCommodity($tipoCommodity);


            switch ($tipoCommodity)
            {
                //the switch instruction are used for define the tipe of Commodity, from the enumerated types on the archive sistema.php
                case 1:
                    for ($i = 1;$i <= $qtde; $i++)
                    {
                        $this->itensProduzidos = $this->itensProduzidos + 1; //the cumulated variable
                        $this->tabelaCommodities[$this->itensProduzidos] = new Panela($i, $nomeCommodity, $tipoCommodity); 
                        //Depending on the type of commodity, a corresponding class will be raised
                    }
                    break;
                case 2:
                    for ($i = 1;$i <= $qtde; $i++)
                    {
                        $this->itensProduzidos = $this->itensProduzidos + 1;
                        $this->tabelaCommodities[$this->itensProduzidos] = new Talher($i, $nomeCommodity, $tipoCommodity);
                    }
                    break;                
                case 3:
                    for ($i = 1;$i <= $qtde; $i++)
                    {
                        $this->itensProduzidos = $this->itensProduzidos + 1;
                        $this->tabelaCommodities[$this->itensProduzidos] = new Forma($i, $nomeCommodity, $tipoCommodity);
                    }
                    break;   
                case 4:
                    for ($i = 1;$i <= $qtde; $i++)
                    {
                        $this->itensProduzidos = $this->itensProduzidos + 1;
                        $this->tabelaCommodities[$this->itensProduzidos] = new Prato($i, $nomeCommodity, $tipoCommodity);
                    }
                    break;                                                
                default:
                    //If the type of commodity is not valid, an error message will be returned
                    echo "Tipo não encontrado. A Commodity não será fabricada!\n";
                    break;
            }

            if (($tipoCommodity == 1) or ($tipoCommodity == 2) or ($tipoCommodity == 3) or ($tipoCommodity == 4))
            {

                // this realize the register of data on table historicoProducao

                $this->idProducao = $this->idProducao + 1;

                $this->historicoProducao[$this->idProducao][0] = $this->idProducao;
                $this->historicoProducao[$this->idProducao][1] = $qtde;
                $this->historicoProducao[$this->idProducao][2] = $nomeCommodity;
        
                switch ($tipoCommodity)
                {
                    case 1:
                        $this->historicoProducao[$this->idProducao][3] = "Panela";
                        break;
                    case 2:
                        $this->historicoProducao[$this->idProducao][3] = "Talher";
                        break;
                    case 3:
                        $this->historicoProducao[$this->idProducao][3] = "Forma";
                        break;
                    case 4:
                        $this->historicoProducao[$this->idProducao][3] = "Prato";
                        break;                
                }
        
                //this message appear when the commodity are producing
                echo "Fabricando ".$this->historicoProducao[$this->idProducao][1]." unidades da Commodity ".$this->historicoProducao[$this->idProducao][2]." do tipo ".$this->historicoProducao[$this->idProducao][3]."\n";

                echo "commodities fabricadas com sucesso!\n";
        
            }

        }


    }

    public function __construct()
    {
        //the construct method from this class only call inicializar method
        $this->inicializar();
    }
}




?>