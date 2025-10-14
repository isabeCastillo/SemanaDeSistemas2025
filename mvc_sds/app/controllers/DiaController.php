<?php
namespace app\controllers;

class DiaController {
    public function dia1() {
        echo $this->view("dias/dia1", [
            "title" => "Día 1 - Inauguración",
            "descripcion" => "Inicio oficial de la Semana de Sistemas 2025, presentación de autoridades y primeras ponencias."
        ]);
    }

    private function view($vista, $data = []) {
        extract($data);
        $ruta = "../app/views/$vista.php";
        if (file_exists($ruta)) {
            ob_start();
            include "../app/views/layout/header.php";
            include $ruta;
            include "../app/views/layout/footer.php";
            return ob_get_clean();
        } else {
            return "Vista no encontrada: $vista";
        }
    }
}
