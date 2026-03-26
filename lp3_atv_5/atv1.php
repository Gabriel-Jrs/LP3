<?php
$cliente = $_POST['cliente'];
$add = $_POST['adicionais'];
$texto = "";

$total = 20;

for ($i = 0; $i < count($add); $i++) {
    if ($add[$i] == 'bacon') {
        $total = $total  + 3;
        $texto .= 'Bacon(3)<br>';
    }
    if ($add[$i] == 'cheddar') {
        $total = $total  + 2.5;
        $texto .= 'Cheddar(2,5)<br>';
    }
    if ($add[$i] == 'cebola') {
        $total = $total  + 2;
        $texto .= 'Cebola(2)<br>';
    }
    if ($add[$i] == 'hamburguer') {
        $total = $total  + 5;
        $texto .= 'Hambúrguer(5)<br>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="p-3 bg-light border">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo "senhor $cliente, confira seu pedido: <br>";?> </li>
                            <li class="list-group-item"><?php echo "$texto <br>";?></li>
                            <li class="list-group-item"><?php echo "Você deve pagar R$ $total <br>";?></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>

</html>