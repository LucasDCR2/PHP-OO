<?php
require_once('contacorrente.php');
require_once('contapoupanca.php');
require_once('conta.php');


$conta1 = new contacorrente ();
$conta1->depositar(1000);
$conta1->checarSaldo();
$conta1->sacar(500);
$conta1->transferencia($conta2, 3533);


$conta2 = new contapoupanca ();
$conta2->depositar(2000);
$conta2->sacar(500);


?>