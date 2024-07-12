<?php
include 'conexao_com_banco.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $rg = $conn->real_escape_string($_POST['rg']);
    $apartamento = (int) $_POST['apartamento'];
    
    // SQL para inserir os dados
    $sql = "INSERT INTO moradores (nome, rg, apartamento) VALUES ('$nome', '$rg', '$apartamento')";
       
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechando a conexão
$conn->close();