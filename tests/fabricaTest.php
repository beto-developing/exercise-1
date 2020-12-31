<?php
namespace exercise_1;

require __DIR__ . '\..\src\Fabricas\fabricas.php';
require __DIR__ . '\..\src\Commodities\Commodities.php';

use src\Fabrica_generica\fabricas;
use PHPUnit\Framework\TestCase;

final class TestFabrica extends TestCase
{
    /**
     * @test
     */
    public function limiteProducao()
    {
        $fabricaTeste = new fabricaGeral();

        $fabricaTeste->fabricar(50, "Tramontina", 1);

        $this->assertEquals(true, $fabricaTeste->verificarLimiteProducao(101));
    }

     /**
     * @test
     */
      public function verificarSeTabelaVazia()
    {
        $fabricaTeste = new fabricaGeral();

        $fabricaTeste->fabricar(50, "Tramontina", 1);

        $this->assertEquals(false, $fabricaTeste->verificarSeTabelaVazia());
    }


    /**
     * @test
     */
      
    public function buscarEspaco()
    {
        $fabricaTeste = new fabricaGeral();

        $fabricaTeste->fabricar(50, "Tramontina", 1);

        $this->assertEquals(false, $fabricaTeste->buscarEspaco(3));
    }

}

?>