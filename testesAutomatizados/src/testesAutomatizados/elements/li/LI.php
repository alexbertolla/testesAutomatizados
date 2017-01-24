<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\li;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceFullElements;
use testesAutomatizados\interfaces\InterfaceElementHasChildren;

/**
 * Description of IL
 *
 * @author alex.bertolla
 */
class LI implements InterfaceElement, InterfaceFullElements, InterfaceElementHasChildren {

    public $id;
    public $name;
    public $tag;
    public $children;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
        $this->children = [];
        $this->abrirTag();
    }

    public function abrirTag() {
        $attributes = $this->setAttributes();
        $this->tag = "<li {$attributes} >";
    }

    public function addChild(InterfaceElement $element) {
        $this->children[$element->name] = $element;
    }

    public function fecharTag() {
        $this->tag.='</li>';
    }

    public function render() {
        $this->tag .= $this->renderChildren();
        $this->fecharTag();
        return $this->tag;
    }

    public function renderChildren() {
        $children = '';
        foreach ($this->children as $child) {
            $children .= $child->render();
        }
        return $children;
    }

    public function setAttributes() {
        return "name='{$this->name}, id='$this->id'";
    }

//put your code here
}
