<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3_AULA_2</title>
</head>
<body>
    <h1>LP3 Aula 2</h1>
    <?php
    $xuxu = -61;
    echo "Isso é um texto: $xuxu <br>"; 
    echo '$xuxu <br>'; 
    echo 1 . "<br>";
    echo $xuxu;
    ?>
    <h3>Lista</h3>
    <ul>
        <?php
            if($xuxu %2 == 0){
                $resp = "par";
            } else {
                $resp = "impar";
            }
        ?>

        <li>A variavel xuxu é <?php echo  $resp; ?></li> 

        
        <?php if($xuxu %2 ==0){ ?>
        <li>A variavel xuxu é par</li>
        <?php } else { ?>
        <li>A variavel xuxu é impar</li>
        <?php } ?>
    </ul>
</body>
</html>


