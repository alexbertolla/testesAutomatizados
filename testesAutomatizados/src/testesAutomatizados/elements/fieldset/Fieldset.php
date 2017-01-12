<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\fieldset;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceFullElements;

/**
 * Description of Filedset
 *
 * @author alex.bertolla
 */
class Fieldset implements InterfaceElement, InterfaceFullElements {

    private $tag;
    public $name;
    private $id;
    private $children;

    public function __construct($name, $id) {


        if (!is_string($name)) {
            throw new \Exception('Os campos nome deve ser um campo texto');
        }

        if (!is_numeric($id)) {
            throw new \Exception('O campo id deve ser numérico!');
        }

        $this->name = $name;
        $this->id = $id;
        $this->children = [];
    }

    function addChild(InterfaceElement $element) {
        $this->children[] = $element;
    }

    public function renderChildren() {
        foreach ($this->children as $child) {
            $this->tag .= $child->render();
        }
    }

    public function abrirTag() {
        $attributes = $this->setAttributes();
        $this->tag = "<fieldset {$attributes}>";
    }

    public function fecharTag() {
        $this->tag .= "</fieldset>";
    }

    public function render() {
        $this->abrirTag();
        $this->renderChildren();
        $this->fecharTag();
        return $this->tag;
    }

    public function setAttributes() {
        return " name='{$this->name}'"
                . " id='{$this->id}' ";
    }

}
