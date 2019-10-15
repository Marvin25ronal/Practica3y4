<?php
include_once (__DIR__."\..\..\Registro_Usuarios\Registro.php");
use PHPUnit\Framework\TestCase;
class PruebaRegistro extends TestCase
{
  public function iniciarPrueabas(){
    $this->testRegistroCorrecto();
  }
  public function testRegistroCorrecto(){
    //Crear usuario
    $this->assertSame(true,crear_usuario("Andrea Sofia", "Molina Rodriguez", 3025162585025, 100.00, "andrea@correo.com", "123"));
  }
}


?>
