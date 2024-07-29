<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <title>Sistema de portaria</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center bg-secondary p-3 flex-wrap">
        <h1 class="text-white text-sm">Sistema de Portaria, cadastro de moradores</h1>
        <a class="btn btn-dark" href="./home.html">Voltar para tela inicial</a>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
        
            <form style="width: 90%; max-width: 512px; height:600px" action="../back-end/cadastro.php" method="post">
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
                </select>
                </div>
                <div class="form-group">
                    <label for="tipoCadastro">Tipo de Cadastro</label>
                    <select class="form-control" name="tipoCadastro" required>
                        <option value="" disabled selected>Selecione o tipo de cadastro</option>
                        <option value="morador">Morador</option>
                        <option value="visitante">Visitante</option>
                    </select>
                </div>
                
                <input  type="submit" class="btn btn-dark mt-2" value="enviar"/>
                <?php
                session_start();
                if (isset($_SESSION['cadastro_sucesso']) && !empty($_SESSION['cadastro_sucesso'])) {
                    echo '<div class="alert alert-success" m-2 role="alert">' . $_SESSION['cadastro_sucesso'] . '</div>';
                    $_SESSION['cadastro_sucesso'] = ''; // Limpe a mensagem após exibi-la
                }
                if (isset($_SESSION['login_erro']) && !empty($_SESSION['login_erro'])) {
                    echo '<div class="alert alert-danger m-2" role="alert">' . $_SESSION['login_erro'] . '</div>';
                    $_SESSION['login_erro'] = ''; // Limpe a mensagem de erro após exibi-la
                }
                ?>
            </form>
    </main>
</body>
</html>

