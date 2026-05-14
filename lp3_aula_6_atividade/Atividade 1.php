<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <!--Atividade 1-->

    <?php
    
    if (isset($_POST['txtPeso']) && isset($_POST['txtAltura'])) {

        $peso = $_POST['txtPeso'];
        $altura = $_POST['txtAltura'];

        $IMC = $altura * $altura / $peso;

        if ($IMC < 18.5) { ?>
            <div class="alert alert-primary">
                <?php echo $IMC . ' Abaixo de 18.5: Abaixo do peso.' ?>
            </div>

        <?php } elseif ($IMC < 25 and $IMC > 18.5) { ?>
            <div class="alert alert-secondary">
                <?php echo $IMC . ' Entre 18.5 e 25: Peso ideal.' ?>
            </div>

        <?php } elseif ($IMC > 25 and $IMC < 30) { ?>
            <div class="alert alert-success">
                <?php echo $IMC . ' Entre 25 e 30: Sobrepeso.' ?>
            </div>

        <?php } elseif ($IMC > 30 and $IMC < 40) { ?>
            <div class="alert alert-warning">
                <?php echo $IMC . ' Entre 30 e 40: Obesidade.' ?>
            </div>

        <?php } else { ?>
            <div class="alert alert-danger">
                <?php echo $IMC . ' Acima de 40: Obesidade mórbida.' ?>
            </div>
        <?php }

    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>