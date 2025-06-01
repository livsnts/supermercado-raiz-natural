<style>
     @import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap');

       body {
        font-family: "Exo", sans-serif;
    }
    
    .container {
            margin-top: 10vw;
            max-width: 40vw;
        }

        h1 {
            text-align: center;
            padding-bottom: 5px;
        }

        .d-flex {
            justify-content: center;
            padding-top: 8px;
        }

        .btn-hover-custom:hover {
        background-color: #218838; 
        border-color: #1e7e34;
    }

    .container-rel {
        max-width: 1200px;
        margin: 40px auto; 
        padding: 20px
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: green;">
        <img src="img/cart.webp" alt="" style="max-width: 50px;" href="index.php"><a class="navbar-brand" href="index.php">Supermercado Raiz Natural</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="cadastroMarca.php">Marca</a>
                        <a class="dropdown-item" href="cadastroAssistencia.php">Assistência Técnica</a>
                        <a class="dropdown-item" href="cadastroDepartamento.php">Departamento</a>
                        <a class="dropdown-item" href="cadastroEquipamento.php">Equipamento</a>
                        <a class="dropdown-item" href="cadastroFornecedor.php">Fornecedor</a>
                        <a class="dropdown-item" href="cadastroGrupo.php">Grupo</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Movimentações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="manutencaoEquipamento.php">Manutenção</a>
                        <a class="dropdown-item" href="localizacaoEquipamento.php">Localização</a>
                    </div>

                    <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="relatorioEquipPorGrupo.php">Equipamentos por Grupo</a>
                        <a class="dropdown-item" href="relatorioEquipManuAssistTec.php">Equipamentos em Manutenção por Assistência Técnica</a>
                        <a class="dropdown-item" href="relatorioEquipPorDepart.php">Equipamentos por Departamento</a>
                    </div>
                    
                </li>
            </ul>
        </div>
    </nav>