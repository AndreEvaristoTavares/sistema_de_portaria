<?php
include 'conexao_com_banco.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $rg = $conn->real_escape_string($_POST['rg']);
    $apartamento = (int) $_POST['apartamento'];
    
    // SQL para inserir os dados
    $sql = "INSERT INTO visitantes (nome, rg, apartamento) VALUES ('$nome', '$rg', '$apartamento')";
       
    if ($conn->query($sql) === TRUE) {
        header("Location: ../front-end/confirmacao_de_cadastro_visita.html");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechando a conexão
$conn->close();