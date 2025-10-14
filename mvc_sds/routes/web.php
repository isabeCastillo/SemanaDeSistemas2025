<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiaController;
use app\controllers\InfoController;

// Ruta principal (Inicio del blog)
Route::get("/", [HomeController::class, "index"]);

// Rutas para los días del evento
Route::get("/dia1", [DiaController::class, "dia1"]);
Route::get("/dia2", [DiaController::class, "dia2"]);
Route::get("/dia3", [DiaController::class, "dia3"]);
Route::get("/dia4", [DiaController::class, "dia4"]);
Route::get("/dia5", [DiaController::class, "dia5"]);

// Ruta de información personal
Route::get("/mi-informacion", [InfoController::class, "index"]);

// Rutas para formulario de registro de visitas
Route::get("/visitas", [InfoController::class, "formVisita"]);
Route::post("/registrar-visita", [InfoController::class, "registrarVisita"]);

Route::dispatch();
