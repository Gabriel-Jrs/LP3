<?php
    class ProdutoDigital extends Produto{
        private float $peso;
        private string $dimensoesCxLxA;
        private string $custoFreteFixo;
        private int $trasportotadoraParceira;
        

    public function getPeso(): float
    {
        return $this->peso;
    }
    public function getDimensoesCxLxA(): string
    {
        return $this->deminsoes;
    }
    public function getCustoFreteFixo(): string
    {
        return $this->descricao;
    }
    public function getTrasportotadoraParceira(): string
    {
        return $this->trasportotadoraParceira;
    }
    public function calcularPrecoVenda () : float {
        return $this->precoBase += $this->custoFreteFixo +($this->precoBase * 0.05);
    }
    public  function verificarDisponipilidade() : bool{
        if($this->qtdeEstoque > 0 && $this->isAtivo== true){
            return true;
        }
        else{
            return false;
        }
    }
    public function calcularVolumeCubico(): float{
        $vetorDimensoes = explode('x', strtolower($dimensoesCxLxA))

        $comprimento = (float) trim($vetorDimensoes[0]);
        $largura = (float) trim($vetorDimensoes[1]);
        $altura = (float) trim($vetorDimensoes[2]);

        return $comprimento * $largura * altura;

    }
    public function estimarPrazoEntrega(string cepDestino): int{
        
    }
    
    

        

        
    }
