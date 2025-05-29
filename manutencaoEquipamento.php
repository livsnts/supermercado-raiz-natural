<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 2vw;
            max-width: 60vw;
        }
        h1, h2 {
            text-align: center;
            padding-bottom: 20px;
        }
        .d-flex {
            justify-content: center;
            padding-top: 8px;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <h1>Manutenção</h1>
        <form id="manutencaoForm">
            <div class="form-group">
                <label for="codigoManutencao">Código</label>
                <input type="number" min="1" class="form-control" id="codigoManutencao" placeholder="Informe o código da manutenção">
            </div>

            <div class="form-group">
                <label for="dataEnvio">Data de envio</label>
                <input type="date" class="form-control" id="dataEnvio" placeholder="Informe a data de envio">
            </div>

            <div class="form-group d-flex align-items-end">
                <div class="flex-grow-1 mr-2">
                    <label for="assistencia">Assistência</label>
                    <select class="custom-select" id="assistencia" aria-label="Selecione a assistência">
                        <option selected>Escolher...</option>
                        <option value="1">Assistência 1</option>
                        <option value="2">Assistência 2</option>
                        <option value="3">Assistência 3</option>
                        <option value="4">Assistência 4</option>
                    </select>
                </div>
                <div>
                    <button class="btn mb-0"><a href="cadastroAssistencia.php">...</a></button>
                </div>
            </div><br>
            <hr>
            <h2>Equipamento da manutenção</h2>
            <div class="form-group d-flex align-items-end">
                <div class="flex-grow-1 mr-2">
                    <label for="equipamento">Adicionar equipamento</label>
                    <select class="custom-select" id="equipamento" aria-label="Selecione o equipamento">
                        <option selected>Escolher...</option>
                        <option value="1">Equipamento 1</option>
                        <option value="2">Equipamento 2</option>
                        <option value="3">Equipamento 3</option>
                        <option value="4">Equipamento 4</option>
                    </select>
                </div>
                <div>
                    <button class="btn mb-0"><a href="cadastroEquipamento.php">...</a></button>
                </div>
            </div>

            <div class="form-group">
                <label for="descricaoProblema">Descrição do problema</label>
                <input type="text" class="form-control" id="descricaoProblema" placeholder="Informe a descrição do problema">
            </div>

            <div class="form-group">
                <label for="dataRetorno">Data de retorno</label>
                <input type="date" class="form-control" id="dataRetorno" placeholder="Informe a data de retorno">
            </div>

            <div class="form-group">
                <label for="descricaoConserto">Descrição do conserto</label>
                <input type="text" class="form-control" id="descricaoConserto" placeholder="Informe a descrição do conserto">
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" id="adicionarEquipamento" class="btn btn-success">Adicionar equipamento</button>
            </div><br>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome equipamento</th>
                        <th scope="col">Descrição do problema</th>
                        <th scope="col">Data de retorno</th>
                        <th scope="col">Descrição do conserto</th>
                    </tr>
                </thead>
                <tbody id="tabelaEquipamentos">
                    <!-- Equipamentos adicionados aparecerão aqui -->
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        document.getElementById('adicionarEquipamento').addEventListener('click', function() {
            var equipamento = document.getElementById('equipamento').value;
            var descricaoProblema = document.getElementById('descricaoProblema').value;
            var dataRetorno = document.getElementById('dataRetorno').value;
            var descricaoConserto = document.getElementById('descricaoConserto').value;

            if (equipamento !== "Escolher..." && descricaoProblema !== "" && descricaoConserto !== "") {
                var tabela = document.getElementById('tabelaEquipamentos');
                var novaLinha = tabela.insertRow();

                var celulaEquipamento = novaLinha.insertCell(0);
                var celulaProblema = novaLinha.insertCell(1);
                var celulaRetorno = novaLinha.insertCell(2);
                var celulaConserto = novaLinha.insertCell(3);

                celulaEquipamento.textContent = equipamento;
                celulaProblema.textContent = descricaoProblema;
                celulaRetorno.textContent = dataRetorno;
                celulaConserto.textContent = descricaoConserto;

                document.getElementById('equipamento').value = "Escolher...";
                document.getElementById('descricaoProblema').value = "";
                document.getElementById('dataRetorno').value = "";
                document.getElementById('descricaoConserto').value = "";
            } else {
                alert("Por favor, preencha todos os campos!");
            }
        });
    </script>
</body>
</html>
