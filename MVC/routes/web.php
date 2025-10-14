<?php 

use lib\Route;
use app\controller\IndexController;

Route::get("/",[IndexController::class,"Index"]);
Route::get("/dia1",[IndexController::class,"Dia1"]);
Route::get("/dia2",[IndexController::class,"Dia2"]);
Route::get("/yo",[IndexController::class,"MiInformacion"]);

Route::dispatch();

?>
