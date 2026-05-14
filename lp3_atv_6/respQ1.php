<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipoParticipante'];
$tamanho = $_POST['tamanho'];
$area = $_POST['areas'];

$lista = "";

if ($tamanho == "pyt") {
    $tamanho = "Python<br>";
}
if ($tamanho == "jav") {
    $tamanho = "Java<br>";
}
if ($tamanho == "php") {
    $tamanho = "PHP<br>";
}
if ($tamanho == "c++") {
    $tamanho = "C++<br>";
}

foreach ($area as $item) {
    if ($item == "lavarel") {
        $lista .= "Desenvolvimento Web <br>";
    }
    if ($item == "bootstrap") {
        $lista .= "Inteligência Artificial <br>";
    }
    if ($item == "js") {
        $lista .= "Banco de Dados <br>";
    }
    if ($item == "historia") {
        $lista .= "Segurança da Informação <br>";
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
            <div class="col-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        Detalhes da Incrição
                    </div>
                    <div class="card-body">
                        <h4><?= $nome ?></h4>
                        <h4>Email: <?= $email ?></h4>
                        <h4>Tipo: <?= $tipo ?></h4>
                        <h4>Tamanho: <?= $tamanho?></h4>
                        <ul>
                            <li>Interesses: <br>
                                <?=  $lista ?> </li>
                        </ul>

                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>