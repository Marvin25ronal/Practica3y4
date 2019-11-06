<?php
use PHPUnit\Framework\TestCase;

class pruebaCambio extends TestCase
{
  public function testCambio1(){
    include_once __DIR__."\../../Tipo Cambio/Diario.php";
    $cam=new CambioDiario();

    $this->assertEquals(is_array($cam->Cambio()),false);
    $this->assertEquals(is_array($cam->Cambio()),true);
  }
  public function testCambio2(){
    include_once __DIR__."\../../Tipo Cambio/FechaInicial.php";
    $cam=new CambioFechaInicial();
    $this->assertEquals(is_array($cam->Cambio("2019-10-10")),true);
    $this->assertEquals($cam->Cambio("error"),1);
    $this->assertEquals($cam->Cambio("2020-10-10"),2);
  }
}
 ?>
