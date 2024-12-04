<?php 
use App\Http\Controllers\Incidencias\IncidenciasCampanasController;


Route::post("/post/store_incidencia", [IncidenciasCampanasController::class, "store_incidencia"])->middleware('checkpermisionroute:"1002"');
Route::get("/get/get_incidencias_campanas", [IncidenciasCampanasController::class, "get_incidencias_campanas"])->middleware('checkpermisionroute:"1001"');
Route::get("/get/get_incidencias_campanas_deleted", [IncidenciasCampanasController::class, "get_incidencias_campanas_deleted"])->middleware('checkpermisionroute:"1001"');
Route::delete("/delete/delete_incidencia/{id}", [IncidenciasCampanasController::class, "delete_incidencia"])->middleware('checkpermisionroute:"1004"');
Route::get("/get/get_edit_incidencia/{id}", [IncidenciasCampanasController::class, "get_edit_incidencia"])->middleware('checkpermisionroute:"1003"');
Route::put("/put/update_incidencia/{id}", [IncidenciasCampanasController::class, "update_incidencia"])->middleware('checkpermisionroute:"1003"');

Route::get("/get/get_incidencias_campanas_proveedor", [IncidenciasCampanasController::class, "get_incidencias_campanas_proveedor"])->middleware('checkpermisionroute:"516"');
Route::get("/get/get_incidencias_campanas_deleted_proveedor", [IncidenciasCampanasController::class, "get_incidencias_campanas_deleted_proveedor"])->middleware('checkpermisionroute:"516"');
/*Route::delete("/delete/delete_campana/{id}", [FaldonesController::class, "delete_campana"]);
Route::get("/get/formato_faldones", [FaldonesController::class, "get_formato_faldones"]);
Route::get("/get/plantilla_faldones", [FaldonesController::class, "get_plantilla_faldones"]);
Route::get("/get/edit_campana_faldones/{id}", [FaldonesController::class, "get_edit_campana_faldones"]);
Route::get("/get/edit_campana_faldones_ultimo_archivo/{id}", [FaldonesController::class, "get_edit_campana_faldones_ultimo_archivo"]);
Route::get("/get/campana_faldones", [FaldonesController::class, "get_campana_faldones"]);
Route::get("/get/campana_faldones_deleted", [FaldonesController::class, "get_campana_faldones_deleted"]);
Route::get("/get/campana_faldones_espera", [FaldonesController::class, "get_campana_faldones_espera"]);
Route::get("/get/campana_faldones_vigente", [FaldonesController::class, "get_campana_faldones_vigente"]);
Route::get("/get/campana_faldones_vencida", [FaldonesController::class, "get_campana_faldones_vencida"]);
Route::get("/get/campana_faldones_inactiva", [FaldonesController::class, "get_campana_faldones_inactiva"]);
Route::get("/get/save_archivo_faldon/{id}/{archivo}", [FaldonesController::class, "save_archivo_faldon"]);
Route::put("/put/update_campana_faldones/{id}", [FaldonesController::class, "update_campana_faldones"]);

Route::get("/get/plantillas", [PlantillasController::class, "get_plantillas"]);
Route::get("/get/plantillas_inactivas", [PlantillasController::class, "get_plantillas_inactivas"]);
Route::put("/put/plantilla_desactivate/{id}", [PlantillasController::class, "desactivate_plantilla"]);
Route::put("/put/plantilla_activate/{id}", [PlantillasController::class, "activate_plantilla"]);

Route::get("/get/get_faldones_express", [FaldonesExpressController::class, "get_faldones_express"]);
Route::get("/get/get_faldones_express_deleted", [FaldonesExpressController::class, "get_faldones_express_deleted"]);
Route::post("/post/store_faldones_express", [FaldonesExpressController::class, "store_faldones_express"]);
Route::get("/get/details_faldon/{id}", [FaldonesExpressController::class, "get_details_faldon_express"]);
Route::put("/put/update_faldon_express/{id}", [FaldonesExpressController::class, "update_faldon_express"]);
Route::delete("/delete/delete_faldon/{id}", [FaldonesExpressController::class, "delete_faldon"]);

Route::get("/get/generar_faldon_express/{id}", [FaldonesExpressController::class, "generar_faldon"]);

Route::get("/get/generar_faldon_campana/{id}", [FaldonesController::class, "generar_faldon"]);

Route::get("/get/generar_faldones_campana/{id}", [FaldonesController::class, "generar_faldones"]);

Route::get("/get/stock_productos/{idCampana}/{idSala}", [FaldonesController::class, "stock_productos"]);

Route::get("/get/download_stock_campana/{idCampana}/{idSala}", [FaldonesController::class, "download_stock_campana"]);

Route::get("/get/desactivate_stock_campana_sala/{idStock}", [FaldonesController::class, "desactivate_stock_campana_sala"]);

Route::get("/get/get_umb_faldones", [FaldonesExpressController::class, "get_umb_faldones"]);*/
