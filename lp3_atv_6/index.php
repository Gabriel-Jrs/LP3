<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_6</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="respQ1.php" method="POST" class="col-4">
                <h2>Questão 1</h2>
                <h4>Cadastro para Maratona de Programação</h4>
                <div class="mb-3">
                    <label for="campoNome" class="form-label">Nome Completo:</label>
                    <input type="text" class="form-control" id="campoNome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="campoEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="campoEmail" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="perfilParticipante">Categoria de Participação: </label>
                    <select class="form-select" id="perfilParticipante" name="tipoParticipante" required>
                        <option value="">Selecione uma opção</option>
                        <option value="1">Iniciante</option>
                        <option value="2">Intermediário</option>
                        <option value="3">Avançado</option>
                    </select>
                </div>
                <p>Linguagem Principal:</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="pyt" id="adc-1" name="tamanho">
                    <label class="form-check-label" for="adc-1">
                        Python
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="jav" id="adc-2" name="tamanho">
                    <label class="form-check-label" for="adc-2">
                        Java
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="php" id="adc-3" name="tamanho">
                    <label class="form-check-label" for="adc-3">
                        PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="c++" id="adc-4" name="tamanho">
                    <label class="form-check-label" for="adc-4">
                        C++
                    </label>
                </div>
                <p>Áreas de Interesse:</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="lavarel" id="wor" name="areas[]">
                    <label class="form-check-label" for="wor">
                        Desenvolvimento Web
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="bootstrap" id="wor" name="areas[]">
                    <label class="form-check-label" for="wor">
                        Inteligência Artificial</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="js" id="wor" name="areas[]">
                    <label class="form-check-label" for="wor">
                        Banco de Dados
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="historia" id="wor" name="areas[]">
                    <label class="form-check-label" for="wor">
                        Segurança da Informação
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>
            </form>
            <div class="col-md-4 col-sm-12">
                <h2>Questão 2</h2>
                <h3>Buscar por personalidaes Historicas(Método GET)</h3>
                <form action="respQ2.php" method="GET" class="col-4">
                <p>Pesquise Por uma persolalidade</p>
                <div class="mb-3">
                    <label for="txtNumero" class="form-label">pesquise:</label>
                    <input type="text" class="form-control" id="txtNumero" name="pessoa[]">
                </div>
                <button type="submit" class="btn btn-success">Pesquisar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </form>




            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>