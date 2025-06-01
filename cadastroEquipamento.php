<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural - Cadastro de Equipamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
     <?php include('header.php'); ?>

        <form class="container mt-5 p-4 rounded" style="background-color: #f8f9fa; border: 1px solid #28a745;">
            <h1 class="mb-4">Cadastro de Equipamentos</h1>

            <div class="form-group">
                <label for="codigoEquipamento">Código do Equipamento:</label>
                <input type="text" class="form-control" id="codigoEquipamento" name="codigoEquipamento" placeholder="Ex: EQ00123">
            </div>

            <div class="form-group">
                <label for="descricaoEquipamento">Descrição do Equipamento:</label>
                <input type="text" class="form-control" id="descricaoEquipamento" name="descricaoEquipamento" placeholder="Ex: Impressora Laser Colorida">
            </div>

            <div class="form-group">
                <label for="dataAquisicao">Data de Aquisição:</label>
                <input type="date" class="form-control" id="dataAquisicao" name="dataAquisicao">
            </div>

            <div class="form-group">
                <label for="fornecedorEquipamento">Fornecedor:</label>
                <select class="form-control" id="fornecedorEquipamento" name="fornecedorEquipamento">
                    <option value="">Selecione o Fornecedor</option>
                    <option value="1">Fornecedor A</option>
                    <option value="2">Fornecedor B</option>
                </select>
            </div>

            <div class="form-group">
                <label for="marcaEquipamento">Marca:</label>
                <select class="form-control" id="marcaEquipamento" name="marcaEquipamento">
                    <option value="">Selecione a Marca</option>
                    <option value="1">Marca X</option>
                    <option value="2">Marca Y</option>
                </select>
            </div>

            <div class="form-group">
                <label for="grupoEquipamento">Grupo:</label>
                <select class="form-control" id="grupoEquipamento" name="grupoEquipamento">
                    <option value="">Selecione o Grupo</option>
                    <option value="1">IMPRESSORA</option>
                    <option value="2">COMPUTADORES</option>
                      <option value="2">BALANÇAS ELETRÔNICAS</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tempoManuPrev">Manutenção Preventiva a cada (meses):</label>
                <input type="number" class="form-control" id="tempoManuPrev" name="tempoManuPrev" placeholder="Ex: 6">
            </div>

            <div class="d-flex">
                <button type="submit" class="btn btn-success btn-hover-custom">Salvar Equipamento</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>