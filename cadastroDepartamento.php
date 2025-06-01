<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<?php include('header.php'); ?>
<form class="container mt-5 p-4 rounded" style="background-color: #f8f9fa; border: 1px solid #28a745;">
    <h1 class="mb-4">Cadastro de Departamento</h1>
    <div class="form-group">
        <label for="nome">Nome do Departamento:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Impressoras">
    </div>
    <div class="form-group">
        <label for="responsavel">Responsável:</label>
        <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Ex: Francisco Beltrão">
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