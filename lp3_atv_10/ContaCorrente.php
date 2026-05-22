<?php
require_once "Conta.php";

class ContaCorrente extends Conta
{
    public float $limiteChequeEspacial;
    public float $taxaManuntecaoMensal;
    public string $cartaoCredidoVencindo;
    public float $valorCartaoCredito;

    public function sacar(float $valor) {}
    public function cobrarTaxaMensal() {}
    public function solicitarAumentoLimite(float $valor) {}
    public function pagarFaturaCartao() {}
    
}
