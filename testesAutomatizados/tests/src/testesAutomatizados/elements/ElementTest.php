<?php

namespace testesAutomatizados\elements;

class ElementTest extends \PHPUnit_Framework_TestCase {

    public function testTipoClasse() {
        $this->assertInstanceOf('testesAutomatizados\elements\Element', new Element());
    }

    public function testTipoInterFace() {
        $this->assertInstanceOf('testesAutomatizados\interfaces\InterfaceElement', new Element());
    }

    /**
     * @expectedException \Exception;
     */
    public function testTipoClasseFieldset() {
        $fieldset = new fieldset\Fieldset('fieldset', 'a');
    }

}
