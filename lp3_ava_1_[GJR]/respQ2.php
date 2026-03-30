<?php
$pessoa = true;
if (isset($_GET['pessoa']))
    $pessoa = $_GET['pessoa'];
else
    $pessoa = false;
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
            <div class="container">
                <div class="row">
                    <?php if (!$pessoa) { ?>
                        <div class="alert alert-info mt-3">Você não informou o nome</div>
                    <?php } else { ?>
                        <div class="col-4 mt-3">
                            <div class="alert alert-sucess">
                                <p>Você Pesquisou por: <?php echo $pessoa ?>. Exibindo resultados...</p>
                            </div>
                        </div>

                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    <?php } ?>
                </div>
            </div>



            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>