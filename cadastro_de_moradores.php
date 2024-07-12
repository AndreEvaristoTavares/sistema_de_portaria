<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de portaria</title>
</head>
<body>
    <header>
        <h1>Sistema de Portaria</h1>
    </header>
    <main>
        <div class="container-form">
            <form action="inserir_dados.php" method="post">
                <label class="label-form" for="">Nome: 
                    <input type="text" name="nome">
                </label>
                <label class="label-form" for="">RG:
                    <input type="text" name="rg">
                </label>
                <label for="apartamento">Apartamento:
                <select name="apartamento" required>
                    <option value="" disabled selected>Selecione o apartamento</option>
                    <option value="101">101</option>
                    <option value="102">102</option>
                    <option value="201">201</option>
                    <option value="202">202</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
        </label>
                <input type="submit" class="button-enviar" value="enviar"/>
            </form>
        </div>
    </main>
    <script src="/script.js"></script>
</body>
</html>

