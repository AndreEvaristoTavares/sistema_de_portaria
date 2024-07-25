<?php
include 'conexao_com_banco.php';
$data = array();
$sql = "SELECT nome, documento, apartamento  FROM moradores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}

$json_data = json_encode($data);

// Exibe o JSON
echo $json_data;
$conn->close();