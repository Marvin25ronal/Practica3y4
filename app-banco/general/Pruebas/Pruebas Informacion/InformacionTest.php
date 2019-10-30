<?php
use PHPUnit\Framework\TestCase;


include_once __DIR__."\../../ObtenerDatos/ObtenerDatos.php";
class pruebaInformacion extends TestCase
{
  public function testInformacion(){
    $obt=new obtenerDatos();
    $this->assertEquals(is_array($obt->obtenerDatos(1)),true);
    $this->assertEquals(is_array($obt->obtenerDatos(100)),false);
  }
}
 ?>
