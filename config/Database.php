<?php
class Database {
    private $db_server = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'phpbasic';
    private $conn;

    public function connect(){
        $this->conn = mysqli_connect($this->db_server, $this->db_user, $this->db_pass, $this->db_name, 4306);

        if($this->conn) {
            return $this->conn;
        }
        else{
            echo "Database connection failed: " . mysqli_connect_error();
        }
    }
}
