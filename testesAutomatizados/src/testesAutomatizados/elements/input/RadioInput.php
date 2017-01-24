<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\input;

use testesAutomatizados\elements\input\AbstractInput;
use testesAutomatizados\elements\label\Label;

/**
 * Description of RadioInput
 *
 * @author alex
 */
class RadioInput extends AbstractInput {

    public $checked;

    public function __construct($name, $id, $value, $checked, Label $label) {
        parent::__construct($name, $id, $value, 'radio', $label);
        $this->checked = $checked;
    }

    public function declararTag() {

        $this->input = "<input {$this->setAttributes()} />";
    }

    public function setAttributes() {
        $attributes = parent::setAttributes();
        $attributes .= ($this->checked) ? 'checked=\'checked\'' : '';
        return $attributes;
    }

    public function render() {
        $this->declararTag();
        $this->setLabel();
        return $this->input;
    }

    public function setLabel() {
        $this->input = $this->label->render() . $this->input;
    }

}
