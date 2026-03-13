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
    $peso=$_POST['numberkilo'];
    $altura=$_POST['numberAlt'];
    
    $imc = $peso / ($altura * $altura);

   if($imc < 18.5)
{
    echo "Seu imc de $imc é considerado Abaixo do peso";
}
   if($imc > 18.6 && $imc < 25)
{
    echo "Seu imc de $imc é considerado Ideal";
}
   if($imc > 25.1 && $imc < 30)
{
    echo "Seu imc de $imc é considerado Sobrepeso";
}
   if($imc > 30.1 && $imc < 40)
{
    echo "Seu imc de $imc é considerado Obesidade";
}
   if($imc > 40)
{
    echo "Seu imc de $imc é considerado Obesidade mórbida";
}

?>
    </div>
</div>
   
  </div>
</div>
</body>
</html>