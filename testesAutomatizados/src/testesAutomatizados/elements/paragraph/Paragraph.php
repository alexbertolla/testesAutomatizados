<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\paragraph;

use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\interfaces\InterfaceFullElements;

/**
 * Description of Paragraph
 *
 * @author alex.bertolla
 */
class Paragraph implements InterfaceElement, InterfaceFullElements {

    public $id;
    public $name;
    public $tag;
    public $contentLine;

    public function __construct(InterfaceElement $elemento = NULL, $name = '', $id = '') {
        $this->id = $id;
        $this->name = $name;
        $this->contentLine = array();
        $this->contentLine[] = $elemento;
    }

    public function abrirTag() {
        $this->tag = '<p>';
    }

    public function fecharTag() {
        $this->tag .= '</p>';
    }

    public function addContentLine($element) {
        $this->contentLine[] = $element;
    }

    public function renderContentLine() {
        foreach ($this->contentLine as $content) {
            if ($content) {
                $this->tag .= $content->render();
            }
        }
    }

    public function render() {
        $this->abrirTag();
        $this->renderContentLine();
        $this->fecharTag();
        return $this->tag;
    }

    public function setAttributes() {
        return "id='{$this->id}' name='{$this->name}'";
    }

//put your code here
}
