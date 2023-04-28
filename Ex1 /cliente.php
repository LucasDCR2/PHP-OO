<?php
require_once('contacorrente.php');
require_once('contapoupanca.php');
require_once('conta.php');


$conta1 = new contacorrente ();
$conta1->checarSaldo();
$conta1->depositar(0);
$conta1->sacar(0);


$conta1 = new contapoupanca ();
$conta1->checarSaldo();
$conta1->depositarPoupanca(0);
$conta1->sacar(0);



$conta2 = new contacorrente ();
$conta1->checarSaldo();
$conta2->sacar(0);
$conta2->depositar(0);
$conta2->sacar(0);
$conta2->transferencia($conta1, 0);



$conta2 = new contapoupanca ();
$conta1->checarSaldo();
$conta2->depositar(0);
$conta2->sacar(0);


?>