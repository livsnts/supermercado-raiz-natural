<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural - Equipamentos por Departamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body { background-color: #f4f6f9; }
        .custom-container { margin-top: 2vw; background-color: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .table-responsive { margin-top: 20px; }
        #areaRelatorioDepartamento { margin-top: 30px; padding: 20px; border: 1px solid #dee2e6; border-radius: 5px; background-color: #f8f9fa; }
        .breadcrumb { background-color: #e9ecef; }
    </style>
</head>
<body>
     <?php include('header.php'); ?>
    <div class="container-rel custom-container">
        <h1 class="text-center mb-4">Relatório de Equipamentos por Departamento</h1>
        <div class="card">
            <div class="card-header" style="background-color: #28a745; color: white;">
                Filtro do Relatório
            </div>
            <div class="card-body">
                <form id="filtroRelatorioDepartamentoForm">
                    <div class="form-row align-items-end">
                        <div class="form-group col-md-8">
                            <label for="selectDepartamento">Selecione o Departamento:</label>
                            <select class="form-control" id="selectDepartamento" name="departamento">
                                <option value="">-- Selecione um Departamento --</option>
                                <option value="TI">Tecnologia da Informação (TI)</option>
                                <option value="Financeiro">Financeiro</option>
                                <option value="Recursos Humanos">Recursos Humanos</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <button type="button" id="btnGerarRelatorioDepartamento" class="btn btn-success btn-block">
                                <i class="fas fa-file-alt"></i> Gerar Relatório
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="areaRelatorioDepartamento" style="display: none;">
            <h3 id="tituloRelatorioDepartamento" class="text-center"></h3>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Código Equipamento</th>
                            <th>Descrição Equipamento</th>
                            <th>Grupo do Equipamento</th>
                            <th>Data Chegada no Departamento</th>
                        </tr>
                    </thead>
                    <tbody id="corpoTabelaRelatorioDepartamento">
                        </tbody>
                </table>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-secondary" onclick="window.print()">
                    <i class="fas fa-print"></i> Imprimir Relatório
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        document.getElementById('btnGerarRelatorioDepartamento').addEventListener('click', function() {
            const selectDepartamento = document.getElementById('selectDepartamento');
            const departamentoSelecionadoValue = selectDepartamento.value;
            const departamentoSelecionadoText = selectDepartamento.options[selectDepartamento.selectedIndex].text;
            const areaRelatorio = document.getElementById('areaRelatorioDepartamento');
            const tituloRelatorio = document.getElementById('tituloRelatorioDepartamento');
            const corpoTabela = document.getElementById('corpoTabelaRelatorioDepartamento');

            corpoTabela.innerHTML = '';
            tituloRelatorio.textContent = '';

            if (!departamentoSelecionadoValue) {
                alert('Por favor, selecione um Departamento para gerar o relatório.');
                areaRelatorio.style.display = 'none';
                return;
            }

            tituloRelatorio.textContent = `Equipamentos Alocados no Departamento: ${departamentoSelecionadoText}`;

            let sampleData = [];
            if (departamentoSelecionadoValue === 'TI') {
                sampleData = [
                    { cod: 'CPU001', desc: 'Desktop Alta Performance', grupo: 'COMPUTADORES', dataChegada: '01/03/2025' },
                    { cod: 'IMP001', desc: 'Impressora Laser Colorida', grupo: 'IMPRESSORAS', dataChegada: '05/03/2025' },
                    { cod: 'SRV001', desc: 'Servidor de Rede', grupo: 'SERVIDORES', dataChegada: '10/02/2025' }
                ];
            } else if (departamentoSelecionadoValue === 'Financeiro') {
                sampleData = [
                    { cod: 'CPU002', desc: 'Notebook Corporativo', grupo: 'COMPUTADORES', dataChegada: '15/01/2025' },
                    { cod: 'IMP002', desc: 'Impressora Multifuncional Jato de Tinta', grupo: 'IMPRESSORAS', dataChegada: '20/01/2025' }
                ];
            } else {
                // Default empty or a generic message
            }


            if (sampleData.length === 0) {
                corpoTabela.innerHTML = '<tr><td colspan="4" class="text-center">Nenhum equipamento encontrado para este departamento.</td></tr>';
            } else {
                sampleData.forEach(equip => {
                    const row = corpoTabela.insertRow();
                    row.insertCell(0).textContent = equip.cod;
                    row.insertCell(1).textContent = equip.desc;
                    row.insertCell(2).textContent = equip.grupo;
                    row.insertCell(3).textContent = equip.dataChegada;
                });
            }
            areaRelatorio.style.display = 'block';
        });
    </script>
</body>
</html>