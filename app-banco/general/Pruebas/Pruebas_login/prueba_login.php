<?php



include_once(__DIR__ . "\..\..\BaseDatos\Consultas.php");

use PHPUnit\Framework\TestCase;

class PruebaLogin extends TestCase
//class PruebaLogin extends PHPUnit_Framework_TestCase
{

    public function CorrerTodo()
    {
        $this->testLoginCorrecto();
        $this->testLoginIncorrecta();
    }

    public function testLoginCorrecto()
    { //si esta correcto deberia de devolver un 1

        $this->assertEquals(1, login(0, '123'));
    }

    //se habia pensado tener tres casos siento estos:
    // * Login correcto
    // * Cuenta inexistente
    // * Contrasenia erronea
    // pero debido a la seguridad es mejor solo indicar que ha ocurrido un error y no indicas
    // si existe o no dicha cuenta

    public function testLoginIncorrecta()
    { //si la cuenta o la contrasenia son erroneas no ingresara
        $this->assertEquals(0, login(-1, '123'));
        $this->assertEquals(0, login(0, '1234'));
    }
}
