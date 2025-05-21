<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .container {
            margin-top: 10vw;
            max-width: 40vw;
        }

        h1 {
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
        <h1>Cadastro de Marca</h1>
        <form>
            <div class="form-group col-4">
                <label for="codigoMarca">Código</label>
                <input type="number" min="1" class="form-control" id="codigoMarca" placeholder="Informe o código da marca">
            </div>
            <div class="form-group">
                <label for="descricaoMarca">Descrição</label>
                <input type="text" class="form-control" id="descricaoMarca" placeholder="Informe a descrição da marca">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
