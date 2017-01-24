<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FieldsetTest
 *
 * @author alex
 */
class FieldsetTest extends PHPUnit_Framework_TestCase {

    public function testFieldset() {
        $button = $this->createMock('\testesAutomatizados\elements\button\Button');
        $button->expects($this->any())->method('render')->willReturn('<button><label>Botao</label></button>');

        $fieldset = new \testesAutomatizados\elements\fieldset\Fieldset('fieldset', 'fieldset');
        $fieldset->addChild($button);
        for ($i = 0; $i < count($fieldset->children); $i++) {
            $this->assertInstanceOf('\testesAutomatizados\interfaces\InterfaceElement', $fieldset->children[$i]);
        }
    }

}
