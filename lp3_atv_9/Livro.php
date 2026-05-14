<?php
class Livro
{
    public string $titulo;
    public string $autor;
    public float $qtdePags;
    public float $qtdeExemplares;
    
    public function emprestarLivro()
    {
        $this ->qtdeExemplares -= $this->qtdeExemplares - 1;
        echo "Quantidade de Exemplares  " . $this->qtdeExemplares . "<br>";
    }
    public function devolverLivro()
        {
           $this ->qtdeExemplares += $this->qtdeExemplares;

        }
    public function verificarDisponibilidade()
    {
        if($this->qtdeExemplares==1){
            echo "Livro está disponivel";
        }
        else{
            echo "Livro Indisponivel";
        }
    }
    public function alterarQuantidadePaginas($novaQuantidade){
        $this->qtdePags += $novaQuantidade;
    }
    public function exibirInformacoes(){
       echo "Titulo do Livro: " . $this->titulo ."<br>";
       echo "Autor: " . $this->autor ."<br>";
       echo "Quantidade de páginas " . $this->qtdePags ."<br>";
       echo "Quantidade de exemplares disponíveis " . $this->qtdeExemplares ."<br>";
    }
    public function compararPaginas($outroLivro){
        if($this->qtdePags > $outroLivro){
            echo "esse Livro tem Mais paginas que o outro <br>";
        }
        else{
            echo "Esse livro é menor que o outro <br>";
        }

    }
}
