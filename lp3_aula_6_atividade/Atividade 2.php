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

    <!--Atividade 2-->

    <?php
    
    $tipo = $_POST['Tipo'];
    $dias = $_POST['Dias'];
    $kms = $_POST['Kms'];
    $preçoDias = 0;
    $preçoKm = 0;

    if($tipo == 90) {

    $preçoDias = $tipo * $dias;
    if($kms > 100) {
        $preçoKm = $kms * 0.1;
    } else {
        $preçoKm = $kms * 0.2;
    }

    $totalPrice = $preçoDias + $preçoKm;
    
    echo $preçoDias . "<br>" . $preçoKm ."<br>" . $totalPrice ."<br>";

    }else {

    $preçoDias = $tipo * $dias;
    if($kms > 200) {
        $preçoKm = $kms * 0.25;
    } else {
        $preçoKm = $kms * 0.3;
    }

    $totalPrice = $preçoDias + $preçoKm;
    
    echo $preçoDias . "R$ <br>" . $preçoKm ."R$ <br>" . $totalPrice ."R$ <br>";

    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>