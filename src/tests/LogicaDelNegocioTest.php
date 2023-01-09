<?php

namespace Test;

use PHPUnit\Framework\TestCase;

include("../ServidorLogica/LogicaDelNegocio.php");

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
     * testCambiarContrasenya() es una función que comprueba que se puede cambiar la contraseña de un usuario en la BBDD.
     *
     * Hay dos aserciones, una para comprobar que se puede cambiar la contrasenya a un usario existente en BBDD
     * y la otra para devolver al estado original la contrasenya del usuario.
     *
     *
     */
//------------------------------------------------------------------------------------------
    public function testCambiarContrasenya()
    {
        //Comprueba que se puede registrar un usuario no existente en BBDD, si existe, esta asercion dará error
        $this->assertTrue(cambiarContrasenya("prueba@gmail.com", "Prueba12", "PruebaTestCambiarContrasenya"));

        //comprueba que no se puede registrar un usario ya existente
        $this->assertTrue(cambiarContrasenya("prueba@gmail.com", "PruebaTestCambiarContrasenya", "Prueba12"));
    }

    //------------------------------------------------------------------------------------------
    /*
     * testObtenerDatosUsuario() es una función que obtiene los datos de un usuario en la BBDD.
     *
     * Hay una sola aserción que comprueba que los datos obtenidos del usuario son los previamente establecidos.
     *
     *
     */
//------------------------------------------------------------------------------------------
    public function testObtenerDatosUsuario()
    {
        $datosRelativos = obtenerDatosUsuario('prueba@gmail.com');

        //Comprueba que los datos obtenidos del usuario son los esperados
       $this->assertJsonStringEqualsJsonString($datosRelativos , '{"nombre":"Prueba", "correo":"prueba@gmail.com", "idAvatar":"0"}');
    }


    //------------------------------------------------------------------------------------------
    /*
     * testObtenerCalidadAire() es una función que obtiene el porcentaje de concentracion de un gas a lo largo de un día.
     *
     * Hay una sola aserción que comprueba que el porcentaje resultante es los previamente establecidos como prueba.
     *
     *
     */
//------------------------------------------------------------------------------------------
    public function testObtenerCalidadAire()
    {
        $datosRelativos = obtenerCalidadAire('SensorMedidas');


        //Comprueba que los datos obtenidos del usuario son los esperados
        $this->assertEquals($datosRelativos , '16.21');
    }



    //------------------------------------------------------------------------------------------
    /*
     * testAsignarSensor() es una función que asigna un dispositivo sensor a un usuario de la BBDD.
     * La funcion devuelve false cuando el idSensor introducido es erróneo
     *
     * Hay una sola aserción que comprueba que el que se obtiene un sensor en  la busqueda.
     *
     *
     */
//------------------------------------------------------------------------------------------
    public function testAsignarSensor()
    {


        //Comprueba que la funcion devuelve false cuando el idSensor introducido es erróneo
        $this->assertTrue(asignarSensorUsuario("prueba@gmail.com", "wiwowawu"));
    }


    //------------------------------------------------------------------------------------------
    /*
     * testSolicitarDatos() es una función que solicita los datos de todos los sensores de la BBDD.
     *
     *
     * Hay una sola aserción que comprueba que el que se obtienen datos en  la busqueda, es decir, la variable de resultado es no nula.
     *
     *
     */
//------------------------------------------------------------------------------------------
    public function testSolicitarDatos(){

        $this-> assertNotNull(solicitarDatos());
    }
}//class{}



