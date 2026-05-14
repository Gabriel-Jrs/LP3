<?php
class Veiculo {
    public string $marca;
    public string $modelo;
    public int $ano;
    public float $qtdeCombustivel;
    public float $mediaConsumo;

    public function abastecer(float $litros) {
        $this->qtdeCombustivel += $litros;
    }

    public function calcularAutonomia() {
        $total = $this->qtdeCombustivel * $this->mediaConsumo;
        echo "Autonimia do veículo: $total km <br><br>";
    }

    public function exibirInformacoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: $this->modelo <br>";
        echo 'Ano: ' . $this->ano . '<br>';
        echo "Quantidade de combustível: " . $this->qtdeCombustivel . "<br>";
        echo "Média de consumo: " . $this->mediaConsumo . "<br>";
        $this->calcularAutonomia();
    }
}