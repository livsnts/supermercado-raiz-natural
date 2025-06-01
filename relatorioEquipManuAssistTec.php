<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural - Equipamentos em Manutenção por Assistência</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f6f9;
        }

        .custom-container {
            margin-top: 2vw;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            margin-top: 20px;
        }

        #areaRelatorioManutencao {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .breadcrumb {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container-rel custom-container">
        <h1 class="text-center mb-4">Relatório de Equipamentos em Manutenção por Assistência Técnica</h1>

        <div class="card">
            <div class="card-header" style="background-color: #28a745; color: white;">
                Filtro do Relatório
            </div>
            <div class="card-body">
                <form id="filtroRelatorioManutencaoForm">
                    <div class="form-row align-items-end">
                        <div class="form-group col-md-8">
                            <label for="selectAssistencia">Selecione a Assistência Técnica:</label>
                            <select class="form-control" id="selectAssistencia" name="assistencia">
                                <option value="">-- Selecione uma Assistência --</option>
                                <option value="InfoTech Soluções">InfoTech Soluções</option>
                                <option value="Repara PC Master">Repara PC Master</option>
                                <option value="Conserta Tudo Já">Conserta Tudo Já</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <button type="button" id="btnGerarRelatorioManutencao" class="btn btn-success btn-block">
                                <i class="fas fa-file-alt"></i> Gerar Relatório
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="areaRelatorioManutencao" style="display: none;">
            <h3 id="tituloRelatorioManutencao" class="text-center"></h3>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Código Equipamento</th>
                            <th>Descrição Equipamento</th>
                            <th>Data Envio</th>
                            <th>Descrição Problema</th>
                        </tr>
                    </thead>
                    <tbody id="corpoTabelaRelatorioManutencao">
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-secondary" id="btnAbrirPDF">
                    <i class="fas fa-file-pdf"></i> Imprimir relatório
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
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
        document.getElementById('btnGerarRelatorioManutencao').addEventListener('click', function () {
            const selectAssistencia = document.getElementById('selectAssistencia');
            const assistenciaSelecionadaValue = selectAssistencia.value;
            // const assistenciaSelecionadaText = selectAssistencia.options[selectAssistencia.selectedIndex].text;
            const areaRelatorio = document.getElementById('areaRelatorioManutencao');
            const tituloRelatorio = document.getElementById('tituloRelatorioManutencao');
            const corpoTabela = document.getElementById('corpoTabelaRelatorioManutencao');

            corpoTabela.innerHTML = '';
            tituloRelatorio.textContent = '';

            if (!assistenciaSelecionadaValue) {
                alert('Por favor, selecione uma Assistência Técnica para gerar o relatório.');
                areaRelatorio.style.display = 'none';
                return;
            }

            tituloRelatorio.textContent = `Equipamentos em Manutenção na Assistência: ${assistenciaSelecionadaValue}`;

            let sampleData = [];
            if (assistenciaSelecionadaValue === 'InfoTech Soluções') {
                sampleData = [
                    { cod: 'CPU001', desc: 'Desktop Alta Performance', dataEnvio: '15/05/2025', problema: 'Não liga, sem sinal de vídeo.' },
                    { cod: 'IMP002', desc: 'Impressora Multifuncional Jato de Tinta', dataEnvio: '20/05/2025', problema: 'Falha na impressão colorida, manchas na página.' }
                ];
            } else if (assistenciaSelecionadaValue === 'Repara PC Master') {
                sampleData = [
                    { cod: 'CPU002', desc: 'Notebook Corporativo', dataEnvio: '10/05/2025', problema: 'Superaquecimento e desligamento inesperado.' }
                ];
            } else if (assistenciaSelecionadaValue === 'Conserta Tudo Já') {
                sampleData = [
                    { cod: 'BAL001', desc: 'Balança de Precisão Digital', dataEnvio: '22/05/2025', problema: 'Display não funciona corretamente.' },
                    { cod: 'IMP001', desc: 'Impressora Laser Colorida', dataEnvio: '18/05/2025', problema: 'Atolamento constante de papel.' }
                ];
            } else {
                sampleData = [

                ];
            }

            if (sampleData.length === 0) {
                corpoTabela.innerHTML = '<tr><td colspan="4" class="text-center">Nenhum equipamento em manutenção encontrado para esta Assistência Técnica.</td></tr>';
            } else {
                sampleData.forEach(equip => {
                    const row = corpoTabela.insertRow();
                    row.insertCell(0).textContent = equip.cod;
                    row.insertCell(1).textContent = equip.desc;
                    row.insertCell(2).textContent = equip.dataEnvio;
                    row.insertCell(3).textContent = equip.problema;
                });
            }
            areaRelatorio.style.display = 'block';

            document.getElementById('btnAbrirPDF').addEventListener('click', function () {
                window.open('pdf/relatorio-assistencia.pdf', '_blank');
            });
        });
    </script>
</body>

</html>