<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipoParticipante'];
$tamanho = $_POST['tamanho'];
$work = $_POST['workshops'] ?? [];

$lista = "";

if ($tamanho == "p") {
    $tamanho = "P<br>";
}
if ($tamanho == "m") {
    $tamanho = "M<br>";
}
if ($tamanho == "g") {
    $tamanho = "G<br>";
}
if ($tamanho == "gg") {
    $tamanho = "GG<br>";
}

foreach ($work as $item) {
    if ($item == "lavarel") {
        $lista .= "lavarel";
    }
    if ($item == "bootstrap") {
        $lista .= "bootstrap";
    }
    if ($item == "js") {
        $lista .= "js";
    }
    if ($item == "historia") {
        $lista .= "historia";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Início do seu código PHP aqui -->
            <div class="col-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        Detalhes da Incrição
                    </div>
                    <div class="card-body">
                        <h4><?= $nome ?></h4>
                        <ul>
                            <li>Email: <?= $email ?></li>
                            <li>Tipo: <?= $tipo ?></li>
                            <li>Tamanho: <?= $tamanho ?></li>
                            <li>interesses: <br>
                                <?= $lista ?> </li>
                        </ul>

                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>


            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>