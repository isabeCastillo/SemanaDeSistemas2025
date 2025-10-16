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
    public function dia3() {
        echo $this->view("dia3View", [
            "title" => "Día 3 - Torneo de Futboll",
            "descripcion" => "Torneo de Futboll cancelado."
        ]);
    }
    public function dia4() {
        echo $this->view("dia4View", [
            "title" => "Día 4 - Feria de logros",
            "descripcion" => "Día dedicado a la convivencia, concursos y actividades grupales."
        ]);
    }
    public function dia5() {
        echo $this->view("dia5View", [
            "title" => "Día 5 - Clausura del Evento",
            "descripcion" => "Cierre oficial del evento con premiaciones, agradecimientos y despedida; Bingo, ponencias y torneo de video juegos."
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
