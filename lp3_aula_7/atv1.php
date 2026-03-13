<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="p-3 bg-light border">
         <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Resultado</h5>
    <?php
    $n1=$_POST['numberMat'];
    $n2=$_POST['numberPort'];
    $n3=$_POST['numberCien'];
    $porc=$_POST['numberFreq'];

    $med = ($n1 + $n2 + $n3)/3;

    if($porc < 75){
        echo "REPROVADO POR FALTAS!! <br>";
        echo "Sua media de notas foi: $med <br>";
    }
    if ($porc >= 75 && $med >= 7){
        echo "APROVADO!! <br>";
        echo "Sua media de notas foi: $med <br>";
    }
    if ($porc >= 75 && $med >= 4 && $med <6.9){
        echo "VOCÊ ESTÁ DE RECUPERAÇÃO <br>";
        echo "Sua media de notas foi: $med <br>";
    }
    else{
        echo "REPROVADO POR NOTA <br>";
        echo "Sua media de notas foi: $med <br>";
    }

   

?>
    </div>
</div>
   
  </div>
</div>
</body>
</html>