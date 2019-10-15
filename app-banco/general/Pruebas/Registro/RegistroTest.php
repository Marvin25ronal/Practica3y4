<?php
include_once (__DIR__."\..\..\Registro_Usuarios\Registro.php");
use PHPUnit\Framework\TestCase;
class PruebaRegistro extends TestCase
{
  public function iniciarPrueabas(){
    echo "PRUEBAS REGISTRO DE USUARIOS ----------------------------------";
    $this->testRegistroCorrecto();
    $this->testRegistroIncorrecto();
  }

  public function testRegistroCorrecto(){
    //Crear usuario
    $this->assertSame(true,crear_usuario("Andrea Sofia", "Molina Rodriguez", 3025162585025, 100.00, "andrea@correo.com", "123"));
  }

  public function testRegistroIncorrecto(){
    //Prueba 2: Sin DPI
    $this->assertSame(false,crear_usuario("Andrea Sofia", "Molina Rodriguez", null, 100.00, "andrea@correo.com", "123"));
    //Prueba 3: Sin nombre
    $this->assertSame(false,crear_usuario(null, "Molina Rodriguez", 3025162585025, 100.00, "andrea@correo.com", "123"));
    //Prueba 4: Sin apellidos
    $this->assertSame(false,crear_usuario("Andrea Sofia", null, 3025162585025, 100.00, "andrea@correo.com", "123"));
    //Prueba 5: Sin saldo inicial
    $this->assertSame(false,crear_usuario("Andrea Sofia", "Molina Rodriguez", 3025162585025, null, "andrea@correo.com", "123"));
    //Prueba 6: Sin correo
    $this->assertSame(false,crear_usuario("Andrea Sofia", "Molina Rodriguez", 3025162585025, 100.00, null, "123"));
    //Prueba 7: DPI invalido
    $this->assertSame(false,crear_usuario("Andrea Sofia", "Molina Rodriguez", "hola", 100.00, null, "123"));
    //Prueba 8: saldo invalido
    $this->assertSame(false,crear_usuario("Andrea Sofia", "Molina Rodriguez", 3025162585025, "numero", null, "123"));
  }
}


?>
