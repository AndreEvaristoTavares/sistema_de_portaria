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
        <h1>Sistema de Portaria, cadastro de visitantes</h1>
    </header>
    <main>
        <div class="container-form">
            <form action="inserir_dados_visita.php" method="post">
                <label class="label-form" for="">Nome: 
                    <input type="text" name="nome" required>
                </label>
                <label class="label-form" for="">RG:
                    <input type="text" name="rg" required>
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

