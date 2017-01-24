<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ButtonTest
 *
 * @author alex
 */
class ButtonTest extends PHPUnit_Framework_TestCase {

    public function testButton() {
        $label = $this->createMock('\testesAutomatizados\elements\label\Label');
        $label->expects($this->any())->method('render')->willReturn('<label>Botao</label>');

        $button = new testesAutomatizados\elements\button\Button('button', 'button', 'button', $label);
        $this->assertEquals('<button ><label>Botao</label></button>', $button->render());
    }

}
