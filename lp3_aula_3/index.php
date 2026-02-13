<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3_AULA_3</title>
</head>
<body>
   <h1>LP3 Aula 3</h1>
    <h3>Par</h3>
    <?php
     /*For 
    for($i = 0; $i < 10; $i+=2) {
        
        echo "$i <br>";
        
    }
        */
    ?>
    <h3>Impar</h3>
    <?php /*
     While 
    $i = 1;
    while($i < 10){

    echo "$i <br>";

    $i+=2;
    } */
    ?>
    <h4>Múltiplos de 3 entre 0 e 100</h4>
    <ul>
        <?php /*
        for($y=3; $y < 100; $y+=3){
        ?>
        <li> Número: <?= $y; ?> </li>
        <?php } */ ?>

    </ul> 
    <h2>EXERCICIOS</h2>
    <h4>Contagem 5 em 5</h4>
    <ul>
    <?php
    for($x = 100; $x > -1; $x -= 5){  
        ?>
        <li>Contagem <?php echo "$x <br>"; if($x == 0){ echo "acabou!";}}?></li>
    </ul>

    <h4>Média aritimetica</h4>

    <?php 
    for($z = 13; $z <=72; $z ++){
        $contador = 0;
        $contador = $contador + $z;
        $total = 0;
        $total++;
        }
        $resp = $contador / $total;
        echo "A média entre 13 e 73 é $resp"
    ?>
    

</body>
</html>