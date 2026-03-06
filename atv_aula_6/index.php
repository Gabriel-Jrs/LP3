<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades aula 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
     <div class="container">
        <h2>Atividade</h2>
        <div class="row">
            <form action="recebeDados.php" method="POST">
                <div class="mb-3">
                    <label for="campoAlt" class="form-label">Digite sua altura em metros</label>
                    <input type="number" class="form-control" id="campoAlt"name="numberAlt">
                </div>
               <div class="mb-3">
                    <label for="campokilo" class="form-label">Digite seu peso em Kilogramas (kg)</label>
                    <input type="number" class="form-control" id="campokilo"name="numberkilo">
                </div>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class= "btn btn-warning">Limpar Dados</button>
            </form>
        </div>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>