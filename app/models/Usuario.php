<?php
require 'DataBase.php';
class Usuario{
    private $db;
    public $usuario;
    public $senha;

    public function __construct(){
        $this->db = new DataBase();
    }
    public function cadastro(){
        $conn = $db->getConnection();
        $stmt = $db->prepare("INSERT INTO $tabela (nome, documento, apartamento) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nome, $documento, $apartamento);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
}