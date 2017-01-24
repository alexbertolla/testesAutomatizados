<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\input;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceEmptyElements;
use testesAutomatizados\elements\label\Label;
use testesAutomatizados\interfaces\InterfaceEditbleElement;

/**
 * Description of AbstractInput
 *
 * @author alex
 */
abstract class AbstractInput implements InterfaceElement, InterfaceEmptyElements, InterfaceEditbleElement {

    public $name;
    public $id;
    public $input;
    public $value;
    public $type;
    public $label;

    public function __construct($name, $id, $value, $type, Label $label = NULL) {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->label = $label;
    }

    public function setAttributes() {
        return " type='{$this->type}' "
                . " name='{$this->name}' "
                . " id='{$this->id}' "
                . " value='{$this->value}' ";
    }

    public function setValue($value) {
        $this->value = $value;
    }

}
