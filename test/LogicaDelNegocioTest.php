<?php

namespace Test;

use PHPUnit\Framework\TestCase;

include("src/ServidorLogica/LogicaDelNegocio.php");

final class LogicaDelNegocioTest extends TestCase
{
//------------------------------------------------------------------------------------------
    /*
     * testComprobarCredenciales() es una función que comprueba que existan esa combinacion de correo y contraseña en la BBDD.
     *
     * Hay dos aserciones, una para comprobar que devuelve true al introducir como parámetros correo y contraseña conocidos
     * y la otra para comprobar que devuelve false si te has equivocado en el correo o la contraseña.
     *
     *
     */
//------------------------------------------------------------------------------------------
    public function testComprobarCredenciales()
    {

        $this->assertTrue(comprobarCredenciales("prueba@gmail.com", "Prueba12"), "Algun error buscando usuario");

        $this->assertEquals(false, comprobarCredenciales("prueb@gmail.com", "Prueba"), "El correo y contraseña existen en BBDD");
    }


}

