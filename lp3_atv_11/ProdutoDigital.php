<?php
require_once "Produto.php";
    class ProdutoDigital extends Produto
    {
        private float $tamanhoArquivoMB;
        private string $formatoArquivo;
        private int $limiteDowloadsPermitidos ;
        private string $linkServidorNuvem;
        private string $token;

    public function getTamanhoArquivoMB(): float
    {
        return $this->tamanhoArquivoMB;
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
    public function getToken(): string
    {
        return $this->token;
    }
    
    public function calcularPrecoVenda (): float{
        return $this->precoBase + 2.00;
    }
    public function verificarDisponibilade(): bool{
        if($this->isAtivo == true && $this->linkServidorNuvem === 'Operante'){
            return true;
        }
        else{
            return false;
        }
    }
        public  function gerarLinkExclusivo(string $idUsuario): string{
        $now= time();
        $this->token = md5($idUsuario . $now);
        return $this->linkServidorNuvem . $this->token . $this->formatoArquivo;

    }
        public function revogarAcesso(string $idUsuario){
            if($this->limiteDowloadsPermitidos == $this->limiteDowloadsPermitidos){
                return $this->token == 'invalido';
            }
            else{
                return $this->token == 'invalido';
            }
            }
        }
    