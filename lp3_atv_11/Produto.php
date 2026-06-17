<?php
abstract class Produto
{
    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private int $qtdeEstoque;
    private bool $isAtivo;

    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function getPrecoBase(): float
    {
        return $this->precoBase;
    }
    public function getQtdeEstoque(): int
    {
        return $this->qtdeEstoque;
    }
    public function getisAtivo(): bool
    {
        return $this->isAtivo;
    }

    public function adicionarEstoque(int $quantidade)
    {
        if ($quantidade > 0) {
            $this->qtdeEstoque += $quantidade;
            if ($this->isAtivo == false) {
                $this->isAtivo == true;
            } else {
            }
        } else {
            echo 'Invalido';
        }
    }
    public function baixarEstoque(int $quantidade)
    {
        $this->qtdeEstoque -= $quantidade;
        if ($this->qtdeEstoque == 0) {
            $this->isAtivo = false;
        }
    }
    public function aplicarDesconto($percentual)
    {
        if ($percentual < 0.9 && $percentual > 0) {
            $this->precoBase *= $percentual;
        } else {
            echo 'Desconto nao aplicado';
        }
    }
    public abstract function calcularPrecoVenda(){

    }
    public abstract function verificarDisponibilade(){
        
    }
}