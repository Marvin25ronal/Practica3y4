<?php

include_once(__DIR__ . "\..\..\BaseDatos\Funciones.php");

use PHPUnit\Framework\TestCase;

class PruebaTransferencia extends TestCase
//class PruebaLogin extends PHPUnit_Framework_TestCase
{
    public function CorrerTodo()
    {
        $this->testTransferenciaExitosa();
        $this->testTransferenciaNegativa();
        $this->testTransferenciaConCuentaInvalida();
        $this->testTransferenciaConFondosInsuficientes();
    }

    public function testTransferenciaExitosa()
    { //retorna 1
        $this->assertEquals(1, transferencia(0, 1, 20));
    }

    public function testTransferenciaNegativa()
    { //retorna 2
        $this->assertEquals(2, transferencia(0, 1, -100)); //jackson
    }

    public function testTransferenciaConCuentaInvalida()
    { //retorna 3
        $this->assertEquals(3, transferencia(0, -1, 100)); //jackson
    }

    public function testTransferenciaConFondosInsuficientes()
    { //retorna 4
        $this->assertEquals(4, transferencia(0, 1, 1000000000));//jackson
    }

    public function testTransferenciaAsiMismo()
    { //retorna 5
        $this->assertEquals(5, transferencia(0, 0, 100));
    }

}
