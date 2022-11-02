<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="https://www.stwautomacao.com.br/wp-content/themes/stwautomacao/images/favicon.png?v=1627676919">
    <title>STW - Soluções em Automação</title>
</head>
<body>

    <!-- inicio navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <img class="navbar-brand logo ms-5" src="img/logo.png">
            <div class="collapse navbar-collapse position-absolute bottom-0 end-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item ">
                        <a class="nav-link active btn me-1 mb-2" aria-current="page" href="?page=home"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn me-1" aria-current="page" href="?page=novo"><b>NOVA RECEITA</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn me-1" aria-current="page" href="?page=listar"><b>LISTAR RECEITAS</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active btn me-1" aria-current="page" href="?page=novo-ingrediente"><b>NOVO INGREDIENTE</b></a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link active btn" aria-current="page" href="?page=listar-ingredientes"><b>LISTAR INGREDIENTES</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <!--/fim navbar -->

    <!-- inicio controle de páginas -->
    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-dark container-md">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include_once "config.php";
                    switch(@$_REQUEST["page"]) {
                        case "home":
                            include("home.php");
                            break;
                        case "novo":
                            include("nova-receita.php");
                            break;
                        case "listar":
                            include("listar-receita.php");
                            break;
                        case "salvar":
                            include("salvar-receita.php");
                            break;
                        case "editar":
                            include("editar-receita.php");
                            break;
                        case "ingredientes";
                            include("ingredientes-receita.php");
                            break;
                        case "listar-ingredientes";
                            include("listar-ingredientes.php");
                            break;
                        case "salvar-ingrediente";
                            include("salvar-ingrediente.php");
                            break;
                        case "editar-ingrediente":
                            include("editar-ingrediente.php");
                            break;
                        case "novo-ingrediente":
                            include("novo-ingrediente.php");
                            break;
                        default:
                            include("home.php");
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
    <!--/ fim controle de páginas -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>