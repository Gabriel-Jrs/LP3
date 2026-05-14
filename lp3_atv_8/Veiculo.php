<?php

class Veiculo
{
    public string $marca;
    public string $modelo;
    public int $ano;
    public float $qtdeCombustivel;
    public float $consumoLitro;
    
    public function abastecer( float $litros)
    {
        $this ->qtdeCombustivel += $litros;
        echo "Quantidade de combustível (em litros após o abastecimento):  " . $this->qtdeCombustivel . "<br>";
    }
    public function calcularAutonomia()
    {
        $autonomia = $this ->qtdeCombustivel * $this ->consumoLitro;
        echo "O Carro: " . $this ->modelo;
        echo " tem autonomia de: ". $autonomia . " <br>";
    }
    public function exibirInformacoes()
    {
       echo "Marca: " . $this->marca ."<br>";
       echo "Modelo: " . $this->modelo ."<br>";
       echo "Ano: " . $this->ano ."<br>";
       echo "Quantidade de combustível (em litros): " . $this->qtdeCombustivel ."<br>";
       echo "Consumo médio do veículo (km por litro): " . $this->consumoLitro ."<br> <br>";
       $this->calcularAutonomia();


    }
}