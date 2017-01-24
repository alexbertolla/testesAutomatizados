<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\input;

use testesAutomatizados\elements\input\AbstractInput;
use testesAutomatizados\interfaces\InterfaceInput;
use testesAutomatizados\elements\label\Label;

/**
 * Description of TextInput
 *
 * @author alex
 */
class TextInput extends AbstractInput implements InterfaceInput {

    public $placeholder;

    public function __construct($name, $id, $value, Label $label = NULL, $placeholder = '') {
        parent::__construct($name, $id, $value, 'text', $label);
        $this->placeholder = $placeholder;
    }

    public function declararTag() {
        $attributes = $this->setAttributes();
        $this->input = "<input {$attributes} / >";
    }

    public function setAttributes() {
        $attributes = parent::setAttributes();
        $attributes .= "placeholder='{$this->placeholder}'";
        return $attributes;
    }

    public function render() {
        $this->declararTag();
        $this->setLabel();
        return $this->input;
    }

    public function setLabel() {
        if ($this->label) {
            $this->input = $this->label->render() . $this->input;
        }
    }

    

}
