<?php
include 'conexao_com_banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar as credenciais
    $query = "SELECT * FROM usuario_admin WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) > 0) {
        // Se o usuário existir, redireciona para a página de portaria
        header("Location: ./front-end/home.html");
        exit();
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
$conn->close();
?>
