<?php

namespace app\controller;

use app\model\Visitas;

class VisitasController
{
    private $visitasModel;

    public function __construct()
    {
        $this->visitasModel = new Visitas();
    }
    public function index()
    {
        $totalVisitas = $this->visitasModel->count();
        $ultimasVisitas = $this->visitasModel->getLatest(10);
        
        return $this->view("visitas", [
            "title" => 'Registro de Visitas',
            "totalVisitas" => $totalVisitas,
            "ultimasVisitas" => $ultimasVisitas,
            "mensaje" => null,
            "error" => null
        ]);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            
          
            if (empty($nombre) || empty($correo)) {
                $error = "Por favor, completa todos los campos.";
            } elseif (!$this->visitasModel->isValidEmail($correo)) {
                $error = "Por favor, ingresa un correo electrónico válido.";
            } else {
        
                if ($this->visitasModel->create($nombre, $correo)) {
                    
                    header("Location: /MVC/public/visitas");
                    exit();
                } else {
                    $error = "Hubo un error al registrar tu visita. Intenta nuevamente.";
                }
            }
            
            $totalVisitas = $this->visitasModel->count();
            $ultimasVisitas = $this->visitasModel->getLatest(10);
            
            return $this->view("visitas", [
                "title" => 'Registro de Visitas',
                "totalVisitas" => $totalVisitas,
                "ultimasVisitas" => $ultimasVisitas,
                "mensaje" => null,
                "error" => $error
            ]);
        }
    }

    public function view($view, $data = [])
    {
        extract($data);
        if (file_exists("../app/views/$view.php")) {
            ob_start();
            include("../app/views/$view.php");
            $content = ob_get_clean();
            return $content;
        } else {
            echo "No se encontró la vista";
        }
    }
}
