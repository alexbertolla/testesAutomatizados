<?php

namespace testesAutomatizados;

class MathTest extends \PHPUnit_Framework_TestCase {

    public function testTipoInstancia() {
        $this->assertInstanceOf("testesAutomatizados\Math", new \testesAutomatizados\Math());
    }
    
    

}
