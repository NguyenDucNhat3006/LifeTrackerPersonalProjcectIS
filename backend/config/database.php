<?php
class Database {
    private $host = "127.0.0.1";
    private $db_name = "lifetracker_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            // ket noi PDO voi tuy chon Vietnamese
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=". $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch( PDOException $exception ) {
            echo "Lỗi kết nối Cơ sở dữ liệu: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>