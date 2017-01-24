<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\select;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceFullElements;
use testesAutomatizados\elements\label\Label;

/**
 * Description of Select
 *
 * @author alex
 */
class Select implements InterfaceElement, InterfaceFullElements {

    public $id;
    public $name;
    public $tag;
    public $label;
    public $children;
    public $multselction;

    public function __construct($name, $id, $multselection = FALSE, Label $label = NULL) {
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->multselction = $multselection;
        $this->children = [];
    }

    public function addChild($value, $text) {
        $this->children[] = "<option value='{$value}'> {$text} </option>";
    }

    private function renderChildren() {
        if (count($this->children) > 0) {
            foreach ($this->children as $option) {
                $this->tag .= $option;
            }
        }
    }

    public function render() {

        $this->abrirTag();
        $this->renderChildren();
        $this->fecharTag();
        $this->setLabel();
        return $this->tag;
    }

    public function setAttributes() {
        $multiple = ($this->multselction) ? "multiple='{$this->multselction}'" : '';
        return "id='{$this->id}' "
                . " name='{$this->name}' "
                . " {$multiple} ";
    }

    public function abrirTag() {
        $attributes = $this->setAttributes();
        $this->tag = "<select {$attributes}>";
    }

    public function setLabel() {
        $this->tag = $this->label->render() . $this->tag;
    }

    public function fecharTag() {
        $this->tag .= '</select>';
    }

}
