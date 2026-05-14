<?php

class Funcionario
{
    public int $codigo;
    public string $nome;
    public int $salario;
    public int $cargaHoraria;
    public function calcularSalarioHora()
    {
        $valor = $this ->salario / $this ->cargaHoraria;
        echo "Funcinario: " . $this ->nome;
        echo " recebe ". $valor . " por hora trabalhada.<br>";
    }
    public function aumentarSalario($percentual)
    {
        $this ->salario += $this->salario * ($percentual /100);
        echo "Novo Salário: " . $this->salario . "<br> <br>";
    }
    public function exibirDados()
    {
       echo "Código: " . $this->codigo ."<br>";
       echo "Nome: " . $this->nome ."<br>";
       echo "Salário: " . $this->salario ."<br>";
       echo "Carga Horaria Mensal: " . $this->cargaHoraria ."<br>";



    }
}
