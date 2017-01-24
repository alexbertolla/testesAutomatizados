<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\button;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceFullElements;
use testesAutomatizados\elements\label\Label;

/**
 * Description of Button
 *
 * @author alex.bertolla
 */
class Button implements InterfaceElement, InterfaceFullElements {

    public $id;
    public $name;
    public $tag;
    public $type;
    public $label;

    public function __construct($name, $id, $type, Label $label) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }

    public function abrirTag() {
        $this->tag = "<button "
                . ">";
    }

    public function fecharTag() {
        $this->tag .= '</button>';
    }

    public function setLabel() {
        $this->tag .= $this->label->render();
    }

    public function render() {
        $this->abrirTag();
        $this->setLabel();
        $this->fecharTag();
        return $this->tag;
    }

    public function setAttributes() {
        return "id='{$this->id}' "
                . " name='{$this->name}'"
                . " type='{$this->type}' ";
    }

//put your code here
}
