<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BreakpointTets
 *
 * @author alex
 */
class BreakpointTest extends PHPUnit_Framework_TestCase {

    public function testBreakpoint() {
        $br = new testesAutomatizados\elements\breakpoint\Breakpoint('br');
        $this->assertEquals("<br id='br' />", $br->render());
    }

}
