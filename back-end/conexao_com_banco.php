<?php
// Exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Criando a conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_de_pessoas";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    header("Location: ../front-end/erro_na_operacao.html");
    exit();
}
?>