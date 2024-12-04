<?php
use App\Http\Controllers\RepositorioUnificado\RepositoriUnificadoController;

Route::get("/get/get_repositorios", [RepositoriUnificadoController::class, "index"])->middleware('checkpermisionroute:"1101.1102.1103.1104.1105"');
Route::get("/get/get_modulos", [RepositoriUnificadoController::class, "get_modulos"])->middleware('checkpermisionroute:"1102.1103"');
Route::post("/post/store_repositorio", [RepositoriUnificadoController::class, "store"])->middleware('checkpermisionroute:"1102"');
Route::get("/get/get_edit_repositorio/{id}", [RepositoriUnificadoController::class, "edit"])->middleware('checkpermisionroute:"1103"');
Route::put("/put/update_repositorio/{id}", [RepositoriUnificadoController::class, "update"])->middleware('checkpermisionroute:"1103"');
Route::delete("/delete/{id}", [RepositoriUnificadoController::class, "delete"])->middleware('checkpermisionroute:"1104"');

Route::get("/get/get_repositorios_modulo/{id}", [RepositoriUnificadoController::class, "get_repositorios_modulo"])->middleware('checkpermisionroute:"1101"');

