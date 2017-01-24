<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace testesAutomatizados\interfaces;

use testesAutomatizados\interfaces\InterfaceElement;

/**
 *
 * @author alex.bertolla
 */
interface InterfaceElementHasChildren {

    public function addChild(InterfaceElement $element);

    public function renderChildren();
}
