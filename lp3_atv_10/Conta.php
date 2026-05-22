<?php

class Conta {
    public int $numero;
    public string $titular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;

    public function depositar(float $valor){
        if($valor > 0){
            $this->saldo += $valor;
        }
        else{
            echo "O valor deve ser um numero valido";
        }

    }
    public function sacar(float $valor){
        if($valor > 0 && $valor <= $this-> saldo)
            $this->saldo =- $valor;
            
        else
            echo"Não é Possivel fazer esta operação. Motivo: Saldo Insuficiente <br>";

    }
    public function transferir(float $valor, Conta $destino){
        if(!empty($destino)&& $valor > 0 && $valor >=$this->saldo && $this->status == "ativo"){
        $destino += $valor;
        return true;
        } else {
            echo "Nao foi possivel";
            return false;
        }
    }
    public function fecharConta(){
        if($this->saldo == 0){
            unset(Conta);
        }
    }
    public function consultarSaldo(){
        echo 
    }
    
}