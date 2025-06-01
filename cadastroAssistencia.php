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
        <form class= "container mt-5 p-4 rounded" style="background-color: #f8f9fa; border: 1px solid #28a745;" method="post">
            <h1>Cadastro de Assistência Técnica</h1>
            <div class="form-group">
                <label for="codigoAssistencia">Código</label>
                 <input type="text" class="form-control" id="codigoAssistencia" placeholder="Informe o código da assistência">
            </div>
            <div class="form-group">
                <label for="nomeAssitencia">Nome</label>
                <input type="text" class="form-control" id="nomeAssitencia" placeholder="Informe o nome da assistência">
            </div>
            <div class="form-group">
                <label for="enderecoAssistencia">Endereço</label>
                <input type="text" class="form-control" id="nomeAssitencia" placeholder="Informe o endereço da assistência">
            </div>
            <div class="form-group">
                <label for="cidadeAssistencia">Cidade</label>
                <input type="text" class="form-control" id="cidadeAssistencia" placeholder="Informe a cidade da assistência">
            </div>

            <div class="form-group">
            <label for="estadoAssistencias">Estado</label><br>
            <select class="custom-select" id="estadoAssistencia" aria-label="Escolha o estado">
                <option selected>Escolher...</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
            </select>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Salvar</button>
            <a href="index.php" class="btn btn-success ml-4" role="button">Voltar</a>
            </div>
        </form>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
