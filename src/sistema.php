<?php

//archives space
namespace exercise_1;

//archives diretories
require __DIR__ . '\Fabricas\fabricas.php';
require __DIR__ . '\Commodities\Commodities.php';

use exercise_1\Fabricas\fabricas;
use exercise_1\Commodities\commodities;

//enumerated types of commodities
const PANELA = 1;
const TALHER = 2;
const FORMA = 3;
const PRATO = 4;

class sistema
{
    //control variable
    public $opcao = 0; 

    //Commodity Factory
    public $fabrica; 

    //catch keys of keyboard
    /*@param string $nome
    *@param int $tipo
    *@param int $qtde
    */
    public $nome;
    public $tipo;
    public $qtde;

    //executable of system
    public function executar()
    {
        //Intro Menu
        while ($this->opcao == 0)
        {
            echo "Bem vindo a Fábrica de Commodities!\n";
            echo "Para listar fabricação das Commodities, digite 1, para sair, digite 2.\n";

            //Enter the Option
            $this->opcao = readline("Digite uma opção: ");

            //If opcao is not 0. 1 or 2, is invalid
            if (($this->opcao <> 0) and ($this->opcao <> 1) and ($this->opcao <> 2))
            {
                echo "Opção Inválida!\n";
                $this->opcao = 0;
            } elseif ($this->opcao == 1){
                while ($this->opcao == 1)
                {
                    //list the production historic
                    $this->fabrica->listarHistoricoProducao();

                    echo "Para fabricar commodity, digite 1, ou digite 0 para retornar.\n";
    
                    $this->opcao = readline("Digite uma opção: ");
    
                    if ($this->opcao == 0)
                    {
                        echo "Retornando!\n";
                    } elseif ($this->opcao == 1){
                        //insert data for factoring the Commodity
                        echo "Digite os dados solicitados para fabricar a commodity.\n";

                        $this->nome = readline("Digite um nome para a commodity: ");

                        $this->tipo = readline("Digite o tipo da commodity: ");
                        $this->qtde = readline("Digite a quantidade da commodity(apenas números inteiros): ");

                        //call method "Fabricar" from class "fabrica"
                        $this->fabrica->fabricar($this->qtde, $this->nome, $this->tipo);

                        $this->opcao = 1;
                    }
                }

            } elseif ($this->opcao == 2){
                //exit the program
                echo "Até logo!\n";
            }
        }

    }

    public function inicializar()
    {
        //when the program is initialyzed, the factory "fabrica" are created
        $this->fabrica = new fabricaGeral();
    }

    public function __construct()
    {
        //when the system are created, this function, "__construct" are automaticad called, then the functions "inicializar" and "executar" are called. 
        $this->inicializar();
        $this->executar();
    }

}

//create the system
new sistema();



?>
