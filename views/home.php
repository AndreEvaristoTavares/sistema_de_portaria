<?php
    session_start();

    if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
        header("Location: ../index.php");
        exit;
    }
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sistema de portaria</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center bg-secondary p-3 flex-wrap">
        <h1 class="text-white">Sistema de Portaria</h1>
        <ul class="navbar-nav" >
            <li class="nav-item" >
              <a href="../back-end/logoff.php" class="btn btn-dark" > Sair </a>
            </li>
        </ul>
    </header>
    <main class="container text-center">
        <div class="row mt-5">
            <div class="col-md-6 col-lg-3 mb-3">
                <a class="btn btn-dark btn-block" href="./cadastro.php">Cadastro</a>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <a class="btn btn-dark btn-block" href="./visualizar_dados_morador.php">Lista de moradores</a>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <a class="btn btn-dark btn-block" href="./visualizar_dados_visita.php">Lista de visitantes</a>
            </div>
        </div>
    </main>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>