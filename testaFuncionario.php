<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Data.php";
    require_once "classes/Gerente.php";
    require_once "classes/ControleBonificacoes.php";

    $jorge = new Gerente("Jorge Samba");
    $jorge->setSalario(3000);

    echo $jorge->getBonificacao();

    $carol = new Funcionario("Carol Burck");
    $carol -> setSalario(800);

    $controle = new ControleBonificacoes();
    $controle ->registra ($carol);
    $controle->registra($jorge);

    $controle-> mostra();