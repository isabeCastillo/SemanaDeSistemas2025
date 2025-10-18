<?php
namespace app\controllers;

class InfoController {
    public function info() {
        echo $this->view("informacionView", [
            "title" => "Mi Información",
        ]);
    }

    private function view($vista, $data = []) {
        extract($data);
        $ruta = "../app/views/$vista.php";

        if (file_exists($ruta)) {
            ob_start();
            include $ruta;
            $contenido = ob_get_clean();
            return $contenido;
        } else {
            return "Vista no encontrada: $vista";
        }
    }
}
?>