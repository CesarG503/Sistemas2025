<?php

namespace app\model;

use lib\Database;
use PDO;

class Visitas
{
    private $conn;
    private $table = "registro_visitas";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnetion();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY fecha_registro DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getLatest($limit = 10)
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY fecha_registro DESC LIMIT :limit";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function count()
    {
        $query = "SELECT COUNT(*) as total FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function create($nombre, $correo)
    {
        $query = "INSERT INTO " . $this->table . " (nombre, correo) VALUES (:nombre, :correo)";
        $stmt = $this->conn->prepare($query);
        
       
        $nombre = htmlspecialchars(strip_tags($nombre));
        $correo = htmlspecialchars(strip_tags($correo));
        
   
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
