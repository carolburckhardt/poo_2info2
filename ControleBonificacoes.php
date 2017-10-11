<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 11/10/17
 * Time: 16:26
 */
class ControleBonificacoes
{
    private $totalPago = 0;

    public function registra(Funcionario $funcionario)
    {

        $this->totalPago += $funcionario->getBonificacao();

    }

    public function getTotalPago(): float
    {
        return $this->totalPago;
    }


    public function mostra()
    {

        echo "O total de bonificaçôes pagas pelo banco foi de: " . $this->getTotalPago();
    }

}