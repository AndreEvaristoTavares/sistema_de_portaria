<?php
$config = require 'config.php';
// Exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Criando a conexão
$conn = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);


// Verificando a conexão
if ($conn->connect_error) {
    echo "erro conexao...";
    exit();
}
?>