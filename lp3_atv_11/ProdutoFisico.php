<?php
require_once "Produto.php";
    class ProdutoFisico extends Produto{
        private float $peso;
        private string $dimensoesCxLxA;
        private float $custoFreteFixo;
        private int $trasportotadoraParceira;
        

    public function getPeso(): float
    {
        return $this->peso;
    }
    public function getDimensoesCxLxA(): string
    {
        return $this->dimensoesCxLxA;
    }
    public function getCustoFreteFixo(): string
    {
        return $this->custoFreteFixo;
    }
    public function getTrasportotadoraParceira(): string
    {
        return $this->trasportotadoraParceira;
    }
    public function calcularPrecoVenda () : float {
        return $this->precoBase += $this->custoFreteFixo +($this->precoBase * 0.05);
    }
    public function verificarDisponibilade(): bool{
        if($this->qtdeEstoque > 0 && $this->isAtivo== true){
            return true;
        }
        else{
            return false;
        }
    }
    public function calcularVolumeCubico(): float{
        $vetorDimensoes = explode('x', strtolower($this->dimensoesCxLxA));

        $comprimento = (float) trim($vetorDimensoes[0]);
        $largura = (float) trim($vetorDimensoes[1]);
        $altura = (float) trim($vetorDimensoes[2]);

        return $comprimento * $largura * $altura;

    }
    public function estimarPrazoEntrega(string $stringcepDestino): int{
        if($stringcepDestino == '00000000000'){
            return rand (3,7);
            
        }
        else{
            return rand(8,17);
        }
    }
        
    }
