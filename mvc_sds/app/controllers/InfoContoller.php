<?php
namespace app\controllers;

class InfoController {

    private function view($vista, $data = []) {
        extract($data);
        $ruta = "../app/view/$vista.php";

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