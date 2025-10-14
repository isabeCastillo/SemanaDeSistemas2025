<?php
namespace app\controllers;

class HomeController {
    public function index() {
        echo $this->view("home", [
            "title" => "Semana de Sistemas 2025",
            "mensaje" => "Bienvenido al blog de la SDS25"
        ]);
    }

    public function view($vista, $data = []) {
        extract($data);
        $ruta = "../app/views/$vista.php";
        if(file_exists($ruta)) {
            ob_start();
            include $ruta;
            return ob_get_clean();
        } else {
            return "Vista no encontrada: $vista";
        }
    }
}
