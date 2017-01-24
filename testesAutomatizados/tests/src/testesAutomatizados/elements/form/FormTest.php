<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormTest
 *
 * @author alex
 */
class FormTest extends PHPUnit_Framework_TestCase {

    public function testForm() {
        $form = new \testesAutomatizados\elements\form\Form('form', 'form', 'post', '$action');
        $button = $this->createMock('\testesAutomatizados\elements\button\Button');
        $button->expects($this->any())->method('render')->willReturn('<button><label>Botao</label></button>');
        $form->addChild($button);
        $this->assertInstanceOf('\testesAutomatizados\interfaces\InterfaceElement', $form->children['']);
    }

}
