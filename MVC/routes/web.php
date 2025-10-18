<?php 

use lib\Route;
use app\controller\IndexController;
use app\controller\VisitasController;

Route::get("/",[IndexController::class,"Index"]);
Route::get("/dia1",[IndexController::class,"Dia1"]);
Route::get("/dia2",[IndexController::class,"Dia2"]);
Route::get("/dia3",[IndexController::class,"Dia3"]);
Route::get("/dia4",[IndexController::class,"Dia4"]);
Route::get("/dia5",[IndexController::class,"Dia5"]);
Route::get("/yo",[IndexController::class,"MiInformacion"]);
Route::get("/visitas",[VisitasController::class,"index"]);
Route::post("/visitas/registrar",[VisitasController::class,"store"]);

Route::dispatch();

?>
