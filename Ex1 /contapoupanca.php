<?php
require_once ("conta.php");
require_once ("contacorrente.php");

class contapoupanca extends conta{


public function depositarPoupanca ($valor){
    $valor = readline ("- Insira o valor que deseja depositar na poupança: \n");
    $this->saldo = $valor;
    echo "- Deposito de R$ $valor realizado na conta poupança. Poupança: Saldo atual é de: R$ {$this->saldo}\n".PHP_EOL;
}

public function sacar ($valor){
    $valor = readline ("- Insira o valor que deseja sacar da conta poupança: \n".PHP_EOL);
    if ($valor <= $this->saldo) {
        $this->saldo -= $valor;
            echo "- Saque de R$ $valor realizado na conta poupanca. Seu saldo atual é de: R$ {$this->saldo}\n".PHP_EOL;
        }else{
            echo "- Saldo insuficiente\n".PHP_EOL;
        }
    }
    
}

?>