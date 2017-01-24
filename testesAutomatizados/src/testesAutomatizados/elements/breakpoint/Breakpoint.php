<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\breakpoint;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceEmptyElements;

/**
 * Description of Breakpoint
 *
 * @author alex.bertolla
 */
class Breakpoint implements InterfaceElement, InterfaceEmptyElements {

    public $tag;
    public $id;
    public $name;

    public function __construct($name = '') {
        $this->id = $name;
        $this->name = $name;
        $this->declararTag();
    }

    public function render() {
        return $this->tag;
    }

    public function setAttributes() {
        return "id='{$this->id}'";
    }

    public function declararTag() {
        $atttribute = $this->setAttributes();
        $this->tag = "<br {$atttribute} />";
    }

//put your code here
}
