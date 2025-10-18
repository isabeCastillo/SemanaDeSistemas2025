<?php
namespace app\controllers;

class InfoController {
    public function info() {
        echo $this->view("informacionView", [
            "title" => "Mi Información",
        ]);
    }

    public function formVisita() {
        include("../app/models/Visita.php");
        $visita = new \app\models\Visita();
        $visitas = $visita->obtenerVisitas();

        echo $this->view("formVisita", [
            "title" => "Registrar Visita",
            "visitas" => $visitas
        ]);
    }

    public function registrarVisita() {
        include("../app/models/Visita.php");
        $visita = new \app\models\Visita();
        $visita->guardarVisita($_POST);
        
        $visitas = $visita->obtenerVisitas();

        echo $this->view("formVisita", [
            "title" => "Registrar Visita",
            "visitas" => $visitas,
            "mensaje" => "La visita fue registrada correctamente."
        ]);
    }

    private function view($vista, $data = []) {
        extract($data);
        $ruta = "../app/views/$vista.php";

        if (file_exists($ruta)) {
            ob_start();
            include $ruta;
            return ob_get_clean();
        } else {
            return "Vista no encontrada: $vista";
        }
    }
}
?>