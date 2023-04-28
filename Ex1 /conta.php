<?php

abstract class conta {
    protected $nome;
    protected $saldo;
    protected $id_conta;
 

public function __construct(){
    $this->saldo = 0;
    $this->nome = '';
}


public function depositar ($valor){
    $valor = readline ("- Digite o valor que deseja depositar: \n");
    $this->saldo = $valor;
        echo "- Deposito de R$ $valor realizado. Seu saldo atual é de: R$ {$this->saldo}\n".PHP_EOL;
}


public function sacar ($valor){
    $valor = readline ("- Digite o valor que deseja sacar: \n");
    if ($valor <= $this->saldo) {
        $this->saldo -= $valor;
            echo "- Saque de R$ $valor realizado. Seu saldo atual é de: R$ {$this->saldo}\n".PHP_EOL;
        }else{
            echo "- Saldo insuficiente\n".PHP_EOL;
        }
    }

public function getSaldo(){
    return $this->saldo;
}


public function checarSaldo(){
        echo "----------Seja bem-vindo a sua conta----------\n";
        echo "----------O seu saldo atual é de R$ {$this->saldo}---------\n".PHP_EOL;
    }
}




?>