<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de portaria</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <div class="container-form">
            <form action="autenticar.php" method="post">
                <label for="usuario">Usuário: 
                    <input type="text" name="usuario" required>
                </label>
                <label for="senha">Senha:
                    <input type="password" name="senha" required>
                </label>
                <input type="submit" class="button-enviar" value="Entrar"/>
            </form>
        </div>
    </main>
</body>
</html>
</html>