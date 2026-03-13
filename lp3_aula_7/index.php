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
                <h3>Sistema de Aprovação Escolar</h3>
                <form action="atv1.php" method="POST">
                    <div class="mb-3">
                        <label for="campoMat" class="form-label">Digite sua nota em Matematica</label>
                        <input type="number" class="form-control" id="campoMat" name="numberMat">
                    </div>
                    <div class="mb-3">
                        <label for="campoPort" class="form-label">Digite sua nota em Portugues</label>
                        <input type="number" class="form-control" id="campoPort" name="numberPort">
                    </div>
                    <div class="mb-3">
                        <label for="campoCien" class="form-label">Digite sua nota em Ciencias</label>
                        <input type="number" class="form-control" id="campoCien" name="numberCien">
                    </div>
                    <div class="mb-3">
                        <label for="campoFreq" class="form-label">Digite sua frequencia (em%)</label>
                        <input type="number" class="form-control" id="campoFreq" name="numberFreq">
                    </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar Dados</button>
            </form>
            <div class="col-md-4 col-sm-12">
                <h3>Calculadora de Tarifas de Energia Elétrica</h3>
                <form action="atv2.php" method="POST">
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
                <div class="col-md-4 col-sm-12">
                    <h3>Sistema de Descontos para E-commerce</h3>
                    <form action="atv3.php" method="POST">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="campoValor" class="form-label"> Digite o Valor da compra</label>
                                <input type="select" class="form-control" id="campoValor" name="numberValor">
                            </div>
                            <select class="form-select form-select-sm" aria-label="escoha seu tipo de cliente"
                                name="cliente">
                                <option selected>Tipo de Cliente</option>
                                <option value="comum">Comum</option>
                                <option value="vip">VIP</option>
                                <option value="premum">Premium</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar Dados</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>