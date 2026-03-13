<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="p-3 bg-light border">
            <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                  <?php
$carro = $_POST['carro'];
$km = $_POST['numberkilo'];
$dia = $_POST['numberalug'];

$aluguel = 0; 


if ($carro == "popu") {
    if ($km > 100) {
        $aluguel = ($km * 0.20) + ($dia * 90);
    } else {
        $aluguel = ($km * 0.10) + ($dia * 90);
    }
    echo "Seu aluguel é de R$ $aluguel <br>";
} elseif ($carro == "luxo") {
    if ($km > 200) {
        $aluguel = ($km * 0.30) + ($dia * 150);
    } else {
        $aluguel = ($km * 0.25) + ($dia * 150);
    }
    echo "Seu aluguel é de R$ $aluguel <br>";
}

?>


                </div>
            </div>
        </div>
    </div>



</body>

</html>