<?php
class Database {
    private $db_server = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'phpbasic';
    private $conn;

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=$this->db_server;port=4306;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
