<?php
require_once ("conta.php");
require_once ("contapoupanca.php");

class contacorrente extends conta {


public function transferencia ($contaDestino, $valor){

    $valor = readline ("Insira o valor que deseja transferir: \n");
    if ($valor <= $this->saldo) {
    $this->saldo -= $valor;
    $contaDestino->depositar($valor);
    echo "- Transfêrencia de R$ $valor realizada para a conta de {$contaDestino}\n".PHP_EOL;  //nome
    } else {     
        echo "- Saldo insuficiente".PHP_EOL;
        
    }
          
} 


public function sacar ($valor){
    $valor = readline ("- Digite o valor que deseja sacar da conta corrente: \n");
    if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "- Saque de R$ $valor realizado. Seu saldo atual é de: R$ {$this->saldo}\n".PHP_EOL;
        }else{
            echo "- Saldo insuficiente\n".PHP_EOL;
        }
    }

}

?>