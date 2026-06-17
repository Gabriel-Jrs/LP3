<?php
    class ProdutoDigital extends Produto{
        private float $tamanhoArquivoMB;
        private string $formatoArquivo;
        private int $limiteDowloadsPermitidos ;
        private string $linkServidorNuvem;

    public function getTamanhoArquivoMB(): int
    {
        return $this->tamanhoAquivoMB;
    }
    public function getformatoArquivo(): string
    {
        return $this->formatoArquivo;
    }
    public function getLimiteDowloadsPermitidos(): int
    {
        return $this->limiteDowloadsPermitidos;
    }
    public function getLinkServidorNuvem(): string
    {
        return $this->linkServidorNuvem;
    }
    
    public function calcularPrecoVenda (){
        return $this->precoBase += 2.00;
    }
    public function verificarDisponibilidade(): bool{
        if($this->isAtivo == true && $this->linkServidorNuvem = 'Operante'){
            echo 'Dísponivel';
        }
        else{
            echo 'Indisponivel'
        }
    }
    public function 
        
    }
