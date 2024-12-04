<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Faldones\FaldonesController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\CampanaProveedor\CampanaProveedorController;
use App\Http\Controllers\CampanaProveedor\CampanaProveedorNewController;

/*Mod Proveedor CAmapana*/
Route::post("/post/store_campana_proveedor", [CampanaProveedorController::class, "store_campana_proveedor"])->middleware('checkpermisionroute:"300"');
Route::get("/get/edit_campana_proveedor/{id}", [CampanaProveedorController::class, "edit_campana_proveedor"])->middleware('checkpermisionroute:"515.306.505"');
Route::get("/get/campana_proveedor", [CampanaProveedorController::class, "get_campana_proveedor"])->middleware('checkpermisionroute:"515.306.505"');
Route::get("/get/campana_proveedor_dashboard", [CampanaProveedorController::class, "campana_proveedor_dashboard"])->middleware('checkpermisionroute:"300.301.302.303.304.305.306.306.307.308.505"');
Route::get("/get/campana_proveedor_delete", [CampanaProveedorController::class, "get_campana_proveedor_elimninadas"])->middleware('checkpermisionroute:"505.306"');
Route::put("/put/update_campana_proveedor/{id}", [CampanaProveedorController::class, "update_campana_proveedor"])->middleware('checkpermisionroute:"301"');
Route::delete("/delete/campana_proveedor/{id}", [CampanaProveedorController::class, "delete_campana_proveedor"])->middleware('checkpermisionroute:"305"');
Route::put("/put/campana_proveedor_activate/{id}", [CampanaProveedorController::class, "campana_proveedor_activate"])->middleware('checkpermisionroute:"306"');
Route::put("/put/campana_proveedor_desactivate/{id}", [CampanaProveedorController::class, "campana_proveedor_desactivate"])->middleware('checkpermisionroute:"306"');
Route::get("/get/campana_proveedor_pendiente", [CampanaProveedorController::class, "campana_proveedor_pendiente"])->middleware('checkpermisionroute:"505.500"');
Route::get("/get/campana_proveedor_up", [CampanaProveedorController::class, "campana_proveedor_up"])->middleware('checkpermisionroute:"505.306"');
Route::get("/get/campana_proveedor_aprobada", [CampanaProveedorController::class, "campana_proveedor_aprobada"])->middleware('checkpermisionroute:"505.306"');
Route::get("/get/campana_proveedor_rechazada", [CampanaProveedorController::class, "campana_proveedor_rechazada"])->middleware('checkpermisionroute:"505.306"');

Route::put("/put/up_campana_proveedor/{id}", [CampanaProveedorController::class, "up_campana_proveedor"])->middleware('checkpermisionroute:"505"');
Route::put("/put/aprobar_campana_proveedor", [CampanaProveedorController::class, "aprobar_campana"])->middleware('checkpermisionroute:"302"');
Route::put("/put/rechazar_campana_proveedor", [CampanaProveedorController::class, "rechazar_campana"])->middleware('checkpermisionroute:"302"');
Route::get("/get/materiales_campanas/{id}", [CampanaProveedorController::class, "get_materiales_campanas"])->middleware('checkpermisionroute:"515.306.505"');
Route::get("/get/comentarios_campanas/{id}", [CampanaProveedorController::class, "get_comentarios_campanas"])->middleware('checkpermisionroute:"515.306.505"');


Route::get("/get/campana_proveedor_new", [CampanaProveedorNewController::class, "get_campana_proveedor"])->middleware('checkpermisionroute:"515.306.505"');
