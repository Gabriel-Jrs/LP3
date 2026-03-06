<?php
    $peso=$_POST['numberkilo'];
    $altura=$_POST['numberAlt'];
    
    $imc = $peso / ($altura * $altura)

   if($imc < 18,5)
{
    echo "Seu imc de $imc é considerado Abaixo do peso"
}
?>