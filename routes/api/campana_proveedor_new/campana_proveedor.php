<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Faldones\FaldonesController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\CampanaProveedor\CampanaProveedorNewController;

/*Mod Proveedor CAmapana*/
Route::post("/post/store_campana_proveedor_new", [CampanaProveedorNewController::class, "store_campana_proveedor"])->middleware('checkpermisionroute:"300"');
Route::post("/post/store_new_campana_proveedor", [CampanaProveedorNewController::class, "store_new_campana_proveedor"])->middleware('checkpermisionroute:"300"');
Route::get("/get/edit_campana_proveedor_new/{id}", [CampanaProveedorNewController ::class, "edit_campana_proveedor"])->middleware('checkpermisionroute:"515.306.505"');
Route::get("/get/campana_proveedor_new", [CampanaProveedorNewController::class, "get_campana_proveedor"])->middleware('checkpermisionroute:"515.306.505"');
Route::get("/get/campana_proveedor_dashboard_new", [CampanaProveedorNewController::class, "campana_proveedor_dashboard"])->middleware('checkpermisionroute:"300.301.302.303.304.305.306.306.307.308.505"');
Route::get("/get/campana_proveedor_delete_new", [CampanaProveedorNewController::class, "get_campana_proveedor_elimninadas"])->middleware('checkpermisionroute:"505.306"');
Route::put("/put/update_campana_proveedor_new/{id}", [CampanaProveedorNewController::class, "update_campana_proveedor"])->middleware('checkpermisionroute:"301"');
Route::delete("/delete/campana_proveedor_new/{id}", [CampanaProveedorNewController::class, "delete_campana_proveedor"])->middleware('checkpermisionroute:"305"');
Route::put("/put/campana_proveedor_activate/{id}", [CampanaProveedorNewController::class, "campana_proveedor_activate"])->middleware('checkpermisionroute:"306"');
Route::put("/put/campana_proveedor_desactivate/{id}", [CampanaProveedorNewController::class, "campana_proveedor_desactivate"])->middleware('checkpermisionroute:"306"');
Route::get("/get/campana_proveedor_pendiente_new", [CampanaProveedorNewController::class, "campana_proveedor_pendiente"])->middleware('checkpermisionroute:"505.500"');
Route::get("/get/campana_proveedor_up_new", [CampanaProveedorNewController::class, "campana_proveedor_up"])->middleware('checkpermisionroute:"505.306"');
Route::get("/get/campana_proveedor_aprobada_new", [CampanaProveedorNewController::class, "campana_proveedor_aprobada"])->middleware('checkpermisionroute:"505.306"');
Route::get("/get/campana_proveedor_rechazada_new", [CampanaProveedorNewController::class, "campana_proveedor_rechazada"])->middleware('checkpermisionroute:"505.306"');

Route::put("/put/up_campana_proveedor_new/{id}", [CampanaProveedorNewController::class, "up_campana_proveedor"])->middleware('checkpermisionroute:"505"');
Route::put("/put/aprobar_campana_proveedor_new", [CampanaProveedorNewController::class, "aprobar_campana"])->middleware('checkpermisionroute:"302"');
Route::put("/put/rechazar_campana_proveedor_new", [CampanaProveedorNewController::class, "rechazar_campana"])->middleware('checkpermisionroute:"302"');
Route::get("/get/materiales_campanas_new/{id}", [CampanaProveedorNewController::class, "get_materiales_campanas"])->middleware('checkpermisionroute:"515.306.505"');
Route::get("/get/comentarios_campanas_new/{id}", [CampanaProveedorNewController::class, "get_comentarios_campanas"])->middleware('checkpermisionroute:"515.306.505"');
Route::post("/post/campana_proveedor_update_cupo", [CampanaProveedorNewController::class, "campana_proveedor_update_cupo"])->middleware('checkpermisionroute:"300"');
//Route::post("/post/campana_proveedor_update_cup/{id}", [CampanaProveedorNewController::class, "campana_proveedor_update_cup"]->middleware('checkpermisionroute:"300"');
