<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ficha de Controle de Manutenção</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <style>
        h1,
        h2 {
            text-align: center;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <form id="fichaManutencao" class="mt-5 p-4 rounded container"
        style="background-color: #f8f9fa; border: 1px solid #28a745;">
        <h1>Ficha de Controle de Manutenção</h1>

        <div class="form-group">
            <label for="equipamento">Selecionar Equipamento</label>
            <select class="custom-select" id="equipamento" aria-label="Selecione o equipamento">
                <option value="">Selecione o Equipamento</option>
                <option value="EQ001_Impressora_Laser">EQ001 - Impressora Laser</option>
                <option value="EQ002_Computador_Desktop">EQ002 - Computador Desktop</option>
                <option value="EQ003_Balança_Digital">EQ003 - Balança Eletrônica</option>
            </select>
        </div>
        <div class="form-group">
            <label for="codigoEquipamento">Código do Equipamento</label>
            <input type="text" class="form-control" id="codigoEquipamento" readonly />
        </div>
        <div class="form-group">
            <label for="descricaoEquipamento">Descrição do Equipamento</label>
            <input type="text" class="form-control" id="descricaoEquipamento" readonly />
        </div>
        <div class="form-group">
            <label for="dataAquisicao">Data de Aquisição</label>
            <input type="date" class="form-control" id="dataAquisicao" readonly />
        </div>
        <div class="form-group">
            <label for="fornecedor">Fornecedor</label>
            <input type="text" class="form-control" id="fornecedor" readonly />
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" readonly />
        </div>
        <div class="form-group">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" id="grupo" readonly />
        </div>
        <div class="form-group">
            <label for="periodicidade">Manutenção preventiva a cada (meses)</label>
            <input type="number" class="form-control" id="periodicidade" readonly />
        </div>

        <hr />
        <h2>Manutenções</h2>

        <div class="form-group">
            <label for="dataEnvio">Data de Envio</label>
            <input type="date" class="form-control" id="dataEnvio" />
        </div>
        <div class="form-group">
            <label for="assistencia">Assistência Técnica</label>
            <select class="custom-select" id="assistencia">
                <option value="">-- Selecione uma Assistência --</option>
                <option value="InfoTech Soluções">InfoTech Soluções</option>
                <option value="Repara PC Master">Repara PC Master</option>
                <option value="Conserta Tudo Já">Conserta Tudo Já</option>
            </select>
        </div>
        <div class="form-group">
            <label for="descricaoProblema">Descrição do Problema</label>
            <input type="text" class="form-control" id="descricaoProblema" />
        </div>
        <div class="form-group">
            <label for="dataRetorno">Data de Retorno</label>
            <input type="date" class="form-control" id="dataRetorno" />
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-success" id="adicionarManutencao">Adicionar Manutenção</button>
        </div>
    </form>

    <div class="container mt-4">
        <h4>Histórico de Manutenções</h4>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Data Envio</th>
                    <th>Assistência Técnica</th>
                    <th>Descrição do Problema</th>
                    <th>Data de Retorno</th>
                </tr>
            </thead>
            <tbody id="historicoManutencao"></tbody>
        </table>

        <div class="text-center">
            <button type="submit" class="btn btn-success" id="salvarFicha">Salvar Ficha</button>
        </div>
    </div>

    <script>
        document.getElementById('salvarFicha').addEventListener('click', function () {
            alert("Ficha salva com sucesso!");
            location.reload(); 
        });

        const equipamentosMock = {
            "EQ001_Impressora_Laser": {
                codigo: "EQ001",
                descricao: "Impressora Laser",
                dataAquisicao: "2023-01-10",
                fornecedor: "Impressoras Pro Ltda",
                marca: "HP",
                grupo: "IMPRESSORA",
                periodicidade: 6
            },
            "EQ002_Computador_Desktop": {
                codigo: "EQ002",
                descricao: "Computador Desktop",
                dataAquisicao: "2022-08-05",
                fornecedor: "Tech Solutions",
                marca: "Dell",
                grupo: "COMPUTADOR",
                periodicidade: 12
            },
            "EQ003_Balança_Digital": {
                codigo: "EQ003",
                descricao: "Balança Eletrônica",
                dataAquisicao: "2021-03-15",
                fornecedor: "Pesos & Medidas",
                marca: "Toledo",
                grupo: "BALANÇA",
                periodicidade: 4
            }
        };

        document.getElementById('equipamento').addEventListener('change', function () {
            const equipamentoSelecionado = this.value;
            const dados = equipamentosMock[equipamentoSelecionado];

            if (dados) {
                document.getElementById('codigoEquipamento').value = dados.codigo;
                document.getElementById('descricaoEquipamento').value = dados.descricao;
                document.getElementById('dataAquisicao').value = dados.dataAquisicao;
                document.getElementById('fornecedor').value = dados.fornecedor;
                document.getElementById('marca').value = dados.marca;
                document.getElementById('grupo').value = dados.grupo;
                document.getElementById('periodicidade').value = dados.periodicidade;
            } else {
                document.getElementById('codigoEquipamento').value = "";
                document.getElementById('descricaoEquipamento').value = "";
                document.getElementById('dataAquisicao').value = "";
                document.getElementById('fornecedor').value = "";
                document.getElementById('marca').value = "";
                document.getElementById('grupo').value = "";
                document.getElementById('periodicidade').value = "";
            }
        });

        document.getElementById('adicionarManutencao').addEventListener('click', function () {
            const envio = document.getElementById('dataEnvio').value;
            const assistencia = document.getElementById('assistencia').value;
            const problema = document.getElementById('descricaoProblema').value;
            const retorno = document.getElementById('dataRetorno').value;

            if (envio && assistencia && problema) {
                const tabela = document.getElementById('historicoManutencao');
                const novaLinha = tabela.insertRow();

                novaLinha.insertCell(0).textContent = envio;
                novaLinha.insertCell(1).textContent = assistencia;
                novaLinha.insertCell(2).textContent = problema;
                novaLinha.insertCell(3).textContent = retorno;

                document.getElementById('dataEnvio').value = "";
                document.getElementById('assistencia').value = "";
                document.getElementById('descricaoProblema').value = "";
                document.getElementById('dataRetorno').value = "";
            } else {
                alert("Preencha todos os campos da manutenção!");
            }
        });
    </script>
</body>

</html>