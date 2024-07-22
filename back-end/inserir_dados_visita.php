<?php
include 'conexao_com_banco.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $documento = $conn->real_escape_string($_POST['documento']);
    $apartamento = (int) $_POST['apartamento'];
    
    // SQL para inserir os dados
    $sql = "INSERT INTO visitantes (nome, documento, apartamento) VALUES ('$nome', '$documento', '$apartamento')";
       
    if ($conn->query($sql) === TRUE) {
        header("Location: ../front-end/confirmacao_de_cadastro.html");
        exit();
    } else {
        header("Location: ../front-end/erro_na_operacao.html");
        exit();
    }
}

// Fechando a conexão
$conn->close();