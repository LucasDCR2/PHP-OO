<?php
require_once ("conta.php");
require_once ("contacorrente.php");

class contapoupanca extends conta{


    public function depositarPoupanca ($valor){
        $this->saldo = $valor;
        echo "Deposito de R$ $valor realizado na conta poupança. Poupança: Saldo atual é de: R$ {$this->saldo}\n";
    }

    public function sacar ($valor){
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
                echo "Saque de R$ $valor realizado na conta poupanca. Seu saldo atual é de: R$ {$this->saldo}\n";
            }else{
                echo "Saldo insuficiente\n";
            }
        }
    
}

?>