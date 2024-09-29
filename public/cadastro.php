<?php
include '../config/conexao_com_banco.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($conn->real_escape_string($_POST['nome']));
    $documento = trim($conn->real_escape_string($_POST['documento']));
    $apartamento = (int) $_POST['apartamento'];
    $tipoCadastro = trim($_POST['tipoCadastro']);

    $tabela = ($tipoCadastro == 'morador') ? "moradores" : "visitantes";
    $cadastro_sucesso = false;
    
    // SQL para inserir os dados
    $query = $conn->prepare("INSERT INTO $tabela (nome, documento, apartamento) VALUES (?, ?, ?)");
    $query->bind_param("ssi", $nome, $documento, $apartamento);
       
    if ($query->execute()) {
        $cadastro_sucesso = true;
        $_SESSION['cadastro_sucesso'] = 'Cadastro realizado com sucesso!';
        header("Location: ../app/views/cadastro.php");
        exit();
    } else {
        $_SESSION['cadastro_sucesso'] = 'erro no cadastro...';
        header("Location: ../app/views/cadastro.php");
        exit();
    }
}
$conn->close();
?>


