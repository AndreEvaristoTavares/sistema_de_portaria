<?php
include '../back-end/conexao_com_banco.php';
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
        <h1 class="text-white text-sm">Sistema de Portaria, cadastro de moradores</h1>
        <a class="btn btn-dark" href="./home.php">Voltar para tela inicial</a>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center">
            <div class="mt-5" style="height:70px">
                <?php
                    if (isset($_SESSION['cadastro_sucesso']) && !empty($_SESSION['cadastro_sucesso'])) {
                        echo '<div style="width:512px" class="alert alert-success" role="alert">' . $_SESSION['cadastro_sucesso'] . '</div>';
                        $_SESSION['cadastro_sucesso'] = ''; 
                    }
                    if (isset($_SESSION['login_erro']) && !empty($_SESSION['login_erro'])) {
                        echo '<div style="position:fixed; top:100px; width:512px" class="alert alert-danger role="alert"">' . $_SESSION['login_erro'] . '</div>';
                        $_SESSION['login_erro'] = '';
                    }
                    ?>
            </div>
            <form class="mt-10" style="width: 90%; max-width: 512px;" action="../back-end/cadastro.php" method="post">
                
                <div class="form-group">
                    <label class="" for="">Nome</label>
                    <input class="form-control" type="text" name="nome" required>
                </div>
                <div class="form-group">
                    <label class="" for="">Documento</label>
                    <input class="form-control" type="text" name="documento" required>
                </div>
                <div class="form-group">
                    <label class="" for="apartamento">Apartamento</label>
                    <select class="form-control" name="apartamento" required>
                    <option value="" disabled selected>Selecione apartamento</option>
                    <option value="101">101</option>
                    <option value="102">102</option>
                    <option value="201">201</option>
                    <option value="202">202</option>
                    <option value="101">301</option>
                    <option value="102">402</option>
                    <option value="201">501</option>
                    <option value="202">602</option>
                    <option value="202">702</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="tipoCadastro">Tipo de Cadastro</label>
                    <select class="form-control" name="tipoCadastro" required>
                        <option value="" disabled selected>Selecione o tipo de cadastro</option>
                        <option value="morador">Morador</option>
                        <option value="visitante">Visitante</option>
                    </select>                
                <input  type="submit" class="btn btn-dark mt-4" value="enviar"/>
            </form>
        </div>
    </main>
</body>
</html>

