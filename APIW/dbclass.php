<?php

class Database {

    private $host = "localhost";
    private $username = "loicfallon";
    private $password = "efficom";
    private $database = "efficom_workshop";

    public $conn;

    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>