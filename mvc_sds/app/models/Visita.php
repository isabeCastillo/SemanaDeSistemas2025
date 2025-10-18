<?php
namespace app\models;

use PDO;
use PDOException;

class Visita {
    private $host = "db";
    private $db_name = "db_blog";
    private $username = "root";
    private $password = "rootpass";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function guardarVisita($data) {
        $this->getConnection();

        $sql = "INSERT INTO tbl_visitas (nombre, correo, comentario, fecha) 
                VALUES (:nombre, :correo, :comentario, NOW())";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ":nombre" => $data["nombre"],
            ":correo" => $data["correo"],
            ":comentario" => $data["comentario"]
        ]);
    }

    public function obtenerVisitas() {
        $this->getConnection();
        $sql = "SELECT nombre, correo, comentario, fecha 
                FROM tbl_visitas 
                ORDER BY fecha DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>