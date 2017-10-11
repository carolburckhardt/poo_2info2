<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 06/10/17
 * Time: 11:46
 */
require_once "Funcionario.php";

class Gerente extends Funcionario
{
    public $senhaCofre;
    public $quantidadeFuncionariosGerenciados;

    function __construct($nomeInformado)
    {
        parent::__construct($nomeInformado);
    }
 public function getBonificacao()
 {
     return parent::getBonificacao() + $this -> salario * 0.05;
 }
}

