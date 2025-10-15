<?php
namespace app\controllers;

class DiaController {
    public function dia1() {
        echo $this->view("dia1View", [
            "title" => "Día 1 - Inauguración",
            "descripcion" => "Inicio oficial de la Semana de Sistemas 2025, presentación de autoridades, primeras ponencias y hackathon."
        ]);
    }
    public function dia2() {
        echo $this->view("dia2View", [
            "title" => "Día 2 - Talleres",
            "descripcion" => "Desarrollo de talleres de manera virtual sobre la toma de decisiones, Laravel y filament y la IA Multimodal."
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
