<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividade 8</title>
</head>

<body>
<div class="container">
    <div class="d-flex justify-content-center">
    <?php
    require_once "Veiculo.php";

    $g1 = new Veiculo();

    $g1->marca = "Velloci";
    $g1->modelo = "Taurus";
    $g1->ano = 2025;
    $g1->qtdeCombustivel = 44;
    $g1->consumoLitro = 12;

    $g1->exibirInformacoes();
    $g1->abastecer(12);
    $g1->exibirInformacoes();


    $g2 = new Veiculo();
    $g2->marca = "Fiat";
    $g2->modelo = "Toro";
    $g2->ano = 2023;
    $g2->qtdeCombustivel = 50;
    $g2->consumoLitro = 4;

    $g2->calcularAutonomia();
    $g2->exibirInformacoes();
    $g2->abastecer(23);
    $g2->exibirInformacoes();


    $g3 = new Veiculo();
    $g3->marca = "Volks";
    $g3->modelo = "T-Cross";
    $g3->ano = 2024;
    $g3->qtdeCombustivel = 70;
    $g3->consumoLitro = 19;

    $g3->calcularAutonomia();
    $g3->exibirInformacoes();
    $g3->abastecer(34);
    $g3->exibirInformacoes();


    //echo "<pre>";
    //print_r($g1);
    //print_r($g2);
    //print_r($g3);
    ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>