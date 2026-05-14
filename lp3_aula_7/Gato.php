<?php
class Gato
{
    public int $qtdePes;
    public string $raca;
    public float $peso;
    public string $nome;
    public string $cor;
    public int $dataNasc;
    public string $porte;
    public string $sexo;
    public string $pelo;

    public function miar()
    {
        echo "Miauuuuuuuuuuuuu! <br>";
    }
    public function comer()
    {
        echo "Miau miau nhac nhac <br>";
    }
    public function dormir()
    {
        echo $this -> nome . " esta Dormindo: Zzzzzzzzzzz <br>";
    }
    public function reproduzir()
    {
        echo "Minhaauauaua <br>";
    }

    public function caçar()
    {
        echo "Miau NHAC! <br>";
    }
}
