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
                    $clien = $_POST['cliente'];
                    $compra = $_POST['numberValor'];
                    
                    $trfa = 0; 


if ($clien == "comum") {
    if ($compra > 500) {
        $trfa = ($compra * 0.05);
        echo "O desconto foi de 5% <br>"
        echo "Sua compra e de R$ $trfa <br>";
    } else {
        $trfa = $compra;
        echo "Sua compra e de R$ $trfa <br>";
    }
} elseif ($clien == "vip") {
    if ($compra > 1000) {
        $trfa = ($compra * 0.10);
        echo "O desconto foi de 10% <br>"
        echo "Sua compra e de R$ $trfa <br>";
        echo "E O FRETE É GRATIS!"
    } else {
        $trfa = ($compra * 0.10);
        echo "O desconto foi de 10% <br>"
        echo "Sua compra e de R$ $trfa <br>";
    }
}
    elseif ($clien == "premum") {
        $trfa = ($compra * 0.15);
        echo "O desconto foi de 15%"
        echo "Sua compra e de R$ $trfa <br>";
        echo "FRETE GRATIS";
    }
?>


                </div>
            </div>
        </div>
    </div>



</body>

</html>