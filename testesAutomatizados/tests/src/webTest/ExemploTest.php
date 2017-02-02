<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExemploTeste
 *
 * @author alex
 */
class ExemploTest extends PHPUnit_Extensions_Selenium2TestCase {

    public function setUp() {
        $this->setBrowser('opera');
        $this->setBrowserUrl('http://localhost/testesAutomatizados/index.php');
    }

    function testVerificarTitle() {
        $this->assertEquals('Testes Automatizados', $this->title());
    }

    
    function testCampoNome(){
        $campoNome = $this->byId('nome');
        $this->assertEquals('Ford Fiesta', $campoNome->value());
    }
}
