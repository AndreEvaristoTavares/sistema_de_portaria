<?php
require 'DataBase.php';

class Morador{
    private $db;
    public $nome = '';
    public $documento = '';
    public $apartamento = 0;

    public function __construct(){
        $this->db = new DataBase();
    }
    public function cadastro($nome, $documento, $apartamento){
        $conn = $db->getConnection();
        $stmt = $db->prepare("INSERT INTO $tabela (nome, documento, apartamento) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nome, $documento, $apartamento);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
}