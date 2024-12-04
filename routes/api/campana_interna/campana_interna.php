<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Faldones\FaldonesController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\CampanaInterna\CampanaInternaController;


/*Mod Proveedor CAmapana*/
Route::post("/post/store_campana_interna", [CampanaInternaController::class, "store_campana_interna"])->middleware('checkpermisionroute:"801"');
Route::get("/get/edit_campana_interna/{id}", [CampanaInternaController::class, "edit_campana_interna"])->middleware('checkpermisionroute:"800.802"');
Route::get("/get/campana_interna", [CampanaInternaController::class, "get_campana_interna"])->middleware('checkpermisionroute:"800"');
Route::get("/get/campana_interna_dashboard", [CampanaInternaController::class, "get_campana_interna_dashboard"])->middleware('checkpermisionroute:"800"');
Route::get("/get/campana_interna_delete", [CampanaInternaController::class, "get_campana_interna_elimninadas"])->middleware('checkpermisionroute:"800"');
Route::put("/put/update_campana_interna/{id}", [CampanaInternaController::class, "update_campana_interna"])->middleware('checkpermisionroute:"802"');
Route::put("/put/comment_campana_interna/{id}", [CampanaInternaController::class, "comment_campana_interna"])->middleware('checkpermisionroute:"800"');
Route::delete("/delete/campana_interna/{id}", [CampanaInternaController::class, "delete_campana_interna"])->middleware('checkpermisionroute:"803"');
Route::delete("/delete/comentario_campana_interna/{id}", [CampanaInternaController::class, "delete_comentario_campana_interna"])->middleware('checkpermisionroute:"800"');
Route::get("/get/comentario_campana_interna/{id}", [CampanaInternaController::class, "comentario_campana_interna"])->middleware('checkpermisionroute:"800"');
Route::get("/get/comentario_campana_interna_deleted/{id}", [CampanaInternaController::class, "comentario_campana_interna_deleted"])->middleware('checkpermisionroute:"800"');
Route::put("/put/campana_interna_activate/{id}", [CampanaInternaController::class, "campana_interna_activate"])->middleware('checkpermisionroute:"800"');
Route::put("/put/campana_interna_desactivate/{id}", [CampanaInternaController::class, "campana_interna_desactivate"])->middleware('checkpermisionroute:"800"');
Route::get("/get/campana_interna_pendiente", [CampanaInternaController::class, "campana_interna_pendiente"])->middleware('checkpermisionroute:"800"');
Route::get("/get/campana_interna_up", [CampanaInternaController::class, "campana_interna_up"])->middleware('checkpermisionroute:"800"');

Route::put("/put/up_campana_interna/{id}", [CampanaInternaController::class, "up_campana_interna"])->middleware('checkpermisionroute:"800"');
Route::put("/put/aprobar_campana_interna", [CampanaInternaController::class, "aprobar_campana_interna"]);
Route::put("/put/rechazar_campana_interna", [CampanaInternaController::class, "rechazar_campana_interna"]);
Route::get("/get/materiales_campana_interna/{id}", [CampanaInternaController::class, "get_materiales_campanas"])->middleware('checkpermisionroute:"800"');
Route::get("/get/comentarios_campanas_interna/{id}", [CampanaInternaController::class, "get_comentarios_campanas"])->middleware('checkpermisionroute:"800"');
Route::get("/get/generar_materiales_campana/{id}", [CampanaInternaController::class, "generar_materiales"])->middleware('checkpermisionroute:"800"');
Route::get("/get/campana_interna_ultimo_archivo/{id}", [CampanaInternaController::class, "campana_interna_ultimo_archivo"])->middleware('checkpermisionroute:"800"');
