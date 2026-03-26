<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades aula 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Atividade</h2>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h3>Sistema de Pedidos com Adicionais (Método POST e Checkboxes)</h3>
                <form action="atv1.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Digite seu nome:</label>
                        <input type="txt" class="form-control" id="nome" placeholder="Nome" name="cliente">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="bacon" id="checkDefault"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkDefault">
                            Bacon: R$ 3,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="cheddar" id="checkDefault1"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkDefault1">
                            Cheddar Cremoso: R$ 2,50
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="cebola" id="checkDefault2"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkDefault2">
                            Cebola Caramelizada: R$ 2,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="hamburguer" id="checkDefault3"
                            name="adicionais[]">
                        <label class="form-check-label" for="checkDefault3">
                            Hambúrguer Extra: R$ 5,00
                        </label>
                    </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar Dados</button>
            </form>
            <div class="col-md-4 col-sm-12">
                <h3>Gerador de Tabuada Dinâmica (Método GET)</h3>
                <form action="atv2.php" method="GET">
                    <div class="mb-3">
                        <label for="campoCons" class="form-label">Consumo Por Mês: (em kWh)</label>
                        <input type="select" class="form-control" id="campoCons" name="numberCons">
                    </div>
                    <div class="mb-3">

                        <select class="form-select form-select-sm" aria-label="escolha Tipo edificio" name="edificio">
                            <option selected>Tipo de Local</option>
                            <option value="res">Residencial</option>
                            <option value="com">Comercial</option>
                            <option value="ind">Industrial</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar Dados</button>
                </form>

            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>