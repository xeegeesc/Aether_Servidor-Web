<?php

namespace Test;

use PHPUnit\Framework\TestCase;

include("../src/ServidorLogica/LogicaDelNegocio.php");

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



//------------------------------------------------------------------------------------------
/*
 * testRegistrarUsuario() es una función que comprueba que se puede registrar un usuario en la BBDD.
 *
 * Hay dos aserciones, una para comprobar que se puede registrar un usario no existente en BBDD
 * y la otra para comprobar que devuelve false si ya existe el usuario a registrar.
 *
 *
 */
//------------------------------------------------------------------------------------------
public function testRegistrarUsuario()
{
    //Comprueba que se puede registrar un usuario no existente en BBDD, si existe, esta asercion dará error
    $this->assertTrue(registrarUsuario("PruebaTest", "pruebaTest@gmail.com", "PruebaTest"));

    //comprueba que no se puede registrar un usario ya existente
    $this->assertNotTrue(registrarUsuario("Prueba", "prueba@gmail.com", "Prueba12"));
}

//------------------------------------------------------------------------------------------
    /*
     * testGuardarMedicion() es una función que comprueba que se puede guardar una medicion en la BBDD.
     *
     * Hay una asercion para comprobar que se puede registrar una medicion en BBDD.
     *
     */
//------------------------------------------------------------------------------------------
public function testGuardarMedicion(){

    $this->assertTrue(guardarMedicion("SensorTestUnitario", "8888", "1667407607", "38.6555777", "-0.8888888"));

}


//------------------------------------------------------------------------------------------
    /*
     * testGetMediciones() es una función que comprueba que se pueden obtener toddas las mediciones de la BBDD, así como la ultima medicion guardada en la BBDD.
     *
     * Hay una asercion para comprobar que se puede obtener la última medicion en BBDD y otra para obtenerlas todas.
     *
     */
//------------------------------------------------------------------------------------------
    public function testGetMediciones(){

        $this->assertTrue(obtenerMediciones());

        $this->assertTrue(obtenerUltimaMedicion());

    }
}//class{}

