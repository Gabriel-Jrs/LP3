<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3-Aula 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <!--Atividade 1-->

    <div class="container">
        <div class="row">

            <h1>Atividade 1</h1>

            <form action="Atividade 1.php" method="POST">

                <div class="mb-3">
                    <label for="campoPeso" class="form-label">Peso:</label>
                    <input type="number" step="0.1" class="form-control" id="campoPeso" name="txtPeso" required>
                </div>

                <div class="mb-3">
                    <label for="campoAltura" class="form-label">Altura:</label>
                    <input type="number" step="0.01" class="form-control" id="campoAltura" name="txtAltura" required>
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>

            </form>

        </div>
    </div>

    <!--Atividade 2-->

    <div class="container" style="padding-top: 10px;">
        <div class="row">

        <h1>Atividade 2</h1>

            <form action="Atividade 2.php" method="POST">

                <div class="form-check">
                    <label class="form-check-label" for="radioDefault1"></label>
                    <select id="disabledSelect" class="form-select" name="Tipo">
                        <option>Selecione uma opção.</option>
                        <option value="90">Carro Popular</option>
                        <option value="150">Carro de Luxo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="campoDias" class="form-label">Dias:</label>
                    <input type="number" step="0.1" class="form-control" id="campoDias" name="Dias" required>
                </div>

                <div class="mb-3">
                    <label for="campoKms" class="form-label">Kms percorridos:</label>
                    <input type="number" step="0.01" class="form-control" id="campoKms" name="Kms" required>
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>

            </form>

        </div>
    </div>

    <!--Atividade 3-->

    <div class="container" style="padding-top: 10px;">
        <div class="row">

        <h1>Atividade 3</h1>

            <form action="Atividade 3.php" method="POST">

                <div class="mb-3">
                    <label for="horasAtividade" class="form-label">Horas de Atividade:</label>
                    <input type="number" step="0.1" class="form-control" id="horasAtividade" name="Horas" required>
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>

            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>