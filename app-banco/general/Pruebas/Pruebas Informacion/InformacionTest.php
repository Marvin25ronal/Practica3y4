<?php
use PHPUnit\Framework\TestCase;
//prueba jenkins1
//prueba fallida jenkins
//corregir prueba
class pruebaInformacion extends TestCase
{
  public function testInformacion(){
    include_once __DIR__."\../../BaseDatos/Consultas.php";
    $this->assertEquals(is_array(obtenerDatos(1)),true);
    $this->assertEquals(is_array(obtenerDatos(100)),false);
  }
}
 ?>
