<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testesFuncionais
 *
 * @author alex
 */
class testesFuncionaisTest extends \PHPUnit_Framework_TestCase {

    public $elemento;

    function setUp() {
        $this->elemento = new testesAutomatizados\elements\button\Button('button', 'button', 'button', new testesAutomatizados\elements\label\Label('Botão'));
    }

    function testTipoElemento() {
        $this->assertInstanceOf('\testesAutomatizados\interfaces\InterfaceElement', $this->elemento);
    }

    function tearDown() {
        unset($this->elemento);
    }

}
