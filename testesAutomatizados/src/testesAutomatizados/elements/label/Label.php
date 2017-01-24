<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\label;

use testesAutomatizados\interfaces\InterfaceFullElements;
use testesAutomatizados\interfaces\InterfaceElement;

/**
 * Description of Label
 *
 * @author alex.bertolla
 */
class Label implements InterfaceElement, InterfaceFullElements {

    public $id;
    public $name;
    public $label;
    public $tag;

    public function __construct($label, $name = '', $id = '') {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
    }

    public function abrirTag() {
        $this->tag = "<label>";
    }

    public function setLabel() {
        $this->tag .= $this->label;
    }

    public function fecharTag() {
        $this->tag .= "</label>";
    }

    public function render() {
        $this->abrirTag();
        $this->setLabel();
        $this->fecharTag();
        return $this->tag;
    }

    public function setAttributes() {
        return "id='{$this->id}' name='{$this->name}'";
    }

//put your code here
}
