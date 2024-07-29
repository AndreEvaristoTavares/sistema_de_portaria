<?php
include 'conexao_com_banco.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar as credenciais
    $query = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
    $query->bind_param("ss", $usuario, $senha);
    $query->execute();
    $resultado = $query->get_result();

    if ($resultado->num_rows > 0) {
        // Se o usuário existir, redireciona para a página de portaria
        $_SESSION['login_erro'] = '';
        header("Location: ../views/home.html");
        exit();
    } else {
        $_SESSION['login_erro'] = 'Usuário ou senha inválidos';
        header("Location: ../index.php");
        exit();
    }
}
$conn->close();
