<?php
$pessoa = true;
if (isset($_GET['linguagem']))
    $lingua = $_GET['linguagem'];
else {
    $lingua = false;
}
$lista = "";
if ($lingua)
    foreach ($lingua as $item) {
        if ($item == "Python") {
            $lista .= "Python<br>";
        }
        if ($item == "JavaScript") {
            $lista .= "JavaScript <br>";
        }
        if ($item == "PHP") {
            $lista .= "PHP <br>";
        }
        if ($item == "Java") {
            $lista .= "Java <br>";
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
            <div class="container">
                <div class="row">
                    <?php if (!$pessoa) { ?>
                        <div class="alert alert-info mt-3">Informe uma linguagem para realizar a busca.</div>
                    <?php } else { ?>
                        <div class="col-6 mt-3">
                            <div class="alert alert-sucess">
                                <p>Você pesquisou por: <?php echo "$lista" ?>Exibindo resultados...</p>
                                <div class='alert alert-success'>
                                </div>
                                <?php
                                $base = array("Python", "JavaScript", "PHP", "Java");

                                $encontrada = false;

                                if ($lingua) {
                                    foreach ($lingua as $item) {
                                        if (in_array($item, $base)) {
                                            $encontrada = true;
                                        }
                                    }
                                }

                                if ($encontrada) {
                                    echo "<div class='alert alert-success'>
                                        Linguagem encontrada na base de dados!
                                    </div>";
                                } else {
                                    echo "<div class='alert alert-danger'>
                                    Linguagem não encontrada.
                                    </div>";
                                }
                                ?>
<a href="index.php" class="btn btn-secondary">Voltar</a>
                    <?php } ?>
                            </div>
                        </div>

                        
                </div>
            </div>



            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>