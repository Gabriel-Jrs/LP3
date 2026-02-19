<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3-AULA-4</title>
</head>
<body>
    <h1>LP3 AULA 4</h1>
    <h2>Atividades</h2>

    <h4>Q1</h4>
    <ul>
    <?php 
    for($i = -10; $i < 11; $i++){
    ?>
    <li>Numero: <?php echo "$i "; }?></li>

    <h4>Q2</h4>
    <?php 
    $soma = 0;
    for($x = 1; $x < 500; $x +=3){
        if($x %  3 == 0 && $x % 2 == 1){
            $soma += $x;
            
        }
    }
    echo "A soma de todos os numeros impares e multiplos de 3 entre 1 e 500 é $soma";
?> 

    <h4>Q3</h4>
    <?php
    for($z = 100; $z >=0; $z-=10){
        echo "$z <br>";
        if($z == 0){
            echo "acabou!";
        }
    }
    
    ?>
    <h4>Q4</h4>
    <?php 
    for($y = 99; $y >= 0; $y -= 2){
        if($y % 5 == 0 && $y % 2 == 1){
            echo "[$y] ";
        } else {
            echo "$y ";
        }
    }
    ?>
    <h4>Q5</h4>
    <h5>FOR</h5>
    <?php 
    for($g = 150; $g >= 0; $g -= 5 ){
        echo "$g ";
    }
    
    ?>
    <h4>Q6</h4>
    <h5>WHILE</h5>
    <?php 
    $w = 150;
    while($w >= 0){
        echo "$w ";
        $w -=5;
    }
     ?>

</ul>
</body>
</html>