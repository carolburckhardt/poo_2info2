<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 30/08/17
 * Time: 16:11
 */


require 'classes/Conta.php';

$minhaConta = new Conta();
$minhaConta->dono  = "Jefferson";
$minhaConta->deposita(1000);
$conseguiSacar = $minhaConta->saca(400);

//echo ($conseguiSacar)? 'consegui sacar' : 'nao consegui sacar';

$meuSonho = new Conta();
$meuSonho->dono = "Jefferson";
$meuSonho->deposita(1000000);


$meuSonho->transferePara($minhaConta, 500000);

print "O cliente {$minhaConta->dono} tem saldo de {$minhaConta->getSaldo()}";
