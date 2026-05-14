<?php
require_once "Veiculo.php";

$v1 = new Veiculo();

$v1->marca = "Toyota";
$v1->modelo = "Corolla";
$v1->ano = 2019;
$v1->qtdeCombustivel = 8;
$v1->mediaConsumo = 9.5;

$v1->exibirInformacoes();

$v1->abastecer(12);

$v1->exibirInformacoes();


