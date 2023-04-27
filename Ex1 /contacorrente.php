<?php
require_once ("conta.php");
require_once ("contapoupanca.php");

class contacorrente extends conta {


    public function transferencia ($contaDestino, $valor){
        
        if ($valor <= $this->saldo) {
        $this->saldo -= $valor;
        $contaDestino->depositar($valor);
        echo "Transfêrencia de R$ $valor realizada para a conta de {$contaDestino}\n";  //nome
        } else {     
            echo "Saldo insuficiente";
        }
          
    } 


    public function sacar ($valor){
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
                echo "Saque de R$ $valor realizado na conta corrente. Seu saldo atual é de: R$ {$this->saldo}\n";
            }else{
                echo "Saldo insuficiente\n";
            }
        }
    
    
}

?>