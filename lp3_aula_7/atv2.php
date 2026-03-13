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
                    $edi = $_POST['edificio'];
                    $kwh = $_POST['numberCons'];
                    
                    $trfa = 0; 


if ($edi == "res") {
    if ($kwh >= 500) {
        $trfa = ($kwh * 0.40);
    } else {
        $trfa = ($kwm * 0.65);
    }
    echo "Seu aluguel é de R$ $trfa <br>";
} elseif ($edi == "com") {
    if ($kwh >= 1000) {
        $trfa = ($kwh * 0.55);
    } else {
        $trfa = ($kwh * 0.60);
    }
}
    elseif ($edi == "ind") {
        if ($kwh >= 5000) {
        $trfa = ($kwh * 0.55);
    } else {
        $trfa = ($kwh * 0.60);
    }

    }
    echo "Sua conta de luz é de R$$trfa <br>";


?>


                </div>
            </div>
        </div>
    </div>



</body>

</html>