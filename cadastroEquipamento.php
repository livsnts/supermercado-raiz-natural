<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<?php include('header.php'); ?>
<form class="container mt-5 p-4 rounded" style="background-color: #f8f9fa; border: 1px solid #28a745;">
    <h1 class="mb-4" style="color: #28a745;">Cadastro de Equipamento</h1>

    <div class="form-group">
        <label for="nome">Nome do Equipamento:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Impressora HP">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Ex: Impressora com tinta colorida">
    </div>

    <div class="form-group">
        <label for="numero_serie">Número de Série:</label>
        <input type="text" class="form-control" id="numero_serie" name="numero_serie" placeholder="Ex: 0DKJOKAI928-437">
    </div>

    <div class="d-flex">
        <button type="submit" class="btn btn-success btn-hover-custom">Salvar</button>
    </div>
</form>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>