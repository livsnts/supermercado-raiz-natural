<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural - Movimentar Localização de Equipamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
 
        .custom-container {
            margin-top: 2vw;
            max-width: 70vw; 
        }
        h1, h2 {
            text-align: center;
            padding-bottom: 20px;
        }
        .d-flex-center {
            display: flex;
            justify-content: center;
            padding-top: 8px;
        }
         .table-responsive {
            margin-top: 20px;
        }
    </style>
</head>
<body>
     <?php include('header.php'); ?>

        <form id="localizacaoForm" class="mt-5 p-4 rounded container" style="background-color: #f8f9fa; border: 1px solid #28a745;">
            <h1 class="mb-4">Registrar Localização do Equipamento</h1>

            <div class="form-group">
                <label for="equipamentoLocalizacao">Equipamento:</label>
                <select class="form-control" id="equipamentoLocalizacao" name="equipamentoLocalizacao">
                    <option value="">Selecione o Equipamento</option>
                    <option value="EQ001_Impressora_Laser">EQ001 - Impressora Laser</option>
                    <option value="EQ002_Computador_Desktop">EQ002 - Computador Desktop</option>
                    <option value="EQ003_Balança_Digital">EQ003 - Balança Eletrônicas</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dataChegadaLocalizacao">Data de Chegada no Departamento:</label>
                    <input type="date" class="form-control" id="dataChegadaLocalizacao" name="dataChegadaLocalizacao">
                </div>
                <div class="form-group col-md-6">
                    <label for="dataSaidaLocalizacao">Data de Saída do Departamento:</label>
                    <input type="date" class="form-control" id="dataSaidaLocalizacao" name="dataSaidaLocalizacao">
                </div>
            </div>

            <div class="form-group">
                <label for="departamentoLocalizacao">Departamento de Destino:</label>
                <select class="form-control" id="departamentoLocalizacao" name="departamentoLocalizacao">
                    <option value="">Selecione o Departamento</option>
                    <option value="TI">TI</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Padaria">Contabilidade</option>
                    <option value="Açougue">Frete</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="observacaoChegada">Observação:</label>
                <textarea class="form-control" id="observacaoChegada" name="observacaoChegada" rows="2" placeholder="Alguma observação sobre a movimentação."></textarea>
            </div>

            <div class="d-flex-center">
                <button type="button" id="adicionarLocalizacaoBtn" class="btn btn-success">Adicionar ao Histórico de Localização</button>
            </div>
        </form>

        <hr>
       <div class="mt-5 p-4 rounded"><h2>Histórico de Localizações Adicionadas</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-success">
                    <tr>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Data Chegada</th>
                        <th scope="col">Data Saída</th>
                        <th scope="col">Observação</th>
                    </tr>
                </thead>
                <tbody id="tabelaLocalizacoesCorpo">
                    </tbody>
            </table>
        </div>
         <div class="d-flex-center mt-3">
            <button type="submit" form="localizacaoForm" class="btn btn-success">Salvar Histórico Completo</button>
            </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        document.getElementById('adicionarLocalizacaoBtn').addEventListener('click', function() {
            const equipamentoSelect = document.getElementById('equipamentoLocalizacao');
            const equipamentoValue = equipamentoSelect.value;
            const equipamentoText = equipamentoValue ? equipamentoSelect.options[equipamentoSelect.selectedIndex].text : '';
            
            const dataChegada = document.getElementById('dataChegadaLocalizacao').value;
            const dataSaida = document.getElementById('dataSaidaLocalizacao').value;
            
            const departamentoSelect = document.getElementById('departamentoLocalizacao');
            const departamentoValue = departamentoSelect.value;
            const departamentoText = departamentoValue ? departamentoSelect.options[departamentoSelect.selectedIndex].text : '';
            
            const observacao = document.getElementById('observacaoChegada').value;

            // Validação básica
            if (!equipamentoValue) {
                alert("Por favor, selecione o Equipamento.");
                return;
            }
            if (!dataChegada) {
                alert("Por favor, informe a Data de Chegada.");
                return;
            }
            if (!departamentoValue) {
                alert("Por favor, selecione o Departamento.");
                return;
            }
            // Data de saída pode ser opcional ao adicionar, mas validamos se estiver preenchida e é posterior à chegada
            if (dataSaida && dataChegada && dataSaida < dataChegada) {
                alert("A Data de Saída não pode ser anterior à Data de Chegada.");
                return;
            }

            const tabelaCorpo = document.getElementById('tabelaLocalizacoesCorpo');
            const novaLinha = tabelaCorpo.insertRow();

            const celulaEquipamento = novaLinha.insertCell(0);
            const celulaDepartamento = novaLinha.insertCell(1);
            const celulaDataChegada = novaLinha.insertCell(2);
            const celulaDataSaida = novaLinha.insertCell(3);
            const celulaObservacao = novaLinha.insertCell(4);

            celulaEquipamento.textContent = equipamentoText;
            celulaDepartamento.textContent = departamentoText;
            celulaDataChegada.textContent = dataChegada ? new Date(dataChegada + 'T00:00:00').toLocaleDateString('pt-BR') : ''; // Adiciona T00:00:00 para evitar problemas de fuso horário e formata
            celulaDataSaida.textContent = dataSaida ? new Date(dataSaida + 'T00:00:00').toLocaleDateString('pt-BR') : ''; // Adiciona T00:00:00 para evitar problemas de fuso horário e formata
            // Para limpar o formulário inteiro:
            document.getElementById('localizacaoForm').reset();
        });
    </script>
</body>
</html>