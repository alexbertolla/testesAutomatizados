<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\elements\form\validators;

use testesAutomatizados\elements\form\requests\Request;
use testesAutomatizados\interfaces\InterfaceElement;
use testesAutomatizados\elements\li\LI;
use testesAutomatizados\elements\label\Label;

/**
 * Description of Validator
 *
 * @author alex.bertolla
 */
class Validator extends Request {

    private $form;

    public function __construct($form) {
        $this->form = $form;
        parent::__construct();
    }

    protected function validarCampoVazio(InterfaceElement $element) {
        if (strlen($element->value) == 0) {
            $this->addErrorMessagem(new Label("Campo {$element->name} não pode ser vazio!", 'campoVazio'));
            return FALSE;
        }
        return TRUE;
    }

    protected function validarCampoNumerico(InterfaceElement $element) {
        if (!is_numeric($element->value)) {
            $this->addErrorMessagem(new Label("O valor do campo {$element->name} deve ser numérico!", 'campoNumerico'));
            return FALSE;
        }
        return TRUE;
    }

    protected function validarCampoMaxLenght(InterfaceElement $element) {
        if (strlen($element->value) > 200) {
            $this->addErrorMessagem(new Label("Campo {$element->name} não deve conter mais que 200 caracteres!", 'campoMaxLenght'));
            return FALSE;
        }
        return TRUE;
    }

    private function addErrorMessagem(Label $errorMassage) {
        $li = new LI($errorMassage->name, $errorMassage->name);
        $li->addChild($errorMassage);
        $this->form->addMessageToHeader($li);
    }

}
