<?php
include_once (__DIR__."\..\..\Consulta_saldo\Saldo.php");
use PHPUnit\Framework\TestCase;
class PruebaRegistro extends TestCase
{
  public function iniciarPrueabas(){
    echo "PRUEBAS REGISTRO DE USUARIOS ----------------------------------";
    $this->testConsultaCorrecta();
    $this->testConsultaIncorrecta();
  }

  public function testConsultaCorrecta(){
    //Prueba 2: Consulta correcta
    $this->assertSame('80.53',consultar_saldo(22));
  }

  public function testConsultaIncorrecta(){
    //Prueba 1: Cuenta no existe
    $this->assertSame(-1,consultar_saldo(0000));
  }
}


?>
