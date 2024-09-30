<?php

class DataBase{
    private $conn = null;
    private $config = null;

    public function __construct(){
        $this->conn = require '../../config/config.php';
        $this->connect();
    }

    public function connect(){
        $this->conn = new mysqli(
            $this->config['host'], 
            $this->config['username'], 
            $this->config['password'], 
            $this->config['dbname']
        );

        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }
    }

    public function getConnection(){
        return $this->conn;
    }

    public function close() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}