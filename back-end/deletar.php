<?php
include 'conexao_com_banco.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Deletar a linha se a solicitação for enviada
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Preparar e executar a query de delete
    $stmt = $conn->prepare("DELETE FROM visitas WHERE id = ?");
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo 'Registro deletado com sucesso';
    } else {
        echo 'Erro ao deletar o registro: ' . $stmt->error;
    }

    $stmt->close();
    header("Location: ../views/visualizar_dados_visita.php");

}