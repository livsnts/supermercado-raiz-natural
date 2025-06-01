<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Raiz Natural - Controle de Equipamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .home-navbar { 
            margin-bottom: 2rem;
        }

        .home-jumbotron { 
            background-color: #e9f5e9;
            border: 1px solid #b8dbb9;
            color: #155724;
        }

        .home-jumbotron .display-4 { 
            color: #28a745;
        }

        .home-card-icon { 
            font-size: 3rem;
            color: #28a745;
            margin-bottom: 0.5rem;
        }

        .home-quick-access-card { 
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .home-quick-access-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .home-quick-access-card .card-title { 
            color: #28a745;
        }

        .home-footer { 
            padding: 1.5rem 0;
            margin-top: 3rem;
            background-color: #343a40;
            color: white;
            text-align: center;
        }
    </style>

<body>
    <?php include('header.php'); ?>
     <div class="container-sup mt-4"> 
        <div class="jumbotron text-center home-jumbotron"> 
            <h1 class="display-4">Bem-vindo ao Sistema de Controle de Equipamentos</h1>
            <p class="lead">Supermercado Raiz Natural</p>
            <hr class="my-4">
            <p>Navegue pelas seções utilizando o menu acima ou os cartões de acesso rápido abaixo.</p>
        </div>

        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 home-quick-access-card"> 
                    <div class="card-body">
                        <div class="home-card-icon"><i class="fas fa-cogs"></i></div> 
                        <h5 class="card-title">Gerenciar Equipamentos</h5>
                        <p class="card-text">Cadastre novos equipamentos e gerencie os existentes.</p>
                        <a href="cadastroEquipamento.php" class="btn btn-success">Acessar Cadastros</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 home-quick-access-card">
                    <div class="card-body">
                        <div class="home-card-icon"><i class="fas fa-tools"></i></div>
                        <h5 class="card-title">Manutenções</h5> 
                        <p class="card-text">Registre envios e retornos de equipamentos da manutenção.</p>
                        <a href="manutencaoEquipamento.php" class="btn btn-success">Registrar Manutenção</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 home-quick-access-card">
                    <div class="card-body">
                        <div class="home-card-icon"><i class="fas fa-map-marker-alt"></i></div> 
                        <h5 class="card-title">Localizações</h5> 
                        <p class="card-text">Controle a localização dos equipamentos nos departamentos.</p>
                        <a href="localizacaoEquipamento.php" class="btn btn-success">Controlar Localizações</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 home-quick-access-card">
                    <div class="card-body">
                        <div class="home-card-icon"><i class="fas fa-file-invoice"></i></div>
                        <h5 class="card-title">Emitir Relatórios</h5> 
                        <p class="card-text">Gere relatórios para análise e controle gerencial.</p>
                        <a href="relatorioEquipPorGrupo.php" class="btn btn-success">Ver Relatórios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="home-footer">
        <div class="container">
            <span>&copy; <?php echo date("Y"); ?> Supermercado Raiz Natural - Todos os direitos reservados.</span>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>