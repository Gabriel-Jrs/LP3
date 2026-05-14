<?php
require_once "Funcionario.php";

$g1 = new Funcionario();

$g1->nome = "Roberto";
$g1->codigo = 123456;
$g1->salario = 1890;
$g1->cargaHoraria = 44;

$g1->calcularSalarioHora();
$g1->aumentarSalario(23);
$g1->exibirDados();




$g2 = new Funcionario();
$g2->nome = "Denis";
$g2->codigo = 654321;
$g2->salario = 7900;
$g2->cargaHoraria = 25;

$g2->calcularSalarioHora();
$g2->aumentarSalario(10);
$g2->exibirDados();


$g3 = new Funcionario();
$g3->nome = "Gabriel";
$g3->codigo = 112233;
$g3->salario = 12000;
$g3->cargaHoraria = 70;

$g3->calcularSalarioHora();
$g3->aumentarSalario(23);
$g3->exibirDados();


echo "<pre>";
print_r($g1);
print_r($g2);
print_r($g3);
