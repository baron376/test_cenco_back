<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Faldones\FaldonesController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\Mantencion\MantencionController;

/*Mod Proveedor CAmapana*/
Route::post("/post/store_mantencion", [MantencionController::class, "store_mantencion"])->middleware('checkpermisionroute:"701"');
Route::get("/get/edit_mantencion/{id}", [MantencionController::class, "edit_mantencion"])->middleware('checkpermisionroute:"700.702"');
Route::get("/get/mantencion", [MantencionController::class, "get_mantencion"])->middleware('checkpermisionroute:"700.701.702.703.704.705.706.707.708.709.710.711.712.713.714"');
Route::get("/get/mantencion_by_state/{id}", [MantencionController::class, "get_mantencion_by_state"])->middleware('checkpermisionroute:"700.701.702.703.704.705.706.707.708.709.710.711.712.713.714"');
Route::get("/get/mantencion_dashboard", [MantencionController::class, "get_mantencion_dashboard"])->middleware('checkpermisionroute:"700"');
Route::put("/put/update_mantencion/{id}", [MantencionController::class, "update_mantencion"])->middleware('checkpermisionroute:"702"');
Route::delete("/delete/mantencion/{id}", [MantencionController::class, "delete_mantencion"])->middleware('checkpermisionroute:"703"');
Route::put("/put/mantencion_activate/{id}", [MantencionController::class, "mantencion_activate"])->middleware('checkpermisionroute:"700"');
Route::put("/put/mantencion_desactivate/{id}", [MantencionController::class, "mantencion_desactivate"])->middleware('checkpermisionroute:"700"');
Route::get("/get/mantencion_pendiente", [MantencionController::class, "mantencion_pendiente"]);
Route::get("/get/mantencion_up", [MantencionController::class, "mantencion_up"]);
Route::get("/get/mantencion_delete", [MantencionController::class, "get_mantencion_delete"])->middleware('checkpermisionroute:"700"');

Route::put("/put/up_mantencion/{id}", [MantencionController::class, "up_mantencion"])->middleware('checkpermisionroute:"700"');
Route::put("/put/aprobar_mantencion", [MantencionController::class, "aprobar_mantencion"])->middleware('checkpermisionroute:"704"');
Route::put("/put/liberar_mantencion", [MantencionController::class, "liberar_mantencion"])->middleware('checkpermisionroute:"714"');
Route::put("/put/rechazar_mantencion", [MantencionController::class, "rechazar_mantencion"])->middleware('checkpermisionroute:"705"');
Route::put("/put/devolver_mantencion", [MantencionController::class, "devolver_mantencion"])->middleware('checkpermisionroute:"714"');
Route::put("/put/finalizar_mantencion/{id}", [MantencionController::class, "finalizar_mantencion"])->middleware('checkpermisionroute:"715"');
Route::get("/get/elementos_mantencion/{id}", [MantencionController::class, "get_elementos_mantencion"])->middleware('checkpermisionroute:"700"');
Route::get("/get/comentarios_mantencion/{id}", [MantencionController::class, "get_comentarios_mantencion"])->middleware('checkpermisionroute:"700"');
