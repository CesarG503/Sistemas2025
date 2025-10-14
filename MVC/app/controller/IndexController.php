<?php 
namespace app\controller;

class IndexController{


    public function Index(){
        return $this->view("index",["title"=>'INCIO']);
    }
    public function Dia1(){
        return $this->view("dia1", ["title" => 'Día 1 - Semana de Sistemas']);
    }

    public function Dia2(){
        return $this->view("dia2", ["title" => 'Día 2 - Semana de Sistemas']);
    }

    public function MiInformacion(){
        return $this->view("mi-informacion", ["title" => 'Mi Información']);
    }

    public function view($view, $data = []){
        extract($data);
        if(file_exists("../app/views/$view.php"))
        {
            ob_start();
            include("../app/views/$view.php");
            $content = ob_get_clean();
            return $content;
        }
        else
            {
                echo "No se encontro la vista";
            }
    }

}

?>
