<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="p-3 bg-light border">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Resultado</h5>
                    <?php
                        $hr = $_POST['numberFis'];
                        $total = 0;
                        if($hr > 10){
                            $pts = $hr * 2;
                            $total = $pts * 0.05;
                        }
                        if($hr < 10.1 && $hr > 20){
                            $pts = $hr * 2;
                            $total = $pts * 0.05;
                        }
                        if($hr < 10.1 && $hr > 20){
                            $pts = $hr * 5;
                            $total = $pts * 0.05;
                        }
                        if($hr < 20.1){
                            $pts = $hr * 10;
                            $total = $pts * 0.05;
                        }
                        echo "Sua pontuaçao foi de $pts<br>";
                        echo "Você ganhou $total R$!!!!!";  
                        ?>
                </div>
            </div>

        </div>
    </div>


</body>

</html>