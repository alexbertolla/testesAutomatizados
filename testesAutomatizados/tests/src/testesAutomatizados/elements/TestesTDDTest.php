<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestesTDDTest
 *
 * @author alex
 */
class TestesTDDTest extends PHPUnit_Framework_TestCase {

    function testCriarFormulario() {
        $form = new \testesAutomatizados\elements\form\Form('form', 'form', 'post', 'action');
        $retorno = "<form  name='form'  id='form'  method=post  action=action  ><ul name='header, id='header' ></ul> </form>";
        $this->assertEquals($retorno, $form->render());
    }

    function testAddFieldset() {
        $fieldset = new \testesAutomatizados\elements\fieldset\Fieldset('fieldset', 'fieldset');
        $input = new \testesAutomatizados\elements\input\TextInput('nome', 'nome', 'Alex Bertolla');

        $form = new \testesAutomatizados\elements\form\Form('form', 'form', 'post', 'action');
        $form->createField($input, $fieldset);
        $render = $form->renderField('fieldset');
        $retorno = "<form  name='form'  id='form'  method=post  action=action  ><fieldset  name='fieldset' id='fieldset' ><input  type='text'  name='nome'  id='nome'  value='Alex Bertolla' placeholder='' / ></fieldset> </form>";
        $this->assertEquals($retorno, $render);
    }

    function testRenderFieldSetNaoExistente() {
        $fieldset = new \testesAutomatizados\elements\fieldset\Fieldset('fieldset', 'fieldset');
        $input = new \testesAutomatizados\elements\input\TextInput('nome', 'nome', 'Alex Bertolla');

        $form = new \testesAutomatizados\elements\form\Form('form', 'form', 'post', 'action');
        $form->createField($input, $fieldset);
        $render = $form->renderField('ABC');
        $retorno = "elemento ABC não existe no formulário!";
        $this->assertEquals($retorno, $render);
    }

}
